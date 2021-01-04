<?php
  header("Content-type: index.css"); 
  require_once('register/connect.php');
  $name='';
  session_start();
  $id = @$_SESSION['id']; 
?>
<!DOCTYPE html>
<html>
  <head>
  <title>TIK Gammer</title>
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="../bird.jpg">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href ="css/index.css" rel="stylesheet"  type="text/css">


</head>
 
<body>

<!--
  =================
      spinner
  =================
-->

<!--
  ============
  ul選單
  ============
-->
<div class="main">
    <ul class="drop-down-menu-1">     
      <li><a href="#">關卡</a>
          <ul>
              <li><a href="../playgame/gamepoint/level1index.html">XSS</a>       
              </li>
              <li><a href="#">CSRF</a>
                    <ul>
                      <li><a href="../playgame/level2-1-1.php">Level 1</a>
                      </li>
                      <li><a href="../playgame/level2-2-1.php">Level 2</a>
                      </li>
                      <li><a href="#">Level 3</a>
                      </li>
                    </ul>
              </li>
              <li><a href="../playgame/gamepoint/level3index.html">SQL Injection</a>
                    <ul>
                      <li><a href="#">Level 1</a>
                      </li>
                      <li><a href="#">Level 2</a>
                      </li>
                      <li><a href="#">Level 3</a>
                      </li>
                    </ul>
              </li>
              <li><a href="#">DDOS</a>
                    <ul>
                      <li><a href="">Level 1</a>
                      </li>
                      <li><a href="#">Level 2</a>
                      </li>
                      <li><a href="#">Level 3</a>
                      </li>
                    </ul>
              </li>
              <li><a href="../playgame/gamepoint/level5index.html">MISC</a>
                <ul>
                      <li><a href="../MISC/level5-1.php">Morse Code</a>
                      </li>
                      <li><a href="../playgame/level5-2.php">Reverse Engineering</a>
                      </li>
                      <li><a href="../playgame/level5-3.php">Stego</a>
                      </li>
              </ul>
              </li>
          </ul>
      </li>
      <?php
          $sql = "SELECT * FROM user WHERE ID='$id'";
          $result=mysqli_query($connect,$sql);
          if(mysqli_num_rows($result) > 0)
      {
	        while($row = mysqli_fetch_assoc($result))
	    {
          $nickname=$row["Nickname"];
	      	$name=$row["Username"];
	      	$access=$row["Access"];
    	}
          echo '<li><a href="index.php">歡迎! '.$nickname; //下拉選單開頭:暱稱
        	echo '<ul><li><a href="register/account/profile.php">個人資料</a>'; //下拉選單2:個人資料
          echo '<li><a href="register/logout.php">登出</a>'; //下拉選單3:登出 
          echo '</ul>';
          echo '</li>';
      }
        else
      {   
          echo '<li><a href="register/login.html">登入</a></li>';
      }
      ?>
    </ul>

</div>
  <div id="top">
    <h1 style="font-size: 30px;">Welcome To Gameground<br></h1>
  </div>

 <!--bar-->  
        <div class="bar">
            <ul>
                <li>
                    <a href="../Teamproject/html/trophy.html">
                        <div class="icon">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                        </div>
                        <div class="name"><span data-text="Trophy">Trophy</span></div>
                    </a>
                </li>
                <li>
                    <a href="../Teamproject/html/gameset.html">
                        <div class="icon">
                            <i class="fa fa-gamepad" aria-hidden="true"></i>
                            <i class="fa fa-gamepad" aria-hidden="true"></i>
                            
                        </div>
                        <div class="name"><span data-text="Game">Game</span></div>
                    </a>
                </li>
                <li>
                    <a href="test1/index.html">
                        <div class="icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <div class="name"><span data-text="Home">Home</span></div>
                    </a>
                </li>
                <!-- 遊戲
                <li>
                    <a href="register/login.html">
                        <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="name"><span data-text="Login">Login</span></div>
                    </a>
                </li>
                -->
                <li>
                    <a href="https://forms.gle/YM4LhPU2JtQGR8F78">
                        <div class="icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="name"><span data-text="Contact">Contact</span></div>
                    </a>
                </li>
            </ul>
    </div>

        
    <!--javascript-->
    <script src="js/test.js">
     
    </script>
</body>
</html>
