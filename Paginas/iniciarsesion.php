<?php require('init.php') ?>
<?php
if (isset($_COOKIE["type"])) {
    redirect_to('perfil.php');
}
$error = false;
$mail = '';
$pass = '';
if (isset($_POST["submit-login"])) {
    if (empty($_POST["inputEmail"]) || empty($_POST["inputPassword"])) {
        $error = true;
    } else {
        $mail = $_POST['inputEmail'];
        $pass = $_POST['inputPassword'];
        //var_dump($mail);
        $query = "SELECT * FROM usuarios WHERE EMAIL = '$mail'";
        $statement = $app_db->query($query);
        $row = mysqli_fetch_array($statement);
        //$statement->execute(array('EMAIL' => $_POST["inputEmail"]));
        //$count = $row->rowCount();
        //if ($count > 0) {
        //$result = $statement->fetch_all($row);
        //foreach ($result as $row) {
        if (md5($pass) == $row["PASS"]) {
            setcookie("type", $row['USERNAME'], time() + 3600);
            setcookie("nombre", $row['NOMBREAPELLIDO'], time() + 3600);
            setcookie("id", $row['PK_USUARIOID'], time() + 3600);
            redirect_to('perfil.php');
        } else {
            $error = true;
        }
        //}
        /*}else{
        $error = true;
    }*/
    }
}

/*if (isset($_POST["submit-login"])) {
    if ( ! login( $_POST['inputEmail'], $_POST['inputPassword'] ) ) {
		$error = true;
	}
}
if ( is_logged_in() ) {
	redirect_to( 'perfil.php' );
}*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Inicio de sesión</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="../../PaginaWeb2.0/Recursos/css/estilos.css" rel="stylesheet" />




</head>
<?php if ($error) : ?>
    <div class="error"><?php echo "Error de usuario o contraseña." ?></div>
<?php endif; ?>

<body class="text-center" style="padding-top: 40px;">
    <form class="form-signin border" method="post">
        <img class="mb-4" src="http://guarddome.com/assets/images/profile-img.jpg" alt="" width="72" height="72">
        <h1 class="glow">Iniciar sesión</h1>

        <label for="inputEmail">Email</label>
        <input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="Dirección de correo electrónico" required autofocus="active">
        <label for="inputPassword">Contraseña</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Contraseña" required>

        <button name="submit-login" style="margin-top: 30px;" class="btn btn-lg btn-primary btn-block" type="submit">Cargar partida</button>
        <p class="mt-5 mb-3 text-muted border">© 2019-2020</p>
    </form>
    <script src="../../PaginaWeb2.0/Recursos/bootstrap/js/jquery-3.5.1.js"></script>
    <script src="../../PaginaWeb2.0/Recursos/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>