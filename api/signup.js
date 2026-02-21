export default function handler(req, res) {
  if (req.method === 'POST') {
    const { username, password } = req.body;
    // TODO: save to database or external service
    res.status(200).json({ message: 'Signup successful!' });
  } else {
    res.status(405).json({ message: 'Method not allowed' });
  }
}
