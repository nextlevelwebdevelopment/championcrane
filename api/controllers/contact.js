const express = require('express');
const bodyParser = require("body-parser");
const PORT = process.env.PORT || 8080;
const app = express();
const PASSWORD = process.env.PASSWORD;
const nodemailer = require('nodemailer');

const contactController = () => { };

app.use(bodyParser.json()); 
app.use(bodyParser.urlencoded({ extended: true }));

const fromEmail = 'nhrboka@aol.com';
const toEmail = 'nicholashrboka@gmail.com';

const transporter = nodemailer.createTransport({
  service: 'AOL',
  auth: {
    user: fromEmail,
    pass: PASSWORD
  }
});

contactController.sendEmail = (req, res) => {
	res.set({
      'Access-Control-Allow-Origin': '*'
    })
    req.headers['Access-Control-Allow-Origin'] = '*'
	let email = req.body.email;
	let name = req.body.name;
    let text = req.body.text;
    let subject = req.body.subject;

    // const from = name && email ? `${name} <${email}>` : `${name || email}`
    const mailOptions = {
        from: fromEmail,
        to: toEmail,
        subject: subject,
        text
    };

    transporter.sendMail(mailOptions, function(error, info){
        if(error){
            console.log(error);
            res.json({response: 'error'});
        }else{
            console.log('Message sent: ' + info.response);
            res.json({response: info.response});
        };
    });

};


module.exports = contactController;