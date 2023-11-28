function validate(){
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "8px";
  
  var text;
  if(name.length < 5){
    text = "Please Enter The Valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if(email.length < 6){
    text = "Please Enter The Valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <=10){
    text = "Please Enter The Feedback";
    error_message.innerHTML = text;
    return false;
  }
  alert("Submitted Successfully!");
  return true;
}