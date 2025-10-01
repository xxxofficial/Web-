<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор обратной записи</title>
</head>
<body>
    <form method="post">
        <label for="expression">Введите выражение через пробел:</label><br>
        <input type="text" id="expression" name="expression" required>
        <br><br>
        <button type="submit">Вычислить</button>
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['expression'])) {
        echo "<p>Ошибка: поле выражения не заполнено.</p>";
        exit;
    }

    $input = trim($_POST['expression']);
    $tokens = explode(' ', $input);
    $stack = [];

    foreach ($tokens as $token) {
        if (ctype_digit($token)) {
            $stack[] = (int)$token;
        } else {
            if (count($stack) < 2) {
                echo "<p>Ошибка: недостаточно операндов для оператора '$token'.</p>";
                exit;
            }
            $b = array_pop($stack);
            $a = array_pop($stack);

            switch ($token) {
                case '+':
                    $res = $a + $b;
                    break;
                case '-':
                    $res = $a - $b;
                    break;
                case '*':
                    $res = $a * $b;
                    break;
                default:
                    echo "<p>Ошибка: неизвестный оператор '$token'.</p>";
                    exit;
            }
            $stack[] = $res;
        }
    }

    if (count($stack) !== 1) {
        echo "<p>Ошибка: неверное выражение.</p>";
    } else {
        echo "<p>Результат: " . $stack[0] . "</p>";
    }
}
?>
</body>
</html>