<?php require('init.php'); ?>
<?php require('../templates/header.php');
if (!isset($_COOKIE["type"])) {
    redirect_to('iniciarsesion.php');
}
$I = get_images($_COOKIE["id"]);

$actual = 0;
$IMG = "";
foreach($I as $imagenes){
    $actual = intval($imagenes["PERFILACTUAL"]);
    if($actual == 1){
        $IMG = $imagenes["TITULOFOTO"];
    }
}
?>
<script>
    document.title = 'Bienvenido'
</script>
<!-- Begin page content -->
<div id="contenedorPerfil">
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="row profile">
                <div class="col-md-3" style="box-shadow: 5px 10px 18px black !important;">
                    <div class="profile-sidebar">
                        <div class="profile-user-pic">
                            <?php echo "<a href='cambiarfoto.php'><img class='img-responsive rounded-circle' src='../Recursos/Imagenes/Fotos/Perfil/" . $IMG . "' alt='' style='width: 100%;'/></a>" ?>
                        </div>
                        <div class="profile-user-title">
                            <div class="profile-user-name">
                                <?php echo $_COOKIE["type"]; ?>
                            </div>
                            <div class="profile-user-job">
                                Level 1
                            </div>
                        </div>
                        <div class="profile-user-buttons">
                            <button id="botonSeguir" class="btn btn-success btn-sm">Seguir</button>
                            <button id="botonMensaje" class="btn btn-danger btn-sm">Mensaje</button>
                        </div>
                        <div class="profile-user-menu">
                            <ul id="ulises" class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img src="../../PaginaWeb2.0/Recursos/Imagenes/Iconos/open-iconic-master/png/home-2x.png" alt="home_icon"> General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img src="../../PaginaWeb2.0/Recursos/Imagenes/Iconos/open-iconic-master/png/person-2x.png" alt="perfil_icon"> Cuenta</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><img src="../../PaginaWeb2.0/Recursos/Imagenes/Iconos/open-iconic-master/png/clipboard-2x.png" alt="trabajos_icon"> Trabajos</a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><img src="../../PaginaWeb2.0/Recursos/Imagenes/Iconos/open-iconic-master/png/star-2x.png" alt="habilidades_icon"> Habilidades</a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><img src="../../PaginaWeb2.0/Recursos/Imagenes/Iconos/open-iconic-master/png/image-2x.png" alt="fotos_icon"> Fotos</a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><img src="../../PaginaWeb2.0/Recursos/Imagenes/Iconos/open-iconic-master/png/video-2x.png" alt="videos_icon"> Videos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="my-3 p-3 bg-white rounded shadow-sm cc_cursor" style="box-shadow: 5px 10px 18px black !important; background-color:#1f1e2c !important;">
                        <h6 class="border-bottom border-gray pb-2 mb-0 cc_cursor">Recent updates</h6>
                        <div class="media text-muted pt-3 cc_cursor">
                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                            </svg>
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray cc_cursor">
                                <strong class="d-block text-gray-dark cc_cursor">@username</strong>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac
                                cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                risus.
                            </p>
                        </div>
                        <div class="media text-muted pt-3">
                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text>
                            </svg>
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <strong class="d-block text-gray-dark">@username</strong>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac
                                cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                risus.
                            </p>
                        </div>
                        <div class="media text-muted pt-3">
                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#6f42c1"></rect><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text>
                            </svg>
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <strong class="d-block text-gray-dark">@username</strong>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac
                                cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                risus.
                            </p>
                        </div>
                        <div class="media text-muted pt-3 cc_cursor">
                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                            </svg>
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray cc_cursor">
                                <strong class="d-block text-gray-dark cc_cursor">@username</strong>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac
                                cursus
                                commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet
                                risus.
                            </p>
                        </div>
                        <small class="d-block text-right mt-3 cc_cursor">
                            <a href="#">All updates</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php require('../templates/footer.php');
