<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>знак зодиака</title>
</head>
<body>
    <form method="post">
        <a>Введите дату:</a>
        <input type="text" name="date" pattern="\d{2}\.\d{2}\.\d{4}" required>
        <input type="submit" value="Узнать знак">
    </form>

    <?php
    function Zodiac($day, $month) {
        if (($month == 3 && $day >= 21)  ($month == 4 && $day <= 19)) return 'Овен';
        if (($month == 4 && $day >= 20)  ($month == 5 && $day <= 20)) return 'Телец';
        if (($month == 5 && $day >= 21)  ($month == 6 && $day <= 20)) return 'Близнецы';
        if (($month == 6 && $day >= 21)  ($month == 7 && $day <= 22)) return 'Рак';
        if (($month == 7 && $day >= 23)  ($month == 8 && $day <= 22)) return 'Лев';
        if (($month == 8 && $day >= 23)  ($month == 9 && $day <= 22)) return 'Дева';
        if (($month == 9 && $day >= 23)  ($month == 10 && $day <= 22)) return 'Весы';
        if (($month == 10 && $day >= 23)  ($month == 11 && $day <= 21)) return 'Скорпион';
        if (($month == 11 && $day >= 22)  ($month == 12 && $day <= 21)) return 'Стрелец';
        if (($month == 12 && $day >= 22)  ($month == 1 && $day <= 19)) return 'Козерог';
        if (($month == 1 && $day >= 20)  ($month == 2 && $day <= 18)) return 'Водолей';
        if (($month == 2 && $day >= 19)  ($month == 3 && $day <= 20)) return 'Рыбы';
        return 'Неизвестно';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['date'])) {
        $date = $_POST['date'];
        if (preg_match("/^\d{2}\.\d{2}\.\d{4}$/", $date)) {
            list($day, $month, $year) = explode('.', $date);
            if (checkdate((int)$month, (int)$day, (int)$year)) {
                $sign = Zodiac((int)$day, (int)$month);
                echo "<p>Знак зодиака для $date: <strong>$sign</strong></p>";
            } else {
                echo "<p>некорректная дата.</p>";
            }
        } else {
            echo "<p>используйте формат</p>";
        }
    }
?>
</body>
</html>