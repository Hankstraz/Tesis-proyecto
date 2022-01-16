<?php require('init.php'); ?>
<?php
if (!isset($_COOKIE["type"])) {
    redirect_to('perfil.php');
}
$all_item = get_all_items("tipoarticulos");
$item_found = true;

$error = false;
$title = '';
$extracto = '';
$contenido = '';
$tipoarticulo = '';

if (isset($_POST['submit-new-post'])) {

    // Se ha enviado el formulario
    $title = $_POST['title'];
    $extracto = $_POST['extracto'];
    $contenido = $_POST['contenido'];
    
    if ($_POST['tipoArticulo'] != "0") {
        $tipoarticulo = $_POST['tipoArticulo'];
    }
    

    //var_dump($tipoarticulo);

    if (empty($title) || empty($contenido)) {
        $error = true;
    } else {

        insert_post($title, $extracto, $contenido, $tipoarticulo);
        //redirigir a todos los post
        redirect_to('noticias.php?success=true');
    }
}
?>
<?php require('../templates/header.php'); ?>
<?php if ($error) : ?>
    <div class="error">
        Error en el formulario.
    </div>
<?php endif; ?>
<script>
    document.title = 'Nuevo Post'
</script>
<div class="container" style="padding-top: 100px;">

    <div class="row">
        <div class="col-md-12">
            <h2>Crear nuevo post</h2>
            <form action="" method="post">
                <label for="title">Título (Requerido)</label>
                <input type="text" name="title" class="form-control" placeholder="" autofocus="active" value="<?php echo $title; ?>" required>

                <label for="extracto">Extracto</label>
                <input type="text" name="extracto" class="form-control" placeholder="" required="" autofocus="" value="<?php echo $extracto; ?>">

                <label for="contenido">Contenido (Requerido)</label>
                <textarea class="form-control" name="contenido" rows="6" required><?php echo $contenido; ?></textarea>

                <label class="mr-sm-6" for="tipoArticulo">Tipo Articulo</label>
                <select class="custom-select mr-sm-2" id="tipoArticulo" name="tipoArticulo">
                    <option value="0">Selecciona un tipo</option>
                    <?php foreach ($all_item as $item) : ?>
                        <option value="<?php echo $item['PK_TIPOARTICULOID']; ?>"><?php echo $item['NOMBRE']; ?></option>
                    <?php endforeach; ?>

                </select>

                <button name="submit-new-post" style="margin-top: 30px; margin-bottom: 30px;" class="btn btn-lg btn-primary btn-block" type="submit">Nuevo Post</button>

            </form>
        </div>
    </div>

</div>

<?php require('../templates/footer.php');
