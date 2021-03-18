$("#button").click(function Add(){
    var id = $("#id").val();
    var name = $("#name").val();
    var fraction = $("#fraction").val();

    var str = '<tr><th>ID</th><th>姓名</th><th>積分</th></tr>';
    $("#data").after(str);
})