<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="chat.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Room</title>
    <script src="chat.js"></script>

</head>
<body>
    <div class="message_box" id="messagebox">
        <div class="message_logs" id="messagelogs">
            <div class="message">
                <div class="user-photo"><img src="../elephant.jpeg"></div>
                <p class="message_chat">What's up, Bro!</p>
            </div>
            <div class="message">
                <div class="user-photo"><img src="../elephant.jpeg"></div>
                <p class="message_chat">Haha</p>
            </div>
        </div>
        
        <div class="chat-form">
            <input class="talk_box" name="talkbox" id="talkbox" value="123"> 
            <button id="chat-form-button" onclick="sendFunction()">Send</button>
        </div>
    </div>

</body>
</html>
