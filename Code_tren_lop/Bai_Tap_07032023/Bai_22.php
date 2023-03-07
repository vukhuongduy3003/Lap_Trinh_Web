<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bai_22.css">
    <title>Giải phương trình bậc 2</title>
</head>

<body>
    <?php
    $result = '';
    // Kiểm tra nếu form đã được submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị của a, b, c từ form
        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];
        
        // Tính delta
        $delta = $b * $b - 4 * $a * $c;

        // Kiểm tra giá trị của delta để giải phương trình
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            $result = "Phương trình có 2 nghiệm phân biệt là: x1 = " . $x1 . " và x2 = " . $x2;
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            $result = "Phương trình có nghiệm kép là: x1 = x2 = " . $x;
        } else {
            $result = "Phương trình vô nghiệm";
        }
    }
    ?>
    <h2>Giải phương trình bậc 2</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <input type="number" name="a"><label>* x<sup>2</sup> + </label>
            <input type="number" name="b"><label>* x + </label>
            <input type="number" name="c"><label>= 0</label><br>
            <label>Nghiệm: </label><input type="text" name="result" value="<?php echo $result; ?>">
        </div>
        <input type="submit" value="Giải">
    </form>


</body>

</html>