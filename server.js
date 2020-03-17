const express = require('express');
require('dotenv').config();
const path = require('path');
const bodyParser = require('body-parser');
const PORT = process.env.PORT || 3000;
const app = express();

app.use(express.static(path.join(__dirname, 'public')));

const index = require('./routes/index');
const api = require('./api/routes');

app.use(bodyParser.json());

app.set('view engine', 'ejs');

app.use('/', index);
app.use('/api', api);

app.listen(PORT, () => {
    console.log('Server is running on port ' + PORT);
});