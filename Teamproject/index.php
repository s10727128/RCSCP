<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="index.css">
<meta charset="utf-8">
<title>專題首頁</title>
</head>

<body>
    <div id="top">
        <h1>Welcome to Our Homepage</h1>
        <p>資工3B專題</p>
    </div>
    <hr>

    <ul class="drop-down-menu">
        <!--第一個按鈕-->
      <li><a href="../Teamproject/description/description.html">網頁介紹</a>
      </li>

        <!--第二個按鈕-->       
      <li><a href="#">各大關卡</a>
          <ul>
              <li><a href="#">第一大關</a>
                  <ul>
                      <li><a href="#" id="myBtn">關卡介紹</button>
                      </li>
                      <li><a href="#">關卡</a>
                        <ul>
                          <li><a href="#">第一小關</a>
                          </li>
                          <li><a href="#">第一小關</a>
                          </li>
                          <li><a href="#">第三小關</a>
                          </li>
                        </ul>
                      </li>
                  </ul>

              </li>
              <li><a href="#">第二大關</a>
                <ul>
                  <li><a href="#">關卡介紹</a>
                  </li>
                  <li><a href="#">關卡</a>
                    <ul>
                      <li><a href="#">第一小關</a>
                      </li>
                      <li><a href="#">第一小關</a>
                      </li>
                      <li><a href="#">第三小關</a>
                      </li>
                    </ul>
                  </li>
              </ul>
              </li>
              <li><a href="#">第三大關</a>
                <ul>
                  <li><a href="#">關卡介紹</a>
                  </li>
                  <li><a href="#">關卡</a>
                    <ul>
                      <li><a href="#">第一小關</a>
                      </li>
                      <li><a href="#">第一小關</a>
                      </li>
                      <li><a href="#">第三小關</a>
                      </li>
                    </ul>
                  </li>
              </ul>
              </li>
              <li><a href="#">第四大關</a>
                <ul>
                  <li><a href="#">關卡介紹</a>
                  </li>
                  <li><a href="#">關卡</a>
                    <ul>
                      <li><a href="#">第一小關</a>
                      </li>
                      <li><a href="#">第一小關</a>
                      </li>
                      <li><a href="#">第三小關</a>
                      </li>
                    </ul>
                  </li>
              </ul>
              </li>
              <li><a href="#">第五大關</a>
                <ul>
                  <li><a href="#">關卡介紹</a>
                  </li>
                  <li><a href="#">關卡</a>
                    <ul>
                      <li><a href="#">第一小關</a>
                      </li>
                      <li><a href="#">第一小關</a>
                      </li>
                      <li><a href="#">第三小關</a>
                      </li>
                    </ul>
                  </li>
              </ul>
              </li>
          </ul>
      </li>
        <!--第四個按鈕--> 
      <li><a href="#">個人資料</a>
      </li>
        <!--第五個按鈕--> 
      <li><a href="register/id.html">註冊/登入</a>
      </li>
        <!--第六個按鈕--> 
      <li><a href="#">問題回報</a>
      </li>
  </ul>

  <!--關卡敘述-->
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><b>XSS跨網站腳本(Cross-Site Scripting, XSS)</b>是一種經常出現在Web
      應用程式中的電腦安全性漏洞，是由於Web應用程式對使用者的輸入過濾
      不足而產生的。攻擊者利用網站漏洞把惡意的腳本程式碼注入到網頁之中
      ，當使用者遊覽這些網頁時，就會執行其中的惡意程式碼，對受害使用者
      可能採取Cookie資瞭竊取、Session(連線)劫持、釣魚欺騙等各種攻擊。
      <br>
    
	    目前 XSS 攻擊的種類大致可以分成以下幾種類型：<br>
      <b>
        Stored XSS (儲存型)<br>
        Reflected XSS (反射型)<br>
        DOM-Based XSS (基於 DOM 的類型)<br>
      </b><br>

      <b>Reflected XSS (反射型)</b><br>
      Reflected 是指不會被儲存在資料庫中，而是由網頁後端直接嵌入由前端使用者所傳送過來的內容造成的，
      最常見的就是以 GET 方法傳送資料給伺服器時，伺服器未檢查就將內容回應到網頁上所產生的漏洞。
      或是攻擊者透過特定手法，誘使使用者去連接一個含有惡意代碼的URL，當受害者按下後，惡意的Javascript程式碼會直接在受害者主機上的瀏覽器執行。<br>
      
      <img src="/Teamproject/XSS-1.png" alt="反射型" width="500" height="600">

      <b>Stored XSS (持久型)</b><br>
      會被保存在伺服器資料庫中的 JavaScript 代碼引起的攻擊即為 Stored XSS，
      最常見的就是論壇文章、留言板等等，因為使用者可以輸入任意內容，若沒有確實檢查，
      那使用者輸入如 &ltscript&gt 等關鍵字就會被當成正常的 HTML 執行，標籤的內容也會被正常的作為 JavaScript 代碼執行。<br>

      

    

      
      

    </p>
  </div>

</div>
    
    <!--
  
     <div class="wrapper">
        <div id="menubar">
          <ul id="menulist">
            <li class="menuitem" href="#" >第 1 大關
            <li class="menuitem" href="#" >第 2 大關
            <li class="menuitem" href="#" >第 3 大關
            <li class="menuitem" href="#" >第 4 大關
            <li class="menuitem" href="#" >第 5 大關
          </ul>
         </div>
        -->
     <div class="wrapper">
        <div id="menubar">
         <div id="sidebar">
          <h3>test</h3>
          <p>資訊安全網站</p>
        </div>


        <!--關卡敘述按鈕觸發-->
        <script>
          // Get the modal
        var modal = document.getElementById("myModal");
        
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks on the button, open the modal
        btn.onclick = function() {
          modal.style.display = "block";
        }
        
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
</body>
</html>
