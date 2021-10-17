<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="/RCSCP/playgame/SQL Injection game/SQL_summary/SQL0.css">
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
    <!--  The Modal -->
    
      <article v-cloak>
        <section>
          <h2>何謂SQL Injection?</h2>
          <p>SQL Injection是一個常見的駭客攻擊手法<br>該攻擊會針對支援處理SQL指令的資料庫伺服器進行破壞</p>
        </section>
        <section>
          <h2>SQL Injection的手法及目的</h2>
          <p>SQL Injection會透過在網頁上的輸入欄位中插入SQL語法<br>讓系統也把該SQL語法一起執行進去<br>
          這很有可能讓資料庫中的某些資料被提取.外洩.竄改,甚至被刪除</p>
          <p><img class="photo" src="/RCSCP/photo/SQL/SQL.jpg"></p>
        </section> <section>
          <h2>關卡內容</h2>
          <p>本關卡會透過簡單的指令<br>讓玩家們能從中理解到SQL Injection可能會帶來的傷害性</p>
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
  <script src="/RCSCP/playgame/SQL Injection game/SQL_summary/SQL0.js"></script>

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