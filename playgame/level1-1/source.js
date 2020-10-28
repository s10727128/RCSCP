/*輸入值顯示*/
function myFunction(){
   var x = document.getElementById("input1").value;
   document.getElementById("demo").innerHTML = "Your answer is: " + x;
}

var originalAlert = window.alert;
/* Override window.alert*/
window.alert = function(x){
   originalAlert("Congratuation! You sucessed!\n" + x + "\nYou can go to next part.");
   document.getElementById("next_btn").style.display = "block";
   $( "#next_btn" ).removeClass("next_no").addClass("next_yes");
   $( "#next_btn" ).attr("href","/playgame/level1-2.html");
}