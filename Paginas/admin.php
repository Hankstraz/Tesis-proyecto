<?php
require('init.php');
require('../templates/header.php');

if (!isset($_COOKIE["type"])) {
    redirect_to('iniciarsesion.php');
}

$action = '';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

?>
<script>
    document.title = 'Administracion'
</script>
<div class="container" style="padding-top: 100px; padding-bottom: 400px;">
    <div class="list-group">
        <a href="newpost.php" class="list-group-item list-group-item-action active">
            Crear nuevo post
        </a>
        <a href="?action=list-post" class="list-group-item list-group-item-action">Listar posts</a>
    </div>
</div>


<?php require('../templates/footer.php'); ?>