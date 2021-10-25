<!DOCTYPE html>
<html lang="en">

<head>
<title>Q&A</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>問題回報</title>

<?php
  include_once("../header.php");
?>
<link href="css/Q&A.css" rel="stylesheet" type="text/css"> 

    <!--Some Feature -->
    <br><br><br>
    <div style="text-align: center;" class="title">
      <h1><p>問題回報</p></h1>
      <label>~若有任何問題，歡迎在下方留言，讓我們知道~</label>
      <div class="return_form">
      <form action="" method="post">
          <textarea  name="feedback"  rows="20" cols="45"></textarea>
          <br>
          <div>
            <input type="submit" name="send" value="送出" onclick="Submit()">
          </div>
      </form>
    </div>
    </div>
</html>
<script type="text/javascript">   
function Submit() {
          alert("謝謝你~我們已經收到您的留言嘍~");
          document.location.href="../index.php";
          }
</script>  
<?php
  if(isset($_POST['send'])){
    require_once('connect.php');
    $feedback=mysqli_real_escape_string($connect,$_POST['feedback']);
    $sql="insert into feedback(feedback) values ('$feedback')";
        $result=mysqli_query($connect,$sql);
        
        if (!$result){
        die();
        }
        // else{
        //    echo "<script type='text/javascript'>Submit();</script>";
        // }
  }
?>
<!-- Custom JavaScript for this theme -->
<script src="../js/scrolling-nav.js"></script>
<!--custom functions and script-->
<script src="../js/functions.js"></script>
