<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="/RCSCP/playgame/MISC/MISC_summary/MISC0.CSS">
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
          <h2>MISC關卡介紹</h2>
          <p>此關卡為"雜項"，會有許多不同的解碼遊戲，也可能會用到不同的工具。<br>而你目標只有一個，就是拿到密碼過關，祝你好運~</p>
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
  <script src="/RCSCP/playgame/MISC/MISC_summary/MISC0.js"></script>

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