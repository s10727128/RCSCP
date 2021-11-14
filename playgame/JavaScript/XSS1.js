var originalAlert = window.alert;

window.alert = function(){
    window.location.href = "XSS1done.php";
    originalAlert("恭喜你!\n" + "\n你可以進入下一關了。");   
}
    // ScriptManager.RegisterClientScriptBlock(this, typeof(Page), "test", "alert('welcome');");
    //timer test
    // var seconds = 0;
    // setInterval(function() {
    // timer.innerHTML = seconds++;
    // }, 1000);