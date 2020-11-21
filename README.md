# championcrane

### Setting up the contact form.

We are using dotenv, a library that  allows a .env file to store environment variables (aka anything private like passwords, api keys, etc...).
As for the contact form, NodeMailer is the easiest and most popular free mailing library with node. We use it by using an email account you already have to send the email.

#### Here are the steps below to set it up for testing

1. Depending on the email account you use, be sure to check the NodeMailer docs [here](https://nodemailer.com/about/ "Nodemailer").
2. Create a .env file in the root directory.
3. Likely the only code you will have to write is in that file. If there are issues, consult the docs mentioned earlier and feel free to contact [me](https://github.com/Boka44 "Boka"). Write the code like below:

```
PASSWORD='example1234'
toEmail='example@aol.com'
fromEmail='example@gmail.com'
```

> Note: IF you have any questions reach out to me.