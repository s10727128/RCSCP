// $("#button").click(function Add(){
//     var id = $("#id").val();
//     var name = $("#name").val();
//     var fraction = $("#fraction").val();

//     var str = '<tr><th>ID</th><th>姓名</th><th>積分</th></tr>';
//     $("#data").after(str);
// })

function Add(){
    var id = document.getElementById("id").value;
    var name = document.getElementById("name").value;
    var fraction = document.getElementById("fraction").value;

    var str = "";
    str = '<div class="data"><tr><th>' + id + '</th><th>' + name + '</th><th>' + fraction + '</th></tr></div>';
    datatable.innerHTML = datatable.innerHTML + str;

    document.getElementById("id").value = "";
    document.getElementById("name").value = "";
    document.getElementById("fraction").value = "";


}