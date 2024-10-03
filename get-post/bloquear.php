<h1>USUARIO BLOQUEADO</h1>

<form action="" method="post">
    <input type="password" name="password" placeholder="contraseña">
    <input type="submit" value="enviar">
</form>
<?php
session_start();
require_once './db/db.php';
// Optener los datos del formulario por POST
if (
    isset($_POST['password']) && !empty($_POST['password'])
) {
    $row = 0;
    $pass = $_POST['password'];
    foreach ($users as $user) {
        if ($user['password'] == $pass) {
            $row = 1;
            break;
        }
    }
    if ($row == 1) {
        $_SESSION['user'] = $user;

        header('Location: welcome.php');
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}
?>