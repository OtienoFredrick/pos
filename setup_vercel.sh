#!/bin/bash
# setup_vercel.sh
# Automates restructuring of pos repo for Vercel deployment

set -e

echo "🔧 Fixing portal HTML files..."

# Ensure portal files exist
for FILE in portal/login.html portal/signup.html; do
  if [ -f "$FILE" ]; then
    echo "Updating $FILE ..."
    # Remove old asset references
    sed -i '/ripple.style.css/d' "$FILE"
    sed -i '/scrollToTopButton.style.css/d' "$FILE"
    sed -i '/favicon.ico/d' "$FILE"
    sed -i '/scrollToTopButton.js/d' "$FILE"

    # Insert correct references before </head>
    sed -i '/<\/head>/i \
<link rel="stylesheet" href="/ripple.style.css">\n\
<link rel="stylesheet" href="/scrollToTopButton.style.css">\n\
<link rel="icon" type="image/x-icon" href="/images/favicon.ico">\n\
<script src="/scrollToTopButton.js"></script>' "$FILE"

    # Fix form actions
    if [[ "$FILE" == *login.html ]]; then
      sed -i 's|<form[^>]*action="[^"]*"|<form action="/api/login" method="POST"|' "$FILE"
    fi
    if [[ "$FILE" == *signup.html ]]; then
      sed -i 's|<form[^>]*action="[^"]*"|<form action="/api/signup" method="POST"|' "$FILE"
    fi
  else
    echo "⚠️ $FILE not found, skipping."
  fi
done

echo "📂 Creating API routes..."
mkdir -p api

cat > api/signup.js <<'EOF'
export default function handler(req, res) {
  if (req.method === 'POST') {
    const { username, password } = req.body;
    // TODO: save to database or external service
    res.status(200).json({ message: 'Signup successful!' });
  } else {
    res.status(405).json({ message: 'Method not allowed' });
  }
}
EOF

cat > api/login.js <<'EOF'
export default function handler(req, res) {
  if (req.method === 'POST') {
    const { username, password } = req.body;
    // TODO: validate credentials
    res.status(200).json({ message: 'Login successful!' });
  } else {
    res.status(405).json({ message: 'Method not allowed' });
  }
}
EOF

echo "📦 Moving assets into public/..."
mkdir -p public
mv assets* public/ 2>/dev/null || true
mv ajax public/ 2>/dev/null || true
mv response.js public/ 2>/dev/null || true

echo "📝 Creating vercel.json..."
cat > vercel.json <<'EOF'
{
  "builds": [
    { "src": "public/**/*", "use": "@vercel/static" },
    { "src": "api/**/*.js", "use": "@vercel/node" }
  ]
}
EOF

echo "✅ Setup complete. You can now commit and deploy with:"
echo "   git add ."
echo "   git commit -m 'Restructure for Vercel deployment'"
echo "   git push origin main"
echo "   vercel --prod"