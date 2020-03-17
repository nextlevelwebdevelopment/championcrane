const express = require('express');
const path = require('path');
const bodyParser = require('body-parser');
const PORT = process.env.PORT || 3000;
const app = express();

app.use(express.static(path.join(__dirname, 'public')));

const index = require('./routes/index');

app.use(bodyParser.json());

app.set('view engine', 'ejs');

app.use('/', index);

app.listen(PORT, () => {
    console.log('Server is running on port ' + PORT);
});