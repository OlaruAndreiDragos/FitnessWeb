function validate_form() {
var name = document.getElementById('name').value;
var email = document.getElementById('email').value;
var message = document.getElementById('message').value;

var name_lgt = name.length;
var email_lgt = email.length;
var message_lgt = message.length;

error = false;

if(name_lgt < 5) {
    alert("The name is too short");
    error = true;
}
if(message_lgt < 10){
    alert("The message is too short");
    error = true;
}

if(error == false) {
    alert("Mesajul a fost trimis");
}
}