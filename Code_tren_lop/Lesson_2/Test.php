<!DOCTYPE html>
<html>
<head>
	<title>Tính diện tích hình chữ nhật</title>
</head>
<body>
	<h2>Tính diện tích hình chữ nhật</h2>
	<form method="post">
		Chiều dài: <input type="number" name="chieudai"><br><br>
		Chiều rộng: <input type="number" name="chieurong"><br><br>
		<input type="submit" value="Tính">
	</form>

	<?php
	if(isset($_POST['chieudai']) && isset($_POST['chieurong'])) {
		$chieudai = $_POST['chieudai'];
		$chieurong = $_POST['chieurong'];
		$dientich = $chieudai * $chieurong;
		echo "Diện tích hình chữ nhật là: " . $dientich;
	}
	?>
</body>
</html>