<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <title>Bài 7</title>
</head>

<body>
  <form method="post">
    <h2>Kết quả học tập</h2>
    <div class="form-group">
      <label for="iddiemHK1">Điểm học kỳ 1:</label>
      <input type="number" class="form-control" id="iddiemHK1" name="diemHK1" placeholder="Nhập điểm">
    </div>
    <div class="form-group">
      <label for="iddiemHK2">Điểm học kỳ 2:</label>
      <input type="number" class="form-control" id="iddiemHK2" name="diemHK2" placeholder="Nhập điểm">
    </div>

    <button type="submit" class="btn btn-primary">Xem kết quả</button>
  </form>
  <?php
  if (isset($_POST['diemHK1']) && isset($_POST['diemHK2'])) {
    $diemHK1 = $_POST['diemHK1'];
    $diemHK2 = $_POST['diemHK2'];
    $diemTB = ($diemHK1 + $diemHK2 * 2) / 3.0;
    if($diemTB >= 5.0) {
      $ketQua = "Được lên lớp";
    }
    else {
      $ketQua = "Không được lên lớp";
    }
    if($diemTB >= 8.0) {
      $hocLuc = "Giỏi";
    }
    else if($diemTB >= 6.5 && $diemTB < 8) {
      $hocLuc = "Khá";
    }
    else if($diemTB >= 5 && $diemTB < 6.5) {
      $hocLuc = "Trung bình";
    }
    else {
      $hocLuc = "Yếu";
    }
    echo '<div class="form-group">
    <label for="diemTB">Điểm trung bình:</label>
    <input type="number" class="form-control" id="diemTB" placeholder="Điểm trung bình" readonly="true" value='.$diemTB.'>
  </div>
  <div class="form-group">
    <label for="ketQua">Kết quả:</label>
    <input type="text" class="form-control" id="ketQua" placeholder="Kết quả" readonly="true" value="'.$ketQua.'">
  </div>
  <div class="form-group">
    <label for="xepLoai">Xếp loại học lực:</label>
    <input type="text" class="form-control" id="xepLoai" placeholder="Xếp loại" readonly="true" value="'.$hocLuc.'">
  </div>';
  }
  ?>
</body>


</html>