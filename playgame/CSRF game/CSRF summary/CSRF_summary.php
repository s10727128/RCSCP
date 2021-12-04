<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="/playgame/CSRF game/CSRF summary/CSRF_summary.css">
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
    <!--  The Modal 要改前提摘要在這裡改!!!!!!!!!!!!!!!!!!!!! -->
    
      <article v-cloak>
        <section>
          <h2>CSRF關卡介紹</h2>
          <p>csrf跨站請求偽造(Cross-site request forgery)，也稱為one-click attack或者session riding。</br>與XSS的差別為，XSS是針對網站的設計漏洞進行破壞，而CSRF是針對網站對使用者的認證不夠嚴謹，因次有心人假冒為使用者進行資料竊取或轉帳。舉個例子~</p>
        </section>

        <section>
          <p>一個正常使用者，如果要進行匯款或其他的動作，會經由網站向銀行的伺服器發送一個請求，銀行伺服器接收到請求後，會傳送一個cookies給使用者的用戶端，進行認證。<br>此驗證只能判別是否是從使用者伺服器傳來的請求，而不能對使用者本人進行驗證。</p>
          <p><img class="photo" src="/photo/CSRF/CSRF1.png"></p>
        </section>

        <section>
        <p>這時，有惡意人士，在網站內的按鈕動了手腳，加入了CSRF的攻擊。<br>由於外表看不出來，因此，當使用者點下了含有CSRF攻擊的按鈕，就有可能會因此讓自己的cookies被竊去，導致惡意人士可以利用這個對銀行進行各樣的請求。</p>
        <p><img class="photo" src="/photo/CSRF/CSRF2.png"></p>
        </section>

        <section>
          <h2></h2>
          <p>遊戲模擬環境中，玩家所扮演的角色為管理員。<br>在遊戲中，玩家則是要利用駭客的思維，去刪除資料庫內容。<br>為降低難度，因此玩家不需要額外竊取cookies 或session token。</p>
          <p><button class="primary" @click="toggleModal"><a href="/playgame/CSRF game/CSRF summary/CSRF0/csrf0index.php" target="_">遊戲模擬環境</a></button></p> 
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
  <script src="/playgame/CSRF game/CSRF summary/CSRF_summary.js"></script>

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