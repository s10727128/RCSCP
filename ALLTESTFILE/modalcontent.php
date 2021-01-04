<!doctype html>
<html lang="en">
  <head>
    <title>Modal Content</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" a href ="../playgame/CSS/playgame1.css">
    <script src="source1.js"></script>
  </head>

  <body>
    <body>
    <!--前提摘要-->

    <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modelId">
            前提摘要
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title">前提摘要</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <p>XSS攻擊簡介:<br>&nbsp;&nbsp;&nbsp;&nbsp;XSS跨網站腳本(Cross-Site Scripting, XSS)是一種經常出現在Web應用程式中的電腦安全性漏洞，是由於Web應用程式對使用者的輸入過濾不足而產生的。攻擊者利用網站漏洞把惡意的腳本程式碼注入到網頁之中，當使用者遊覽這些網頁時，就會執行其中的惡意程式碼，對受害使用者可能採取Cookie資瞭竊取、Session(連線)劫持、釣魚欺騙等各種攻擊。</p><br>
                            <p>目前 XSS 攻擊的種類大致可以分成以下幾種類型：<br>&nbsp;&nbsp;&nbsp;&nbsp;Reflected XSS  (反射型)<br>&nbsp;&nbsp;&nbsp;&nbsp;Stored XSS (儲存型)<br>&nbsp;&nbsp;&nbsp;&nbsp;DOM-Based XSS (基於 DOM 的類型)</p><br>
                            <p>Reflected XSS (反射型):<br>&nbsp;&nbsp;&nbsp;&nbsp;反射型，顧名思義，就像光線映入鏡子一樣，會直接反射，所以注入的程式碼，只會顯示在前端網頁上。最常見的就是以 GET 方法傳送資料給伺服器時，伺服器未檢查就將內容回應到網頁上所產生的漏洞。<br></p>
                            <img class="explainphoto" src="../photo/Reflected XSS.png">
                            <p>Stored XSS (持久型):<br>&nbsp;&nbsp;&nbsp;&nbsp;會被保存在伺服器資料庫中的 JavaScript 代碼引起的攻擊即為 Stored XSS。像是留言板，使用者可以輸入任意內容，如果沒有人真檢查，那使用者輸入如果\< script \>等關鍵字就會被當成正常的HTML執行，標籤的內容也會被正常的作為JavaScript代碼執行。</p>
                            <img class="explainphoto" src="../photo/Stored SXX.png">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save</button> -->
                    </div>
                </div>
            </div>
        </div>
        

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>