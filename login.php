<?php
if (!empty($_POST['login']) && (!empty($_POST['password']))) {
    $data_json = file_get_contents('users.json');
    $users = json_decode($data_json, true);

    $login = htmlspecialchars(stripcslashes($_POST['login']));
    $password = htmlspecialchars(stripcslashes($_POST['password']));


    $salt1 = '3@awefs';
    $salt2 = 'fdyrerf!@';
    $passwordResult = hash('ripemd128', "$salt1$password$salt2");

    $header = "Пользователь не зареган";


    foreach ($users as $user) {

        $userJson = $user['password'];
        $passJson = hash('ripemd128', "$salt1$userJson$salt2");

        if ($user['login'] == $login && $password == $user['password'] &&  $passwordResult === $passJson) {
            echo '<div style = "color: red;">' . "Поздравляю!" . '</div><hr>';
            break;
        }
    }
    echo $header;

}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Авторизация/Регистрация </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<form action="login.php" method="post" class="form-horizontal">
    <h2>Аторизация\Регистрация</h2>
    <input type="login" name="login" id="login"
           class="form-horizontal" placeholder="Введите логин"
           required>
    <input type="password" name="password" id="password"
           class="form-horizontal" placeholder="Введите пароль"
           required>
    <input type="text" name="name" id="name"
           class="form-horizontal" placeholder="Введите имя"
    >

    <input type="submit" name="sign_in" class="btn btn-info" value="Вход">
</form>

</body>
</html>
