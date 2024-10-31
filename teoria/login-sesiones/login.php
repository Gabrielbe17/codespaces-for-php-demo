<?php
    session_start();

    $users = [
        [
            "username" => "user1",
            "password" => "pass1"
        ],
        [
            "username" => "user2",
            "password" => "pass2"
        ],
        [
            "username" => "user3",
            "password" => "pass3"
        ]

    ];

    //
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //guardamos en username el username que se envía por POST, en un form
        $username = $_POST['username'];
        $password = $_POST['password'];

        var_dump($username);
        var_dump($password);

        //verificar si existe el usuario
        $valid = false;
        foreach ($users as $user) {
            if ($user['username'] == $username && $user['password'] == $password) {
                //si el usuario existe y la contraseña es correcta, iniciamos la sesión
                $_SESSION['username'] = $username;
                
                $valid = true;
                header('Location: bienvenida.php'); // redireccionamiento automatico a la página de bienvenida
                // exit(); // detiene la ejecución del script
            }
        }

        if (!$valid) {
            //si el usuario no existe o la contraseña es incorrecta...
            echo "Usuario o contraseña incorrectos";
            # code...
        }
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="bienvenida.php" method="post">
        <label for="">Usuario: </label>
        <input type="text" name="username">
        <label for="">Contraseña: </label>
        <input type="password" name="password">
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>