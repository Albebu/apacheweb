<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'mariadb.php';
include 'postgresql.php';

$mysqli = connectMariaDB();

$cv_info = getCVInfoMariaDB($mysqli);

$mysqli->close();



?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>Mini CV del Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h3>Currículum Vitae</h3>
            </div>
            <div class="card-body">
                <h4>Información Personal</h4>
                <p><strong>Nombre:</strong> <?php echo $cv_info['name'];
                                            ?></p>
                <p><strong>Profesión:</strong> <?php echo
                                                $cv_info['profession']; ?></p>
                <p><strong>Correo Electrónico:</strong> <?php echo
                                                        $cv_info['email']; ?></p>
                <h4>Experiencia</h4>
                <p><?php echo $cv_info['experience']; ?></p>
            </div>
        </div>
    </div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</body>

</html>
