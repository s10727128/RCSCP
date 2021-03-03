var originalAlert = window.alert;

window.alert = function(){
    originalAlert("Congratuation! You sucessed!\n" + "\nYou can go to next part.");
    
    //window.location.href = "XSS1done.php";

    //timer test
    // var seconds = 0;
    // setInterval(function() {
    // timer.innerHTML = seconds++;
    // }, 1000);
 }
