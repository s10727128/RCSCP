var originalAlert = window.alert;
/* Override window.alert*/
window.alert = function(){
   originalAlert("Congratuation! You sucessed!\n" + "\nYou can go to next part.");
   document.getElementById("next_btn").style.display = "block";
   $( "#next_btn" ).attr("href","../level1-2/level1-2.php?name=test");
}

$("#hintList").click(function(){
    var s = $(this);
    var count = (s.data("hintCount") || 0) + 1;
    s.data("hintCount", count);
    if ( count == 1 )
        s.text(count+ "/3 提示") + $('#hint1').text(count+". 執行一個<script>");
    else if ( count == 2 )
        s.text(count+ "/3 提示") + $('#hint2').text(count+". 在<script>裡加入alert()");
    else if ( count == 3 )
        s.text(count+ "/3 提示") + $('#hint3').text(count+". 動手試試，就會知道結果了!!!");
    else {
        s.text("沒有提示了...");
    }
    return false;
 });
 