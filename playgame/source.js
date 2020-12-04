var originalAlert = window.alert;

window.alert = function(){
   originalAlert("Congratuation! You sucessed!\n");
   document.getElementById("next_btn").style.display = "block";
   $(location).attr('href', '../Teamproject/index.php');
}
