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
                            str = '<div class="atalk"><span>' + talkWords.value + '</span><img src="img/a.jpg"/><p>小哥哥</p></div>';
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