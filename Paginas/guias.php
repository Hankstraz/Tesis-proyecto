<?php require('init.php'); ?>
<?php require('../templates/header.php'); ?>
<script>
    document.title = 'Guias'
</script>
<!-- Un nav dentro de otro nav -->
<div id="contenedorNoticias" class="col-sm-12">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNoticias">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Todo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Popular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Videojuegos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Desarrollo</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="col-sm-12">
        <div class="card" style="width: 18rem; float: left">
            <img src="../../PaginaWeb2.0/Recursos/Imagenes/Articulos/Noticias/noticia1.PNG" class="card-img-top img-responsive" alt="Noticia 1">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick ex ample text to build on the card title and make up the bulk of
                    the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 18rem; float: left">
            <img src="../../PaginaWeb2.0/Recursos/Imagenes/Articulos/Noticias/noticia1.PNG" class="card-img-top img-responsive" alt="Noticia 1">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem; float: left">
            <img src="../../PaginaWeb2.0/Recursos/Imagenes/Articulos/Noticias/noticia1.PNG" class="card-img-top img-responsive" alt="Noticia 1">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem; float: left">
            <img src="../../PaginaWeb2.0/Recursos/Imagenes/Articulos/Noticias/noticia1.PNG" class="card-img-top img-responsive" alt="Noticia 1">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem; float: left">
            <img src="../../PaginaWeb2.0/Recursos/Imagenes/Articulos/Noticias/noticia1.PNG" class="card-img-top img-responsive" alt="Noticia 1">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                    the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div class="col-sm-12" id="paginacion">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>

<?php require('../templates/footer.php');