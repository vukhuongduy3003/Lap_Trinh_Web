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
    $str = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST["year"];
        foreach (range(2000, $year) as $y) {
            if (($y % 4 == 0 && $y % 100 != 0) || $y % 400 == 0) {
                $str = $str . " " . $y;
            }
        }
    }
    ?>
    <form action="" method="post">
        <div class="container">
            <h2>Tìm năm nhuận</h2>
            <div>
                <label for="">Năm:</label><input type="text" name="year"><br>
            </div>
            <input type="submit" value="Tìm năm nhuận">
            <div>
                <p><?php echo $str; ?> là năm nhuận.</p>
            </div>
        </div>
    </form>
</body>

</html>