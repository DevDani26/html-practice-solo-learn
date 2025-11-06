<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario Básico</title>

   <?php include "../templates/styles.php"; ?>
  </style>
</head>
<body>
 <?php include "../templates/header.php"; ?>
    <h2>Formulario de Registro</h2>

    <form>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="email">Correo:</label>
        <input type="email" name="email"><br><br>

        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave"><br><br>

        <button type="submit">Enviar</button>
    </form>
    <?php include "../templates/footer.php"; ?>
    </body>

</html>