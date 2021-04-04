

function mainFunction(){
<script src="https://smtpjs.com/v3/smtp.js"> </script>
Email.send({
  Host : "smtp.gmail.com",
  Username : "sdlocalsales@gmail.com",
  Password : "Hassan56",
  To : "novahunicorn@gmail.com",
  From : "sdlocalsales@gmail.com",
  Subject : "This is the subject",
  Body : "Test 1 ",
}).then(
message => alert(message)
);
}
