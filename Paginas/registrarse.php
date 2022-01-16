<?php require('init.php'); ?>
<?php
if (isset($_COOKIE["type"])) {
    redirect_to('perfil.php');
}
$all_item = get_all_items("generos");
$error = false;
$nombre = '';
$usuario = '';
$mail = '';
$pass = '';
$fecha = '';
$genero = '';

if (isset($_POST['submit-new-user'])) {

    // Se ha enviado el formulario
    $nombre = $_POST['inputNombre'];
    $usuario = $_POST['inputUsuario'];
    $mail = $_POST['inputEmail'];
    if ($_POST['inputPassword'] != $_POST['inputPasswordConfirmacion']) {
        $error = true;
    } else {
        $pass = $_POST['inputPassword'];
    }
    $fecha = $_POST['tbFechaNacimiento'];
    if ($_POST['ddlGenero'] != "0") {
        $genero = $_POST['ddlGenero'];
    }

    insert_usuario($nombre, $usuario, $mail, $pass, $fecha, $genero);
    //redirigir a perfil
    redirect_to('perfil.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Registrarse</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="../../PaginaWeb2.0/Recursos/css/estilos.css" rel="stylesheet" />
</head>
<?php if ($error) : ?>
    <div class="error"><?php echo "Las contraseñas no coinciden." ?></div>
<?php endif; ?>

<body >
    <div class="row justify-content-center">
        <div class="col-md-6" style="padding-bottom: 10px; padding-top: 10px;">
            <form method="post">
                <h1 class="glow text-center">¡Regístrate!</h1>

                <label for="inputNombre">Nombre Completo</label>
                <input type="text" name="inputNombre" id="inputNombre" class="form-control" placeholder="Nombre real completo" required autofocus="active">
                <label for="inputUsuario">Nombre de Usuario</label>
                <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Nombre de usuario unico" required autofocus="">
                <label for="inputEmail">Email</label>
                <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Dirección de correo electrónico" required autofocus="">
                <label for="inputPassword">Contraseña</label>
                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                <label for="inputPasswordConfirmacion">Confirmar Contraseña</label>
                <input type="password" name="inputPasswordConfirmacion" id="inputPasswordConfirmacion" class="form-control" placeholder="Confirmar Contraseña" required>
                <label for="tbFechaNacimiento">Fecha de nacimiento</label>
                <input data-provide="datepicker" type="date" id="tbFechaNacimiento" name="tbFechaNacimiento" class="form-control" placeholder="Fecha de nacimiento" require>
                <label for="ddlGenero">Género</label>
                <select class="form-control" name="ddlGenero" id="ddlGenero" require>
                    <option value="0">Seleccione</option>
                    <?php foreach ($all_item as $item) : ?>
                        <option value="<?php echo $item['PK_GENEROID']; ?>"><?php echo $item['NOMBRE']; ?></option>
                    <?php endforeach; ?>
                </select>
                <button style="margin-top: 30px;" class="btn btn-lg btn-primary btn-block" type="submit" name="submit-new-user">New Game!</button>
                <p class="mt-5 mb-3 text-muted border">© 2019-2020</p>
            </form>
        </div>
    </div>
    <script src="../../PaginaWeb2.0/Recursos/bootstrap/js/jquery-3.5.1.js"></script>
    <script src="../../PaginaWeb2.0/Recursos/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>