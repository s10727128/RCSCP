<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="/playgame/gamepoint/Summary/homesummary.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <main v-cloak>
    <p><button class="btn" @click="toggleModal()"><b>網站目標</b></button></p>

    <!--  The Modal -->
    <boardal v-if="modal.isOpen" :has-mask="modal.hasMask" :can-click-mask="modal.canClickMask" :has-x="modal.hasX" @toggle="toggleModal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" @click="finish">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <article v-cloak>
        <section>
          <h2>網站目標</h2>
          <p>本網站主要目標是透過遊戲，讓玩家學習到一些基本的攻擊手法，也從中可以學習到該如和進行防範</p>
          <p>
            關卡分為四大關卡:<br>XSS攻擊<br>CSRF攻擊<br>SQL
            Injection攻擊<br>MISC雜項<br>可以透過解答關卡後，獲得積分，以提高自己的名次。</p>
          <p><button class="primary" @click="skip(1)">在開始之前我需要知道......</button>
        </section>

        <section>
          <h2>什麼是網頁原始碼?</h2>
          <p>在討論網頁原始碼之前，先來介紹什麼是原始碼?</p>
          <p>原始碼，原文為Source
            Code，是指人類可以讀的電腦語言指令。所以，網頁原始碼，顧名思義就是大家可以看得懂的網頁電腦語言。最常聽到的有HTML、CSS、JavaScript以及PHP，其中HTML、CSS、JavaScript為網頁前端，PHP為網頁後端。<br>(下圖為基本網頁架構的原始碼)<br><img src="/photo/Home summary/Html source code 1.png">那什麼是前端?什麼是後端呢?</p><br>
          <h3>網頁前/後端</h3>
          <p>
            網頁前端:在打開網頁所看到的任何一切，不管事按鈕、圖片、動畫......，只要是能看到的，都是網頁前端。<br>網頁後端:打開網頁看不到的，像是登入帳密的驗證，就是需要經由後端處理後，再丟回前端顯示。<br><br>~舉個例子~<br>一個打怪的遊戲，一定要有攻擊的按鈕，那所看得到的攻擊按鈕，就是屬於前端的東西。按下按鈕要有打怪的動作，這也是靠前端的CSS及JavaScript去製作。但是將怪物殺死，所得到的分數，就是在後端記錄完後，在傳回前端，這樣你的分數就會增加。
          </p>
          <p>看完這些，你還很模糊嗎?沒關係，接下來逐一介紹，讓我們繼續看下去!</p>
        </section>

        <section>
          <h2>HTML</h2>
          <p>HTML(全名:HyperText Markup
            Language)超文本標記語言，是一種基礎技術，常與CSS及JavaScript相互搭配使用，常用於設計網頁、網頁應用程式以及行動應用程式的使用者介面。網頁瀏覽器可以讀取HTML檔案，並將其轉化成視覺化網頁。<br>(下圖為設計一個按鈕程式碼)
          </p>
          <img src="/photo/Home summary/HTML Summary Example1.png"><br>
          <img style="width:75%;" src="/photo/Home summary/HTML Summary Example2.png">
        </section>

        <section>
          <h2>JavaScript</h2>
          <p>JavaScript的主要目的在於，寫出"功能"，就像手遊裡打怪的攻擊鈕，按下去會打怪，也是要有功能。(下圖為設計按鈕作動的程式碼)</p>
          <img src="/photo/Home summary/HTML Summary Example3.png"><br><br>
          <p>每攻擊5下，會有一次爆擊</p>
          <img style="width: 50%;" src="/photo/Home summary/HTML Summary Example4.png"><br>
          <img style="width: 50%;" src="/photo/Home summary/HTML Summary Example5.png">
        </section>

        <section>
          <h2>CSS</h2>
          <p>剛剛我們有提到過，CSS會與HTML及JavaScript相互搭配使用，CSS主要的功能就是美化網頁，將網頁內容的古板單調風格轉換成栩栩如生。(下圖為設計按紐樣式的程式碼)</p><br>
          <h1><a href="/playgame/gamepoint/Summary/homesummary/homesummary.html" target="_blank"><b>我想按按看!</b></a></h1>
          <img style="width: 50%;" src="/photo/Home summary/HTML Summary Example6.png"><br>
          <img style="width: 50%;" src="/photo/Home summary/HTML Summary Example7.png"><br>
        </section>

        <section>
          <h2>PHP</h2>
          <p>PHP(全名:Hypertext Preprocessor)，它是個被廣泛運用在網頁程式撰寫的語言，尤其是它能適用於網頁程式的開發及能夠嵌入HTML文件之中，因此除了可以處理後端程式以外，他也可以嵌入HTML。
          </p>
          <img style="width: 50%;" src="/photo/Home summary/HTML Summary Example8.png"><br>
          <img style="width: 50%;" src="/photo/Home summary/HTML Summary Example9.png"><br>
        </section>

      </article>


      <footer>
        <!-- Next Arrow -->
        <div class="forward-actions">
          <button class="primary next" :disabled="isLastStep" v-show="!isLastStep" @click="skip(1)"><i class="fa fa-fw fa-lg" :class="nextIcon"></i></button>
          <button class="accent save" :disabled="!isLastStep" v-show="isLastStep" @click="finish"><i class="fa fa-fw fa-lg fa-check"></i></button>
        </div>

        <!-- Step Dots -->
        <div class="step-dots" v-if="hasDots">
          <div class="step-dot" v-for="n in max" :class="{active: n == step}" @click="goToStep(n)"></div>
        </div>
        <div class="back-actions">

          <!-- Back Arrow -->
          <button class="secondary cancel prev" :disabled="isFirstStep" xv-show="!isFirstStep" @click="skip(-1)"><i class="fa fa-fw fa-lg" :class="backIcon"></i></button>
        </div>
      </footer>
    </boardal>
  </main>


  <!-- partial -->
  <script src='https://unpkg.com/vue'></script>
  <script src="/playgame/gamepoint/Summary/homesummary.js"></script>

</body>

</html>

<!-- *************************************************************************** -->

<!-- Restart form first page -->
<!-- <p><button @click="reset()">Rewind</button></p> -->

<!-- Skip to the lastest page -->
<!--  <p><button class="primary" @click="goToStep(5)">skip to the end</button></p> -->

<!-- Exit Button -->
<!--  <p><button class="primary" @click="toggleModal">EXIT</button></p> -->

<!-- Next Button -->
<!-- <p><button class="primary" @click="skip(1)">Next...</button></p> -->