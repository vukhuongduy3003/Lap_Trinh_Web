<!DOCTYPE html>
<html>
<head>
  <title>Kết quả tính diện tích hình chữ nhật</title>
</head>
<body>

  <?php
  if (isset($_POST["submit"])) {
    $chieuDai = $_POST["chieuDai"];
    $chieuRong = $_POST["chieuRong"];
    $dienTich = $chieuDai * $chieuRong;
    echo "<h2>Diện tích hình chữ nhật là: $dienTich</h2>";
  }
  ?>

</body>
</html>
