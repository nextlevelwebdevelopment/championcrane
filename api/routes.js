const router = require('express').Router();

const contactController = require('./controllers/contact');

// This is where we set up the routes for the API, and connect the request with the proper controller.

router.post('/contact', contactController.sendEmail);

module.exports = router;