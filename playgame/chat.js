var originalAlert = window.alert;
//var messagelogs = document.getElementById("messagelogs");
//var talkbox = document.getElementById("talkbox").innerText;
//var talkboxElement = document.getElementById("talkbox");
//var talkbox = talkboxElement.;
const form = document.forms['chat-form'];
const textbox = form.elements.talkbox.value;


window.alert = function(){
   originalAlert("Congratuation! You sucessed!\n" + "\nYou can go to next part.");
   document.getElementById("next_btn").style.display = "block";
   $( "#next_btn" ).attr("href","../playgame/level1-2.php?name=test");
}

function sendFunction(){
    var str = "";
    str = '<div class="message"><div class="user-photo"><img src="../elephant.jpeg"></div><p class="message_chat">' + talkbox + '</p></div>';
    messagelogs.innerHTML = messagelogs.innerHTML + str;
    document.getElementById("talkbox").value="";
}



