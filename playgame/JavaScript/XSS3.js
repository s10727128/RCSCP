var originalAlert = window.alert;

window.alert = function(){
   originalAlert("找到答案了~~~");
   window.location.href = "XSS3done.php";
}

function sendFunction(){
    var talkbox = document.getElementById("talkbox").value;
    var str = "";
    str = '<div class="message"><div class="user-photo"><img src="../../photo/XSS/elephant.jpeg"></div><p class="message_chat">' + talkbox + '</p></div>';
    messagelogs.innerHTML = messagelogs.innerHTML + str;
    document.getElementById("talkbox").value="";
}