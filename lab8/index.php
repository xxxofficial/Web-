<?php
$host = 'localhost';
$dbname = 'blog_1'; 
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $dbname);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
$sql = "
    SELECT posts.title, posts.content, users.username, users.email, posts.created_at
    FROM posts
    JOIN users ON posts.user_id = users.id
    ORDER BY posts.created_at DESC
";

$result = $conn->query($sql);

if (!$result) {
    die("Ошибка SQL-запроса: " . $conn->error);
}

if ($result->num_rows > 0) {
    echo "<h2>Список постов:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "<div style='margin-bottom: 20px; padding: 10px; border: 1px solid #ccc'>";
        echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
        echo "<p><strong>Автор:</strong> " . htmlspecialchars($row['username']) . "</p>";
        echo "<p>" . nl2br(htmlspecialchars($row['content'])) . "</p>";
        echo "<small>Дата: " . $row['created_at'] . "</small>";
        echo "</div>";
    }
} else {
    echo "Постов пока нет.";
}

$conn->close();
?>
