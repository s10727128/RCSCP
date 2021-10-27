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
          <p>csrf跨站請求偽造(Cross-site request forgery)，也稱為one-click attack或者session riding。</br>與XSS的差別為，XSS是針對網站的設計漏洞進行破壞，而CSRF是針對網站對使用者的認證不夠嚴謹，因次有心人假冒為使用者進行資料竊取或轉帳。</br><br/>在遊戲當中的環境為，模擬管理玩家的管理員，玩家已經是在該環境下進行遊戲，因此不需要額外竊取cookies 或session token。</p>
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