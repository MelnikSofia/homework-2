<?php
if (empty($login))
{ 
    die('Ошибка: пользователь не найден!');
}
$ipAddres = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    <h1>Информация о пользователе</h1>
    <ul>
        <li><strong>Логин: </strong> <?= htmlspecialchars($login) ?></li>
        <li><strong>IP-адрес: </strong> <?= htmlspecialchars($ipAddres) ?></li>
        <li><strong>User-Agent: </strong> <?= htmlspecialchars($userAgent) ?></li>
    </ul>
    <p> <a href="account.php?login=<?= htmlspecialchars($login) ?>">Посмотреть список всех пользователей</a></p>
</body>
</html>