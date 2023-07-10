<?php

include("conexion.php");

$Nombre = !empty($_POST['Nombre']) ? $_POST['Nombre'] : "";
$Apellido = !empty($_POST['Apellido']) ? $_POST['Apellido'] : "";
$Email = !empty($_POST['Email']) ? $_POST['Email'] : "";
$Telefono = !empty($_POST['Telefono']) ? $_POST['Telefono'] : "";
$DNI = !empty($_POST['DNI']) ? $_POST['DNI'] : "";
$Contrasena = !empty($_POST['Contrasena']) ? $_POST['Contrasena'] : "";
$Direccion = !empty($_POST['Direccion']) ? $_POST['Direccion'] : "";

$message = '';

if( !empty($Nombre) && (!empty($Apellido)) && (!empty($Email)) && (!empty($Telefono)) && (!empty($DNI)) && (!empty($Contrasena)) && (!empty($Direccion)) ) {
    $query="INSERT INTO usuario (dni, nombre, apellido, email, telefono, direccion, Usuario, Administrador, super_usuario, contrasena) 
    VALUES (:dni ,:nombre, :apellido, :email, :telefono, :direccion, 1, 0, 0, :contrasena)";

    $sentenciaSQL = $conexion->prepare($query);
      
    $sentenciaSQL->bindParam(':nombre', $Nombre);
    $sentenciaSQL->bindParam(':apellido', $Apellido);
    $sentenciaSQL->bindParam(':email', $Email);
    $sentenciaSQL->bindParam(':telefono', $Telefono);
    $sentenciaSQL->bindParam(':dni', $DNI);
    $sentenciaSQL->bindParam(':direccion', $Direccion);
    $Contrasena = password_hash(($Contrasena), PASSWORD_BCRYPT);
    $sentenciaSQL->bindParam(':contrasena', $Contrasena);


    if($sentenciaSQL->execute()) {
        $message = 'Cuenta creada';
    } else {
        $message = 'No se creo la cuenta';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | MyClothes</title>
    <link rel="stylesheet" href="css/estiloregistrarse.css">
</head>
<body>

    <header>
        <a class="btn-volver" href="index.php"><span><ion-icon name="arrow-back"></ion-icon></span></a>
    </header>

    <?php if(!empty($message)): ?>
        <p><?=  $message ?></p>

    <?php endif; ?>

    <div class="formulario">
        <h1>MyClothes</h1>
        <h2 class="subtitulo">Registrate</h2>
        <form method="POST" action="registrarse.php">
            <div class="input-box">
                <input type="text" name="Nombre" id="Nombre" required>
                <label for="Nombre">Nombre</label> 
            </div>
            <div class="input-box">
                <input type="text" name="Apellido" id="Apellido" required>
                <label for="Apellido">Apellido</label> 
            </div>
            <div class="input-box">
                <input type="email" name="Email" id="Emali" required>
                <label for="Email">Email</label> 
            </div>
            <div class="input-box">
                <input type="tel" name="Telefono" id="Telefono" required>
                <label for="Telefono">Telefono</label> 
            </div>
            <div class="input-box">
                <input type="text" name="DNI" id="DNI" required>
                <label for="DNI">DNI</label> 
            </div>
            <div class="input-box">
                <input type="password" name="Contrasena" id="Contrasena" required>
                <label for="Contrasena">Contraseña</label>
            </div>
            <div class="input-box">
                <input type="text" name="Direccion" id="Direccion" required>
                <label for="Direccion">Dirección</label>
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