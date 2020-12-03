<?php
  header("Content-type: index.css"); 
?>
<!DOCTYPE html>
<html>
  <head>
<meta charset="utf-8">
<link rel="stylesheet" a href ="index.css">
<link rel="icon" href="../bird.jpg">
<title>專題首頁</title>
</head>

<body>

<?php
  echo "A";
?>
    <ul class="drop-down-menu-1">
        <!--第一個按鈕
      <li><a href="../Teamproject/description/description.html">網頁介紹</a>
      </li>-->

        <!--第二個按鈕-->       
      <li><a href="#">各大關卡</a>
          <ul>
              <li><a href="#">XSS</a>
                        <ul>
                          <li><a href="../playgame/level1-1.php">第一小關</a>
                          </li>
                          <li><a href="../playgame/level1-2.php">第二小關</a>
                          </li>
                          <li><a href="../playgame/level1-3.php">第三小關</a>
                          </li>
                        </ul>
              </li>
              <li><a href="#">CSRF</a>
                    <ul>
                      <li><a href="#">第一小關</a>
                      </li>
                      <li><a href="#">第二小關</a>
                      </li>
                      <li><a href="#">第三小關</a>
                      </li>
                    </ul>
              </li>
              <li><a href="#">SQL Injection</a>
                    <ul>
                      <li><a href="#">第一小關</a>
                      </li>
                      <li><a href="#">第二小關</a>
                      </li>
                      <li><a href="#">第三小關</a>
                      </li>
                    </ul>
              </li>
              <li><a href="#">DDOS</a>
                    <ul>
                      <li><a href="#">第一小關</a>
                      </li>
                      <li><a href="#">第二小關</a>
                      </li>
                      <li><a href="#">第三小關</a>
                      </li>
                    </ul>
              </li>
              <li><a href="#">密碼破解</a>
                <ul>
                 
                      <li><a href="../playgame/level5-1.php">第一小關</a>
                      </li>
                      <li><a href="../playgame/level5-2.php">第二小關</a>
                      </li>
                      <li><a href="#">第三小關</a>
                      </li>
                   
              </ul>
              </li>
          </ul>
      </li>
        <!--第四個按鈕--> 
      <li><a href="register/account/profile.php">個人資料</a>
      </li>
  </ul>

  <div id="top">
    <h1 style="font-size: 30px;">Welcome to Homepage<br><Br>資安遊戲間</h1>
  
  </div>

  <ul class="drop-down-menu-2">
   <!--第五個按鈕--> 
   <li><a href="register/login.html" >註冊/登入</a>
    <ul>
      <li><a href="#">個人資料</a>
        
      </li>
    </ul>
    
   </li>
     <!--第六個按鈕--> 
   <li><a href="https://forms.gle/YM4LhPU2JtQGR8F78">問題回報</a>
   </li>
  </ul>

<hr>
<!--簡介-->
<div id="description">
  <P>
    
  </P>

</div>

    
         <div id="h3">
          <h3>大綱</h3>
          <p>網站簡介 ☆可以打一些東西</p>
        </div>
        
        <div id="h1">
          <h1>123</h1> 
        </div>
      
</body>
</html>
