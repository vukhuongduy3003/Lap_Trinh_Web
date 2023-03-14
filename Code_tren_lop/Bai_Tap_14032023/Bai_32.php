<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 31</title>
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
    $nam_al = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nam_dl = $_POST["nam"];

        $mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỉ", "Canh", "Tân", "Nhâm");
        $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");

        $nam_dl = $nam_dl - 3;
        $can = $nam_dl % 10;
        $chi = $nam_dl % 12;

        $nam_al = $mang_can[$can] . " " . $mang_chi[$chi];
    }
    ?>
    <form action="" method="post">
        <div class="container">
            <h2>Tính năm âm lịch</h2>
            <div>
                <label for="">Năm:</label><input type="text" name="nam"><br>
            </div>
            <input type="submit" value="Tính năm">
            <div>
                <p><?php echo $nam_al; ?></p>
            </div>
        </div>
    </form>
</body>

</html>