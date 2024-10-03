<h1>CREAR POST</h1>

<form action="" method="post">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="descripcion" placeholder="Ingresa una descripción"> 
    <input type="submit" value="enviar">
</form>

<?php



$cookie_duration = time() + (86400 * 1); 


$posts = [];


if (isset($_COOKIE['posts'])) {
    $posts = json_decode($_COOKIE['posts'], true);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['title']) && isset($_POST['descripcion'])) {
        $title = htmlspecialchars($_POST['title']);
        $descripcion = htmlspecialchars($_POST['descripcion']);

        $posts[] = [
            'title' => $title,
            'descripcion' => $descripcion
        ];

        setcookie('posts', json_encode($posts), $cookie_duration, "/");
    }
}


?>

<!-- Mostrar el post enviado -->
<?php if (!empty($posts)): ?>
        <h2>Posts Enviados</h2>
        <?php foreach ($posts as $post): ?>
            <p><strong>Título:</strong> <?php echo $post['title']; ?></p>
            <p><strong>Descripción:</strong> <?php echo $post['descripcion']; ?></p>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>