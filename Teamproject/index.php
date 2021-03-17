<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TIK Gammer</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/index.css" rel="stylesheet" type="text/css">
</head>

<body>
  <!--PreLoader-->
  <div class="loader">
    <div class="loader-inner">
      <div class="cssload-loader"></div>
    </div>
  </div>

  <!--PreLoader Ends-->

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">TIK GAME
        <span class="sr-only">(current)</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">網站介紹</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#photo">相片</a>
          </li> -->
          <?php
          $RootDir = $_SERVER['DOCUMENT_ROOT'];
          $connectDir = "$RootDir/js-hackgame/Teamproject/register/connect.php";
          require_once($connectDir);
          $name = '';
          session_start();
          $id = @$_SESSION['id'];
          $sql = "SELECT * FROM user WHERE ID='$id'";
          $result = mysqli_query($connect, $sql);
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $name = $row["Username"];
              $access = $row["Access"];
              $Nickname = $row["Nickname"];
            }
            //echo "歡迎.$name".'<br>';
            echo '<li class="nav-item">';
            echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/account/profile.php">' . $Nickname . "(" . $name . ")" . '</a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/logout.php">登出</a>';
            echo '</li>';
            if ($access == 1) {
              echo '<li class="nav-item">';
              echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/account/access.php">資料表</a>';
              echo '</li>';
            }
          } else {
            echo '<li class="nav-item">';
            echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/register.php">註冊</a>';
            echo '</li>';
            echo '<li class="nav-item">';
            echo  '<a class="nav-link js-scroll-trigger" href="/js-hackgame/Teamproject/register/login.php">登入</a>';
            echo '</li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>



  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('/js-hackgame/photo/index/hack1.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h3 class="display-4">First Slide</h3>
            <p class="lead">put photo</p> -->
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('/js-hackgame/photo/index/hack2.jpg');">

        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('/js-hackgame/photo/index/hack3.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <!-- <h3 class="display-4">Third Slide</h3>
            <p class="lead">put photo3</p> -->
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- 有改過顏色
  <section id="services">
    <div class="container" style="border: 1px solid #000;">
      <div class="row" >
        <div class="col-lg-5 mr-auto">

          <h2 style="text-align: center;">網站介紹</h2>
          <p class="lead">現今社會中，充斥著許多的網路犯罪手法，使用者常常在沒有資訊安全意識的情況下，點下來自惡意人士所傳的網址，導致銀行存款被盜走，或是下載非官方的破解版軟件，以致電腦內的所存的個人資料被竊取。為了提升大家對於資訊安全的基本概念及意識，故此設計的此網站，讓大家對於資訊安全有基本的認知。同時藉由實際的操作遊玩，讓有興趣但無從下手的人，可以跨出對於資訊安全領域的第一步，同時推廣相關的資安競賽及遊戲網站，以提升此領域的人才。</p>
        </div>
        <div class="col-lg-5 mx-auto">

          <h2 style="text-align: center;">網站介紹</h2>
          <p class="lead">現今社會中，充斥著許多的網路犯罪手法，使用者常常在沒有資訊安全意識的情況下，點下來自惡意人士所傳的網址，導致銀行存款被盜走，或是下載非官方的破解版軟件，以致電腦內的所存的個人資料被竊取。為了提升大家對於資訊安全的基本概念及意識，故此設計的此網站，讓大家對於資訊安全有基本的認知。同時藉由實際的操作遊玩，讓有興趣但無從下手的人，可以跨出對於資訊安全領域的第一步，同時推廣相關的資安競賽及遊戲網站，以提升此領域的人才。</p>
        </div>
      </div>
    </div>
  </section> -->

<!--Some Feature -->
<section id="our-feature" class="single-feature padding" >
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-7 text-sm-left text-center wow fadeInLeft" data-wow-delay="300ms">
                <div class="heading-title mb-4">
                    <h2 class="darkcolor font-normal bottom30"><span class="defaultcolor">朝陽資工</span>網站介紹</h2>
                </div>
                <p class="bottom35">一、專案規劃:本公司團隊的每位菁英，無論是網頁設計抑是程式設計，皆有專門的技術人員與設計師執行，保證給客戶最專業的規劃與推薦。</p>
                <p class="bottom35">二、專屬設計:針對每位客戶的產業及產品特性，我們會在與您討論之後，精心為您挑選合適的圖片素材及整體風格配色，讓您的網站更能呈現貴司的企業形象與文化。</p>
                <p class="bottom32">三、專業服務:從初步設計網站至結束，我們皆指派專屬業務同仁及專案負責人員，全程負責您的案件，讓您能更了解網站的製作流程與細節。 </p>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-5 wow fadeInRight" data-wow-delay="300ms">
            </div>
        </div>
    </div>

<br><br><br><br><br><br>
<!--Some Feature ends-->

<div class="hack3">

    <div class="container" >

        <!-- <img src="" alt="image"  > -->
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-7 col-sm-12">
            <div class="heading-title bottom30 wow fadeInUp" style="visibility: visible;  animation-name: fadeInUp;">
              <span>What’s Information Security?</span>
              <h2 class="darkcolor font-normal text-center text-md-left">什麼是資訊安全?</h2>
            </div>
          </div>
          <div class="col-lg-6 col-md-5 col-sm-12">
            <p class="text-center text-md-left">資訊安全（簡稱「資安」）為一總稱，涵蓋了網路、網際網路、端點、API、雲端、應用程式以及容器等各項領域的安全機制，是藉由建立一套安全策略，來共同協防您的數位資料。用來保護電腦系統、網路和資料等各類資訊技術的完整性，以避免遭受攻擊、毀損或出現未經授權的存取動作。</p>
          </div>
        </div>
        <div class="row d-flex align-items-center" id="app-feature">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="text-center text-md-right">
              <div class="feature-item mt-3 wow fadeInLeft" style="visibility: visible;  animation-name: fadeInLeft;">
                <!-- <div class="icon"><i class="fas fa-cog"></i></div> -->
                <div class="text">
                  <h3 class="bottom15">
                    <span class="d-inline-block">網站風格符合企業形象</span>
                  </h3>
                  <p>如果公司有LOGO與品牌標識、營業資料、宣傳手冊等等..，這些產品識別需要適當的呈現在網頁中，這就是建立公司品牌與網站一致性，也是增加信任感一個重要部分，新的與舊有的客戶可以容易的辨識公司品牌，並且與網站產生認同感。</p>
                </div>
              </div>
              <div class="feature-item mt-5 wow fadeInLeft" style="visibility: visible;  animation-name: fadeInLeft;">
                <!-- <div class="icon"><i class="fas fa-edit"></i></div> -->
                <div class="text">
                  <h3 class="bottom15">
                    <span class="d-inline-block">大標題文字取代美工文字</span>
                  </h3>
                  <p>早期沒有響應式的網頁設計時，形象圖片都是以美工圖案來設計，這樣的設計好處是簡單，僅需再美工軟體處理好再放到網頁即可，成本較低，但這樣的設計在行動裝置上卻無法自動調整到適合的尺寸，解析度也不夠好，而且SEO效果較差，因搜尋引擎無法辨識，現在最好的方式是用文字來設計主標題與副標題，才能讓手機、平板、電腦等所有客戶都能有最棒的視覺體驗。</p>

                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="app-image top30">
              <div class="app-slider-lock-btn"></div>

              <!-- <div class="app-slider-lock">
              <img src="images/iphone-slide-lock.jpg" alt="">
            </div> -->

              <div id="app-slider" class="owl-carousel owl-theme owl-loaded owl-drag">

                <!-- <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-470px, 0px, 0px); transition: all 0s ease 0s; width: 1645px;">
                  <div class="owl-item cloned" style="width: 235px;">
                    <div class="item">
                      <img src="images/iphone-slide2.jpg" alt="">
                    </div>
                  </div>

                  <div class="owl-item cloned" style="width: 235px;">
                    <div class="item">
                      <img src="images/iphone-slide3.jpg" alt="">
                    </div>
                  </div>

                  <div class="owl-item active" style="width: 235px;">
                    <div class="item">
                      <img src="images/iphone-slide1.jpg" alt="">
                    </div>
                  </div>


                  <div class="owl-item cloned" style="width: 235px;">
                    <div class="item">
                      <img src="images/iphone-slide2.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div> -->

                <!-- <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div> -->

                <div class="owl-dots disabled"></div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="text-center text-md-left">
              <div class="feature-item mt-3 wow fadeInRight" style="visibility: visible;  animation-name: fadeInRight;">
                <!-- <div class="icon"><i class="fas fa-code"></i></div> -->
                <div class="text">
                  <h3 class="bottom15">
                    <span class="d-inline-block">網站架構優化</span>
                  </h3>
                  <p>許多舊程式設計出來的網站，表面上看起來漂亮，但效果卻不好，這是先天無法改善的，唯有從程式優化，讓搜尋引擎熟悉且喜歡，才能達到最好的效果。我們的架構有針對搜尋引擎優化，先天就比一般網佔有優勢。</p>
                </div>
              </div>
              <div class="feature-item mt-5 wow fadeInRight" style="visibility: visible;  animation-name: fadeInRight;">
                <!-- <i class="far fa-folder-open"></i> -->
                <div class="text">
                  <h3 class="bottom15">
                    <span class="d-inline-block">豐富的資訊及內容</span>
                  </h3>
                  <p>建置網站的目的無非是想讓您的商品與服務讓更多人接受與購買，如果內容充實豐富，但是缺乏脈絡與導覽性，會如同抽象畫一般，讓人無法充分理解內容，好的網頁設計方式會將內容資訊區分級數，最重要的的資訊會讓網頁使用者優先看到，依次類推下去，讓訪客先接收到重要訊息，較不會讓人感到無所適從而離開。</p>
                </div>
            </div>
          </div>
        </div>
      </div>
  </div>
    </div>
  </section>

  <!-- 
  <section id="photo">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 ml-auto">
          <h2>自拍照1</h2>
          <p class="lead">big photo</p>
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class="testbox1">
      <div class="content"></div>
      <div class="imagebox"></div>
    </div>
  </section>



  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
    </div>
  </footer> -->


  <!--bar-->
  <div class="bar">
    <ul>
      <li>
        <a href="html/trophy.php">
          <div class="icon">
            <i class="fa fa-trophy" aria-hidden="true"></i>
            <i class="fa fa-trophy" aria-hidden="true"></i>
          </div>
          <div class="name"><span data-text="積分榜">積分榜</span></div>
        </a>
      </li>
      <li>
        <a href="html/gameset.php">
          <div class="icon">
            <i class="fa fa-gamepad" aria-hidden="true"></i>
            <i class="fa fa-gamepad" aria-hidden="true"></i>

          </div>
          <div class="name"><span data-text="遊戲">遊戲</span></div>
        </a>
        <!-- </li>
      <li>
        <a href="../Teamproject/index.php">
          <div class="icon">
            <i class="fa fa-home" aria-hidden="true"></i>
            <i class="fa fa-home" aria-hidden="true"></i>
          </div>
          <div class="name"><span data-text="首頁">首頁</span></div>
        </a>
      </li> -->
      <li>
        <a href="https://forms.gle/YM4LhPU2JtQGR8F78">
          <div class="icon">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </div>
          <div class="name"><span data-text="Q&A">Q&A</span></div>
        </a>
      </li>
      <li>
        <a href="#">
          <div class="icon">
            <i class="fa fa-users" aria-hidden="true"></i>
            <i class="fa fa-users" aria-hidden="true"></i>
          </div>
          <div class="name"><span data-text="關於我們">關於我們</span></div>
        </a>
      </li>
    </ul>
  </div>






  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>
  <!--custom functions and script-->
<script src="js/functions.js"></script>

</body>

</html>