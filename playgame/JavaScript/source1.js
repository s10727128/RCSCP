var originalAlert = window.alert;

window.alert = function(){
   originalAlert("Congratuation! You sucessed!\n" + "\nYou can go to next part.");
   document.getElementById("next_btn").style.display = "block";
   $( "#next_btn" ).attr("href","../playgame/XSS game/level1-2.php?name=test");
}

$("#writeup").attr("href","../level1-1/level1-1writeup.txt");