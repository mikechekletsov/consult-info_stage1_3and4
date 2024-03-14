<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3ex</title>
</head>
<body>
    <?php
    $result = 0;
    for ($num=0;$num<=1000;$num++) {
        if ($num % 3 == 0 || $num % 5 == 0) {
            $result += $sum;
        }
    }
    echo "<span>Сумма чисел, меньше 1000 и кратных 3 или 5: $result</span>"
    ?>
</body>
</html>