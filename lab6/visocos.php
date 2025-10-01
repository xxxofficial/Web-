<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка на високосность</title>
</head>
<body>
    <form method="post">
        <label>Введите год:</label>
        <input type="number" name="year" min="1" max="30000" required>
        <input type="submit" value="Проверить">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['year'])) {
        $year = $_POST['year'];
        if ($year >= 1 && $year <= 30000) {
            if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                $result = "YES";
            } else {
                $result = "NO";
            }
            echo "<p><strong>$result</strong></p>";
        } else {
            echo "<p>Ошибка: введите год от 1 до 30000.</p>";
        }
    } else {
        echo "<p>Ошибка: поле года не заполнено.</p>";
    }
}
?>
</body>
</html>
