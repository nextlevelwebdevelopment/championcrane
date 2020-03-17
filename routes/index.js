const express = require('express');
const app = express();

app.get('/', (req, res, next) => {
    res.render('./public/index');
});

module.exports = app;