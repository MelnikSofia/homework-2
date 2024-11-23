<?php
$users = json_decode(file_get_contents('http://localhost/storage.php'), true);
$login = $_GET['login'] ?? '';
if (empty($login))
{
    die('Произошла ошибка: Пользователь c таким логином не найден!');
}
$limit = 100;
$displayedUsers = array_slice($users,0,$limit,true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>Добро пожаловать, <?= htmlspecialchars($login) ?>! </h1>
    <h2>Список пользователей: </h2>
    <ul>
        <?php foreach ($displayedUsers as $user => $pass): ?>
            <li><?= htmlspecialchars($user) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>