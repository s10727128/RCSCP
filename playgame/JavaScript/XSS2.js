var originalAlert = window.alert;

window.alert = function(){
   originalAlert("Congratuation! You sucessed!\n" + "\nYou can go to next part.");
   window.location.href = "XSS2done.php";
}
