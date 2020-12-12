var originalAlert = window.alert;

function Myfuction(){
   
}

window.alert = function(){
   originalAlert("Congratuation! You sucessed!\n" + "\nYou can go to next part.");
   document.getElementById("next_btn").style.display = "block";
   $( "#next_btn" ).attr("href","../level1-3.php?name=test");
}


function saveStorge(id){
   var data = document.getElementsById(id).value;
   var time = new Data().getTime();
   localStorage.setItem(time,data);
   alert("123");

}