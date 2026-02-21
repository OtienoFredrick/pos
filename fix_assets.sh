#!/bin/bash
# fix_assets.sh
# Ensures pages include the correct public asset references

FILES=("pos/portal/signup.php" "pos/portal/login.php")

for FILE in "${FILES[@]}"; do
  if [ -f "$FILE" ]; then
    echo "Fixing $FILE ..."
    # Remove any old asset references
    sed -i '/ripple.style.css/d' "$FILE"
    sed -i '/scrollToTopButton.style.css/d' "$FILE"
    sed -i '/favicon.ico/d' "$FILE"
    sed -i '/scrollToTopButton.js/d' "$FILE"

    # Insert correct references before closing </head>
    sed -i '/<\/head>/i \
<link rel="stylesheet" href="/ripple.style.css">\n\
<link rel="stylesheet" href="/scrollToTopButton.style.css">\n\
<link rel="icon" type="image/x-icon" href="/images/favicon.ico">\n\
<script src="/scrollToTopButton.js"></script>' "$FILE"
  else
    echo "File $FILE not found, skipping."
  fi
done

echo "✅ Asset references fixed in signup.php and login.php"
