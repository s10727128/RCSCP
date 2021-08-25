var originalAlert = window.alert;

window.alert = function(){
   window.location.href = "XSS2done.php";
   originalAlert("Congratuation! You sucessed!\n" + "\nYou can go to next part.");
   //window.location.href = "XSS2done.php";
}