<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <title>Bài 8</title>
</head>

<body>
    <h2>Kết quả thi đại học</h2>
  <form method="post">
    <div class="form-group">
      <label for="diemToan">Toán:</label>
      <input type="number" class="form-control" id="diemToan" name="diemToan" placeholder="Nhập điểm">
    </div>
    <div class="form-group">
      <label for="diemHoa">Hoá:</label>
      <input type="number" class="form-control" id="diemHoa" name="diemHoa" placeholder="Nhập điểm">
    </div>
    <div class="form-group">
      <label for="diemLy">Hoá:</label>
      <input type="number" class="form-control" id="diemLy" name="diemLy" placeholder="Nhập điểm">
    </div>
    <div class="form-group">
      <label for="diemChuan">Điểm chuẩn:</label>
      <input type="number" class="form-control" id="diemChuan" name="diemChuan" placeholder="Nhập điểm">
    </div>
    <button type="submit" class="btn btn-primary">Xem kết quả</button>
  </form>
  <?php
  if (isset($_POST['diemToan']) && isset($_POST['diemHoa']) && isset($_POST['diemLy']) && isset($_POST['diemChuan'])) {
    $diemToan = $_POST['diemToan'];
    $diemHoa = $_POST['diemHoa'];
    $diemLy = $_POST['diemLy'];
    $diemChuan = $_POST['diemChuan'];
    $tongDiem = $diemToan + $diemHoa + $diemLy;
    if($tongDiem >= $diemChuan) {
      $ketQua = "Đậu";
    }
    else {
      $ketQua = "Trượt";
    }
    echo '<div class="form-group">
    <label for="tongDiem">Tổng điểm:</label>
    <input type="number" class="form-control" id="tongDiem" placeholder="Tổng điểm" readonly="true" value="'.$tongDiem.'">
  </div>
  <div class="form-group">
    <label for="ketQuaThi">Kết quả thi:</label>
    <input type="text" class="form-control" id="ketQuaThi" placeholder="Kết quả thi" readonly="true" value="'.$ketQua.'">
  </div>';
  }
  ?>
</body>


</html>