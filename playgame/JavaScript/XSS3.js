var originalAlert = window.alert;

window.alert = function(){
    originalAlert("Congratuation! You sucessed!\n" + "\nYou can go to next part.");
    document.getElementById("next_btn").style.display = "block";
    $( "#next_btn" ).attr("href","../playgame/level1-2.php?name=test");
 }

function sendFunction(){
    var talkbox = document.getElementById("talkbox").value;
    var str = "";
    str = '<div class="message"><div class="user-photo"><img src="../../photo/XSS/elephant.jpeg"></div><p class="message_chat">' + talkbox + '</p></div>';
    messagelogs.innerHTML = messagelogs.innerHTML + str;
    //alert(talkbox);     //test alert
    document.getElementById("talkbox").value="";
}