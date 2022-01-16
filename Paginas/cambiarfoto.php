<?php require('init.php'); ?>
<?php
if (!isset($_COOKIE["type"])) {
    redirect_to('iniciarsesion.php');
}
$statusMsg = '';
$descripcion = '';
global $app_db;



if (isset($_POST["submit-new-photo"]) && !empty($_FILES["file"]["name"])) {
    // File upload path
    $targetDir = "../Recursos/Imagenes/Fotos/Perfil/";

    $fileName = $_FILES["file"]["name"];
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    $descripcion = $_POST['descripcion'];
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            $insert = insert_imagen($fileName, $descripcion, 1);
            if ($insert) {
                header("Location: cambiarfoto.php?uploadsuccess");
                //$statusMsg = "La foto " . $fileName . " ha sido subida correctamentamente.";
            } else {
                $statusMsg = "Error al subir la foto, por favor, prueba de nuevo.";
            }
        } else {
            $statusMsg = "Lo siento, hubo un problema al subir la foto.";
        }
    } else {
        $statusMsg = 'Lo siento, solo se aceptan archivos con extension JPG, JPEG, PNG.';
    }
} else {
    $statusMsg = 'Por favor selecciona una foto.';
}

// Display status message
echo $statusMsg;
?>
<?php require('../templates/header.php'); ?>
<script>
    document.title = 'Actualizacion de foto'
</script>
<div class="container" style="padding-top: 100px;">

    <div class="row">
        <div class="col-md-6">
            <h2>Actualizar Foto de Perfil</h2>
            <form action="" method="post" enctype="multipart/form-data">
                <h6>Selecciona una imagen para subir:</h6>
                <input type="file" name="file">
                </br>
                <label for="descripcion">Pie de foto</label>
                <textarea class="form-control" name="descripcion" rows="6" required><?php echo $descripcion; ?></textarea>

                <input type="submit" value="Subir Foto" name="submit-new-photo">
            </form>
        </div>
    </div>

</div>

<?php require('../templates/footer.php');
