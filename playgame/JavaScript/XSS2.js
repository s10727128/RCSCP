var originalAlert = window.alert;

window.alert = function(){
   window.location.href = "XSS2done.php";
   originalAlert("找到答案了~~~");
}