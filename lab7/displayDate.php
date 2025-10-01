<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>отображение</title>
</head>
<body>
<h1>Пользователи</h1>
<?php
$jsonUsers = file_get_contents('users.json');
$users = json_decode($jsonUsers, true);

foreach ($users as $user) {
    echo "<pre>";
    print_r($user);
    echo "</pre>";
}
?>

<h1>Посты</h1>

<?php
$jsonPosts = file_get_contents('posts.json');
$posts = json_decode($jsonPosts, true);

foreach ($posts as $post) {
    echo "<pre>";
    print_r($post);
    echo "</pre>";
}
?>    
</body>
</html>