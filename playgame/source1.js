var originalAlert = window.alert;
/* Override window.alert*/
window.alert = function(){
   originalAlert("Congratuation! You sucessed!\n" + "\nYou can go to next part.");
   document.getElementById("next_btn").style.display = "block";
   $( "#next_btn" ).attr("href","../level1-2/level1-2.php?name=test");
}