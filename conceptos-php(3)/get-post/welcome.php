<?php
session_start();
// Optener los datos del formulario por POST
if (
    isset($_SESSION['user']) &&
    !empty($_SESSION['user'])
) {
    // Mostramos los datos del formulario
    echo "BIENVENID@: {$_SESSION['user']['name']} <br>";
} else {
    // redirigir a la página de inicio
    header('Location: index.php');
}
?>

<form action="logout.php" method="post">
    <input type="submit" value="Cerrar sesión">
</form>
<?php include './inclides/footer.php'; ?>