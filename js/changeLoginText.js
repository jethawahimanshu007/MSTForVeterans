function changeLoginText(sessionSet){
if(sessionSet==0)
$("#loginLink").text("Login");
else {
  $("#loginLink").text("Logout");
}
return;
}
