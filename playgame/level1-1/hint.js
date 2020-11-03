$("#hintList").click(function(){
    let s = $(this);
    let count = (s.data("hintCount") || 0) + 1;
    s.data("hintCount", count);
    if ( count == 1 )
        s.text(count+ "/3 Hints") + $('#hint1').text(count+"執行一個<script>");
    else if ( count == 2 )
        s.text(count+ "/3 Hints") + $('#hint2').text(count+"在<script>裡加入alert()");
    else if ( count == 3 )
        s.text(count+ "/3 Hints") + $('#hint3').text(count+"動手試試，就會知道結果了!!!");
    else {
        s.text("沒有提示了...");
    }
    return false;
});