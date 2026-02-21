export default function handler(req, res) {
  if (req.method === 'POST') {
    const { username, password } = req.body;
    // TODO: validate credentials
    res.status(200).json({ message: 'Login successful!' });
  } else {
    res.status(405).json({ message: 'Method not allowed' });
  }
}
