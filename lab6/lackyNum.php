<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Счастливые билеты</title>
</head>
<body>
    <form method="POST">
        <label>Первый номер:</label> 
        <input type="text" name="start" required pattern="\d{6}"><br>
        <label>Второй номер:</label>
        <input type="text" name="end" required pattern="\d{6}"><br>
        <input type="submit" value="Найти">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $start = $_POST["start"] ?? '';
        $end = $_POST["end"] ?? '';
        if (!preg_match('/^\d{6}$/', $start) || !preg_match('/^\d{6}$/', $end)) {
            echo "<p>Ошибка: введите два 6-значных числа.</p>";
        } else {
            $start = (int)$start;
            $end = (int)$end;

            if ($end < $start) {
                echo "<p>Ошибка: второй номер меньше первого.</p>";
            } else {
                echo "<p>Счастливые билеты:</p>";
                for ($num = $start; $num <= $end; $num++) {
                    $ticket = str_pad($num, 6, "0", STR_PAD_LEFT);
                    $sum1 = $ticket[0] + $ticket[1] + $ticket[2];
                    $sum2 = $ticket[3] + $ticket[4] + $ticket[5];
                    if ($sum1 == $sum2) {
                        echo $ticket . "<br>";
                    }
                }
            }
        }
    }
    ?>
</body>
</html>
