var originalAlert = window.alert;

window.alert = function(){
   window.location.href = "XSS3done.php";
   originalAlert("恭喜你!\n" + "\n你可以進入下一關了。");
}

function sendFunction(){
    var talkbox = document.getElementById("talkbox").value;
    var str = "";
    str = '<div class="message"><div class="user-photo"><img src="../../photo/XSS/elephant.jpeg"></div><p class="message_chat">' + talkbox + '</p></div>';
    messagelogs.innerHTML = messagelogs.innerHTML + str;
    document.getElementById("talkbox").value="";
}