<?php
$jsonUsers = file_get_contents('users.json');
$users = json_decode($jsonUsers, true);
$profileId = 5;
$profileUser = null;

foreach ($users as $user) {
    if ($user['id'] == $profileId) {
        $profileUser = $user;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
</head>
<body>
<?php
if ($profileUser) {
    echo "<h2>Профиль пользователя</h2>";
    echo "<p><strong>ID:</strong> " . htmlspecialchars($profileUser['id']) . "</p>";
    echo "<p><strong>Имя:</strong> " . htmlspecialchars($profileUser['name']) . "</p>";
} else {
    echo "<p>Пользователь не найден</p>";
}
?>    
</body>
</html>