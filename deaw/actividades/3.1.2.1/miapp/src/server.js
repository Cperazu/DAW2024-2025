const express = require('express');
const app = express();

// Ruta dinámica
app.get('/api/datos', (req, res) => {
    res.json({ mensaje: 'Hola desde el servidor Node.js!' });
});

const PORT = 3000;

app.listen(PORT, () => {
    console.log(`Servidor escuchando en http://localhost:${PORT}`);
});
