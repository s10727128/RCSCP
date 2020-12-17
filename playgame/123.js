<div class="talk_con">
            <h1>歡迎進入聊天室</h1>
            <div class="talk_show" id="words">
                <div class="atalk"><span id="asay">吃飯了嗎？</span>
                    <img src="img/a.jpg" />
                    <p>小哥哥</p>
                </div>
                <div class="btalk"><span id="bsay">還沒呢，你呢？</span>
                    <img src="img/b.jpg" />
                    <p>小姐姐</p>
                </div>
            </div>
            <div class="talk_input">
                <select class="whotalk" id="who">

                    <option value="0">小哥哥說：</option>
                    <option value="1">小姐姐說：</option>
                </select>
                <textarea class="talk_word" id="talkwords"></textarea>
                <input type="button" value="傳送" class="talk_sub" id="talksub">
            </div>
        </div>
js程式碼：

<script type="text/javascript">
            var send = (function() {
                var Words = document.getElementById("words");
                var Who = document.getElementById("who");
                var talkWords = document.getElementById("talkwords");
                var talkSub = document.getElementById("talksub");
                return {

                    init: function() {
                        
                        this.event();
                    },
                    event: function() {
                        var that = this;
                        talkSub.onclick = function() {
                            that.chart();
                        }
                        talkWords.onkeydown = function(e) {
                            var keyCode = e.keyCode || e.which;
                            if(e.ctrlKey) {
                                if(keyCode == 13) {
                                    that.chart();;
                                }
                            }
                        }

                    },
                    chart: function() {
                        var str = "";
                        if(talkWords.value == "") {
                            
                            alert("訊息不能為空");
                            return;
                        }
                        if(Who.value == 0) {
                            str = '<div class="message"><span>' + talkWords.value + '</span><img src="img/a.jpg"/><p>小哥哥</p></div>';
                        } else {
                            str = '<div class="btalk"><span>' + talkWords.value + '</span><img src="img/b.jpg"/><p>小姐姐</p></div>';
                        }
                        Words.innerHTML = Words.innerHTML + str;
                        talkWords.value = "";

                    }

                }

            }());
            
            
            send.init();
            
        </script>