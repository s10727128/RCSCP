var originalAlert = window.alert;

window.alert = function(){
   window.location.href = "XSS2done.php";
   originalAlert("恭喜你!\n" + "\n你可以進入下一關了。");
}