<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="/playgame/XSS game/XSS summary/XSS0.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <main v-cloak>  

    <button class="btn" @click="toggleModal()"><span><a href="#">防範教學</a><span></button>

    <!--  The Modal -->
    <boardal v-if="modal.isOpen" :has-mask="modal.hasMask" :can-click-mask="modal.canClickMask" :has-x="modal.hasX" @toggle="toggleModal">
 
    <div class="modal-header">  
                        <button type="button" class="close" data-dismiss="modal" @click="finish">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

    <article v-cloak>
      
        <section>
          <h2>如何防範XSS?</h2>
          <p align="left">我們回想一下遊戲內容，在反射型I中，我們可以直接輸入特殊符號，像是角括號或右斜線。<br><br>這樣的網站，由於沒有預防特殊符號，所以很容易受到腳本的攻擊。<br><br>因此，若要架設網站，可以使用PHP htmlspecialchars 函數的功能，讓網站讀到特殊符號時，就不進行執行。這是一個很好預防的方法，<b>但並非萬用的解</b>，下圖為XSS反射型 II部分程式碼內容:</p>
          <p><img src="/photo/defend/XSS_defend1.png"></p><br><br>
          <p align="left">為何已經使用PHP htmlspecialchars 函數的功能，但來還是無法抵擋XSS攻擊呢?讓我們看下一頁~</p>
        </section>

        <section>
          <h2>為何使用PHP htmlspecialchars卻無法抵擋呢?</h2>
          <p align="left">在上頁中，我們有提到PHP htmlspecialchars 函數，可以使網頁遇到特殊符號時，可以不執行，但是在XSS 反射型II中，我們可以發現一個設計上的漏洞。<br><br>一個完整的程式需要有頭有尾，就如同使用括號一樣，有左也有右。<br><br>關卡中，我們需要先輸入">，為了是要將&lt;value="<b style="color:royalblue">. ans .</b>"&gt;變成完整的語法。<br>
          輸入後，程式碼將變為<b style="color:red">&lt;value=" "&gt;</b> &lt;script&gt;...... "&gt;，進而輸入腳本語法，使程式執行。</p>
          <p><img src="/photo/defend/XSS_defend2.png"></p><br><br>
          <p align="left">透過以上關卡的舉例，相信你可以輕鬆理解，並且使用。</p>
        </section>

        <section>
          <h2>如何防範SQL Injection?</h2>
          <p align="left">SQL injection發生的原因是因為程式寫入SQL語法時時沒有針對使用者輸入的字串進行過濾</p>
          <p align="left">解決的方法如下:</p>
          <p align="left">使用htmlspecialchars將特殊文字[例如:單引號(')、雙引號("")]轉成僅能閱讀的HTML符號</p>
          <p align="left">使用Prepared Statement預先處理可能造成問題的字元</p>
          <p align="left">自行將有可能會造成問題的特殊符號過濾掉</p>
        </section>

        <section>
          <h2>如何防範CSRF?</h2>
          <p align="left">CSRF的重點是，網站對於使用的的身分認證不嚴謹。在遊戲關卡中，我們可以知道，後端的管理員，是透過GET的方式，進行指令，刪除資料。但因為GET所接收的訊息，會直接反映在網址，所以一被惡意人士注意到，難逃被破壞的命運。有些人可能會想說，改成POST可以嗎?<br></p>
          <p align="left">POST雖然回傳的資料不會直接反映在網址上，但若是加入了&lt;form&gt;且自帶自動submit功能，那一樣難逃法網。那到底該怎麼做呢?<br><br></p>
          <p align="left">最常見的方法有兩種: 檢查 referer欄位或是加入驗證token。在request 的 header 裡有一個欄位 referer，可以得知request是來自哪裡，可以檢查看是否為合法的domain，若不是則可以直接拒絕。token則是可以讓sever隨機產生並存取在session中，若有任request，可以檢查這個token是否相同，以達到防禦的目的。</p>
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
  <script src="/playgame/XSS game/XSS summary/XSS0.js"></script>

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