<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Bai_22.css">
    <title>Đọc 3 chữ số</title>
</head>

<body>
    <?php
    function readNumber($number) {
        $ones = array("", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín");
        $tens = array("", "mười", "hai mươi", "ba mươi", "bốn mươi", "năm mươi", "sáu mươi", "bảy mươi", "tám mươi", "chín mươi");
        $hundreds = array("", "một trăm", "hai trăm", "ba trăm", "bốn trăm", "năm trăm", "sáu trăm", "bảy trăm", "tám trăm", "chín trăm");
        
        $result = "";
        $num_str = strval($number);
        $len = strlen($num_str);
        
        if ($len > 3) {
            return false;
        }
        
        if ($len == 3) {
            $hundred_digit = intval($num_str[0]);
            $result .= $hundreds[$hundred_digit] . " ";
            $num_str = substr($num_str, 1);
            $len = strlen($num_str);
        }
        
        if ($len == 2) {
            $ten_digit = intval($num_str[0]);
            $one_digit = intval($num_str[1]);
            
            if ($ten_digit == 1) {
                $result .= $tens[$ten_digit] . " " . $ones[$one_digit] . " ";
            } else {
                $result .= $tens[$ten_digit] . " ";
                
                if ($one_digit > 0) {
                    $result .= $ones[$one_digit] . " ";
                }
            }
        }
        
        if ($len == 1) {
            $one_digit = intval($num_str[0]);
            $result .= $ones[$one_digit] . " ";
        }
        
        return $result;
    }
    $so = '';
    // Kiểm tra nếu form đã được submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy giá trị của a, b, c từ form
        $so = $_POST["a"];
        
    }
    ?>
    <h2>Đọc số</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
        <label>Nhập số (0 - 999)</label><input type="number" name="a">
            <label>Bằng chữ: </label><input type="text" name="result" value="<?php echo readNumber($so); ?>">
        </div>
        <input type="submit" value="Đọc số">
    </form>


</body>

</html>