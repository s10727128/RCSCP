<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="/RCSCP/playgame/XSS game/XSS summary/XSS0.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <main v-cloak>

    <button class="btn" @click="toggleModal()"><span><a href="#">前提摘要</a><span></button>

    <!--  The Modal -->
    <boardal v-if="modal.isOpen" :has-mask="modal.hasMask" :can-click-mask="modal.canClickMask" :has-x="modal.hasX" @toggle="toggleModal">
 
    <div class="modal-header">  
                        <button type="button" class="close" data-dismiss="modal" @click="finish">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

    <article v-cloak>
      
        <section>
          <h2>XSS攻擊介紹</h2>
          <p>XSS跨網站腳本(Cross-Site Scripting, XSS)是一種經常出現在Web應用程式中的電腦安全性漏洞，是由於Web應用程式對使用者的輸入過濾不足而產生的。攻擊者利用網站漏洞把惡意的腳本程式碼注入到網頁之中，當使用者瀏覽這些網頁時，就會執行其中的惡意程式碼，對受害使用者可能採取Cookie資料竊取、Session(連線)劫持、釣魚欺騙等各種攻擊。</p>
          <p>目前 XSS 攻擊的種類大致可以分成以下幾種類型：<br>&nbsp;&nbsp;&nbsp;&nbsp;Reflected XSS (反射型)<br>&nbsp;&nbsp;&nbsp;&nbsp;Stored XSS (儲存型)<br>&nbsp;&nbsp;&nbsp;&nbsp;DOM-Based XSS (基於 DOM 的類型)</p>
          <p><button class="accent" @click="skip(1)">接下去看!</button></p>
        </section>


        <section>
          <h2>Reflected XSS (反射型)</h2>
          <p>反射型，顧名思義，就像光線映入鏡子一樣，會直接反射，所以注入的程式碼，只會顯示在前端網頁上。最常見的就是以 GET 方法傳送資料給伺服器時，伺服器未檢查就將內容回應到網頁上所產生的漏洞。</p>
          <p><img class="photo" src="/RCSCP/photo/XSS/Reflected XSS.png"></p>
        </section>

        <section>
          <h2>Stored XSS (儲存型)</h2>
          <p>會被保存在伺服器資料庫中的 JavaScript 代碼引起的攻擊即為 Stored XSS。像是留言板，使用者可以輸入任意內容，如果沒有人真檢查，那使用者輸入如果&lt;script&lt;等關鍵字就會被當成正常的HTML執行，標籤的內容也會被正常的作為JavaScript代碼執行。 </p>
          <p><img class="photo" src="/RCSCP/photo/XSS/Stored SXX.png"></p>
        </section>

        <section>
          <h2>關卡內容</h2>
          <p>本關卡著重於在前兩種XSS攻擊方式，你們可以透過提示，一步一步的了解，如何達到攻擊目的!</p><br><br><br>

          <div style="text-align: center;">
            <p><button style="font-size: 200%" class="primary" @click="toggleModal">讓我們開始吧!</button></p>
          </div>
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
  <script src="/RCSCP/playgame/XSS game/XSS summary/XSS0.js"></script>

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