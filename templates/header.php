<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title id="titulo">Perfil</title>
    <!--link rel="shorcut icon" type="image/png" href="/ICO2.png"-->
    <meta name="theme-color" content="#563d7c">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="../../PaginaWeb2.0/Recursos/css/estilos.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <!--a class="navbar-brand cc_pointer" href="<?php SITE_URL ?>perfil.php"><?php echo "<img class='img-responsive' src='../Recursos/Imagenes/Fotos/Perfil/" . $IMG . "' alt='' width='30' height='30' alt='Perfil' />" ?></a-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php SITE_URL ?>perfil.php">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Notificaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mensajes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php SITE_URL ?>noticias.php">Noticias</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownArticulos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Artículos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php SITE_URL ?>guias.php">Guías</a>
                            <a class="dropdown-item" href="<?php SITE_URL ?>noticias.php">Reseñas</a>
                            <a class="dropdown-item" href="<?php SITE_URL ?>noticias.php">Eventos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProyectos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proyectos</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Mis proyectos</a>
                            <a class="dropdown-item" href="#">Proyectos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownForos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Foros
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Ayudas</a>
                            <a class="dropdown-item" href="#">Técnicos</a>
                            <a class="dropdown-item" href="#">Libre</a>
                        </div>
                    </li>
                    <?php if (isset($_COOKIE["type"])) : ?>
                        <li class="nav-item">
                            <a class="nav-link" href="?logout=true">Cerrar Sesion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Administracion</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
    </header>