const PASSWORD = process.env.PASSWORD;
const nodemailer = require('nodemailer');

const contactController = () => { };

const fromEmail = process.env.fromEmail;
const toEmail = process.env.toEmail;

const transporter = nodemailer.createTransport({
  service: 'AOL',
  auth: {
    user: fromEmail,
    pass: PASSWORD
  }
});

contactController.sendEmail = (req, res, next) => {

	res.set({
      'Access-Control-Allow-Origin': '*'
    })
    req.headers['Access-Control-Allow-Origin'] = '*'
    // console.log(req.body)
    let email = req.body.email;
    let coName = req.body.coname;
    let phone = req.body.phone;
    let fName = req.body.fname;
    let lName = req.body.lname;
    let message = req.body.message;
    let subject = 'Champion Crane Website Contact Form';

    let body = `FROM: ${fName} ${lName}\nCOMPANY: ${coName}\nPHONE#: ${phone}\nEMAIL: ${email}\n\n${message}`;
    // console.log(body)

    // const from = name && email ? `${name} <${email}>` : `${name || email}`
    const mailOptions = {
        from: fromEmail,
        to: toEmail,
        subject: subject,
        text: body
    };
    // console.log(mailOptions)
    transporter.sendMail(mailOptions, function(error, info){
        if(error){
            console.log(error);
            res.json({
                success: false,
                response: error
            });
            // res.redirect('back');
        }else{
            console.log('Message sent: ' + info.response);
            res.json({
                success: true,
                response: info.response
            });
            // res.redirect('back');
        };
    });

};


module.exports = contactController;