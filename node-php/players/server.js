const express = require('express');

const app = express();

const HOST = '0.0.0.0';
const PORT = 80;

app.get('/', (req, res) => {
  res.json({
    players: ['Mummy', 'Nnaemeka', 'Onyeka', 'Ifekandu', 'Chinaza', 'Nneoma', 'Ebere', 'Ephraim']
  });
});

app.listen(PORT, HOST);
console.log(`Running on http://${HOST}:${PORT}`);