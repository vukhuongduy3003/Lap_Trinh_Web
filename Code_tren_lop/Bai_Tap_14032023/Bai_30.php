<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 30</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgb(108, 161, 13);
            width: 500px;
            margin: 0 auto;
        }

        h2 {
            background-color: rgb(16, 163, 127);
        }
    </style>
</head>

<body>
    <?php
    $sum = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $myArray = explode(',', $_POST["arrayList"]); // chuyển chuỗi nhập vào thành mảng
            $sum = array_sum($myArray); // tính tổng của mảng
        }
        catch(Exception) {
            echo "<p>Lỗi nhập dữ liệu</p>";
        }
    }
    ?>
    <form action="" method="post">
        <div class="container">
            <h2>Nhập và tính trên dãy số</h2>
            <div>
                <label for="">Nhập dãy số:</label><input type="text" name="arrayList">(*)<br>
            </div>
            <input type="submit" value="Tổng dãy số">
            <div>
                <label for="">Tổng dãy số:</label><input type="text" readonly="true" value="<?php echo $sum; ?>"><br>
                <label for="">(*) Các số được nhập cách nhau bằng dấu ","</label>
            </div>
        </div>
    </form>
</body>

</html>