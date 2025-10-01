<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Знак зодиака</title>
</head>
<body>
    <form method="post">
        <a>Введите дату:</a>
        <input type="text" name="date" required>
        <input type="submit" value="Узнать знак">
    </form>

<?php
function Zodiac($day, $month) {
    if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) return 'Овен';
    if (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) return 'Телец';
    if (($month == 5 && $day >= 21) || ($month == 6 && $day <= 20)) return 'Близнецы';
    if (($month == 6 && $day >= 21) || ($month == 7 && $day <= 22)) return 'Рак';
    if (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) return 'Лев';
    if (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) return 'Дева';
    if (($month == 9 && $day >= 23) || ($month == 10 && $day <= 22)) return 'Весы';
    if (($month == 10 && $day >= 23) || ($month == 11 && $day <= 21)) return 'Скорпион';
    if (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) return 'Стрелец';
    if (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) return 'Козерог';
    if (($month == 1 && $day >= 20) || ($month == 2 && $day <= 18)) return 'Водолей';
    if (($month == 2 && $day >= 19) || ($month == 3 && $day <= 20)) return 'Рыбы';
    return 'Неизвестно';
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date'])) {
    $input = $_POST['date'];
    $numbers = [];
    $current = '';

    for ($i = 0; $i < strlen($input); $i++) {
        $ch = $input[$i];
        if ($ch >= '0' && $ch <= '9') {
            $current = $current . $ch;  
        } else {
            if ($current !== '') {
                $numbers[] = (int)$current; 
                $current = '';
            }
        }
    }
    if ($current !== '') {
        $numbers[] = (int)$current;
    }

    if (count($numbers) === 3) {
        list($day, $month, $year) = $numbers;
        if ($month >= 1 && $month <= 12 && $day >= 1 && $day <= 31) {
            $sign = Zodiac($day, $month);
            echo "<p>знак зодиака <strong>$sign</strong></p>";
        } else {
            echo "<p>некорректный день или месяц.</p>";
        }
    } else {
        echo "<p>некорректные данные.</p>";
    }
}
?>
</body>
</html>
