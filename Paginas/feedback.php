<?php require('init.php'); ?>
<?php
    $error = false;
    $comentarios = '';
    
    if (isset($_POST['submit-new-feedback'])) {
    
        // Se ha enviado el formulario
        $comentarios = $_POST['comentarios'];
        
        insert_feedback($comentarios);
        //redirigir a todos los post
        redirect_to('perfil.php?success=true');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <html xmlns="http://www.w3.org/1999/xhtml">

    </html>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link href="../../PaginaWeb2.0/Recursos/css/estilos.css" rel="stylesheet" />
    <title>Ayudanos</title>
</head>

<body class="text-center" style="padding-top: 40px; background-color: #f5f5f5;">

    <form class="form-signin border" method="post">
        <h1>Feedback</h1>
        <div class="form-group">
            <label for="comentarios">Échanos una mano, dinos en qué podríamos mejorar o ideas que tengas.</label>
            <textarea class="form-control" id="comentarios" name="comentarios" rows="12"></textarea>
        </div>
        <button name="submit-new-feedback" class="btn btn-success">Enviar :)</button>
    </form>

    <script src="../../PaginaWeb2.0/Recursos/bootstrap/js/jquery.js"></script>
    <script src="../../PaginaWeb2.0/Recursos/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>