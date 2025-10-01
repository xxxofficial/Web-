<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Перевод в цифру</title>
</head>
<body>
    <form method="post">
        <label>Цифра:</label>
        <input type="number" name="d" min="0" max="9" required>
        <input type="submit" value="Перевести">
    </form>

<?php
    if (isset($_POST['d'])) {
        $d = $_POST['d'];
        if (filter_var($d, FILTER_VALIDATE_INT) !== false && $d >= 0 && $d <= 9) {
            $words = ['ноль','один','два','три','четыре','пять','шесть','семь','восемь','девять'];
            echo "<p>Результат: <strong>{$words[$d]}</strong></p>";
        } else {
            echo "<p>Ошибка: введите цифру от 0 до 9.</p>";
        }
    }
?>
</body>
</html>
