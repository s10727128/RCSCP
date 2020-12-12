var originalAlert = window.alert;

var message = document.getElementById("message");
var textbox = document.getElementById("textbox");
var button = document.getElementById("sbutton");

window.alert = function(){
   originalAlert("Congratuation! You sucessed!\n" + dome + "\nYou can go to next part.");
   document.getElementById("next_btn").style.display = "block";
   $( "#next_btn" ).attr("href","../level1-3.php?name=test");
}

button.addEventListener("click", function(){
   var newMessage = document.createElement("li");
   newMessage.innerHTML = textbox.value;
   message.appendChild(newMessage);


});