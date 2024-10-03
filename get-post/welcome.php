<h1>WELCOME</h1>

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


<form action="post.php" method="post">
    <input type="submit" value="Crear Post">
</form>

<form action="bloquear.php" method="post">
    <input type="submit" value="Boquear">
</form>


<form action="logout.php" method="post">
    <input type="submit" value="Cerrar sesión">
</form>

<?php include './post.php'; ?>
<?php include './inclides/footer.php'; ?>