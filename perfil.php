<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tu Tarjeta de Perfil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Verificamos si se enviaron los datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitizamos la entrada para evitar XSS
    $nombre = htmlspecialchars($_POST["nombre"]);
    $edad = htmlspecialchars($_POST["edad"]);
    $hobby = htmlspecialchars($_POST["hobby"]);

    // Determinar el tipo de perfil
    if ($edad < 18) {
        $tipo = "Perfil en Desarrollo 🌱";
    } elseif ($edad < 60) {
        $tipo = "Perfil Activo 🚀";
    } else {
        $tipo = "Perfil Senior 🌟";
    }
} else {
    echo "<p>No se enviaron datos del formulario.</p>";
    exit;
}
?>

<div class="card">
    <h2><?php echo $nombre; ?></h2>
    <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
    <p><strong>Hobby:</strong> <?php echo $hobby; ?></p>
    <h3><?php echo $tipo; ?></h3>
    <a href="index.html" class="btn">Volver</a>
</div>

</body>
</html>
