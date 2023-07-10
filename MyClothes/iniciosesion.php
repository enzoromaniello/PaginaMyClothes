<?php 

    session_start();

    require 'conexion.php';

    if( (!empty($_POST['email'])) && (!empty($_POST['Contrasena'])) ){
        $records = $conexion->prepare('SELECT dni, email, contrasena 
                                        FROM usuario WHERE email=:email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results =  $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if($results && $records->rowCount() > 0 && password_verify($_POST['Contrasena'], $results['contrasena'])){
            $_SESSION['user_id'] = $results['dni'];
            header('Location: index.php');
        }else{
            $message = 'Los datos no concuerdan';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión | MyClothes</title>
    <link rel="stylesheet" href="css/estiloiniciosesion.css">
</head>
<body>

    <header>
        <a class="btn-volver" href="index.php"><span><ion-icon name="arrow-back"></ion-icon></span></a>
    </header>

        <?php if(!empty($message)) : ?>
            <p><?= $message ?></p>
        <?php endif; ?>

    <div class="formulario">
        <h1 id="titulo">MyClothes</h1>
        <h2 class="subtitulo">Inicio Sesión</h2>
        <form method="post">

            <div class="input-box">
                <input type="email" name="email" id="email" required>
                <label for="email">Email</label> 
            </div>
            <div class="input-box">
                <input type="password" name="Contrasena" id="Contrasena" required>
                <label for="Contrasena">Contraseña</label>
            </div>
            <div class="Confirmar">
                <input type="submit" value="Confirmar">
            </div>
        </form>
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>