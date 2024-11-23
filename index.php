<?php
$users = json_decode(file_get_contents('http://localhost/storage.php'), true);
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';
    if (empty($login) || empty($password))
    {
        $error = 'Все поля должны быть заполнены!';
    }
    elseif ( isset($users[$login]) && $users[$login] === $password)
    {
        require 'about.php'; 
        exit;
    }
    else 
    { 
        $error = 'Неверный логин или пароль';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <style>
       form 
       {
            display: flex;
            flex-direction: column; 
            width: 300px; 
        }
        label, input, button 
        {
            margin-bottom: 15px; 
        }
        button 
        {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Вход в систему</h1>
    <?php if ($error): ?>
        <p style = "color: red;"> <?= htmlspecialchars($error) ?> </p>
    <?php endif; ?>
    <form method="post">
        <label for="login">Логин:</label>
        <input type="text" id="login" name="login" required>
        <br>
        <label for="password">Пароль;</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Войти</button>
    </form>
</body>
</html>