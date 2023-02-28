<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <title>Bài 9</title>
</head>

<body>
    <h2>Giải phương trình bậc nhất</h2>
  <form method="post">
    <div class="form-group">
      <label for="diemToan">Phương trình:</label>
    </div>
    <div class="form-group">
      <label for="heSoa">a = </label>
      <input type="number" class="form-control" id="heSoa" name="heSoa" placeholder="Nhập a">
    </div>
    <div class="form-group">
      <label for="heSob">b = </label>
      <input type="number" class="form-control" id="heSob" name="heSob" placeholder="Nhập b">
    </div>
    <button type="submit" class="btn btn-primary">Xem kết quả</button>
  </form>
  <?php
  if (isset($_POST['heSoa']) && isset($_POST['heSob'])) {
    $heSoa = $_POST['heSoa'];
    $heSob = $_POST['heSob'];
    $ketQua = $heSob / $heSoa;
    echo '<div class="form-group">
    <label for="ketQua">Kết quả:</label>
    <input type="number" class="form-control" id="ketQua" placeholder="Kết quả" readonly="true" value="'.$ketQua.'">
  </div>';
  }
  ?>
</body>


</html>