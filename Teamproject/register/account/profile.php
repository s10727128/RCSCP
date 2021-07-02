<!DOCTYPE html>
<html>

<head>
	<title>Tik Game個人資料</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php
	include_once("../../header.php");
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" a href="profile.css">
</head>

<body>
	<div class="body2">
		
	<?php
	// echo (date('Y-m-d H:i:s',time()+7*3600));
	$sql = "SELECT * FROM user WHERE Username='$name'";
	$result = mysqli_query($connect, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$nickname = $row["Nickname"];
			$score = $row["Score"];
			$access = $row["Access"];
		}
	}
	echo'<div class="table1">'; //table1 紀錄暱稱,分數
	echo "暱稱:";
	echo $nickname . '<br>';
	echo "分數:";
	echo $score . '<br>';
	echo'</div>'; 

	echo '<table class="table2">'; //table2 用來記錄關卡那些完成以及未完成
		echo '<thead class="table-dark">';
			echo '<tr class="thead">';
				echo '<th scope="col">關卡</th>';
				echo '<th scope="col">完成狀況</th>';
			echo '</tr>';
		echo '</thead>';
	


	$sql = "SELECT XSS_1,XSS_2,XSS_3,SQL_1,SQL_2,CSRF_1,MISC_1,MISC_2,MISC_3,MISC_4,MISC_5 FROM game WHERE Username='$name'";
	$result = mysqli_query($connect, $sql);
	$complete = array();
	$i = 0;
	if (mysqli_num_rows($result) > 0){
		while ($fieldinfo = mysqli_fetch_field($result)) {
			echo '<tr>';
			$sql_2 = "SELECT $fieldinfo->name FROM game WHERE $fieldinfo->name is not null AND Username='$name'";
			$result2 = mysqli_query($connect, $sql_2);
			while ($row = mysqli_fetch_assoc($result2)) {
				echo '<thead class="table-success">';
				echo '<td >' . $fieldinfo->name . '</td>';
				echo '<td >' . "已完成" . '</td>';
				echo '</thead>';
			}
			$sql_3 = "SELECT $fieldinfo->name FROM game WHERE $fieldinfo->name is null AND Username='$name'";
			$result3 = mysqli_query($connect, $sql_3);
			while ($row = mysqli_fetch_assoc($result3)) {
				echo '<thead class="table-default">';
				echo '<td >' . $fieldinfo->name . '</td>';
				echo '<td >' . "未完成" . '</td>';
				echo '</thead>';
			}
			echo '</tr>';
		}
	}
	echo '</table>';
	echo '<div class="link">';
	echo '<a href="EditProfile.php">更改個人資料</a><br>';
	echo '<a href="ChangePassword.php">更換密碼</a><br>';
	echo '<a href="analysis.php">個人評估表</a><br>';
	echo '</div>';
	?>
	</div>

	<br>
	<br>
	<div class="footer">
		<footer class="py-2 bg-dark ">
			<div class="container">
				<p class="m-0 text-center text-light">本站所刊載之圖文內容等版權皆屬原廠商或原作者所有，非經同意請勿轉載</p>
			</div>
		</footer>

	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
