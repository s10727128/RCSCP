var originalAlert = window.alert;

window.alert = function(){
    window.location.href = "XSS1done.php";
    originalAlert("Congratuation! You sucessed!\n" + "\nYou can go to next part.");   
}
    // ScriptManager.RegisterClientScriptBlock(this, typeof(Page), "test", "alert('welcome');");
    //timer test
    // var seconds = 0;
    // setInterval(function() {
    // timer.innerHTML = seconds++;
    // }, 1000);
