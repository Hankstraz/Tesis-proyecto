<?php require('init.php');
require('../templates/header.php');

if (!isset($_COOKIE["type"])) {
    redirect_to('perfil.php');
}
if (isset($_GET['delete-post'])) {
    $id = $_GET['delete-post'];

    delete_post("PK_ARTICULOID", "articulos", $id);
    redirect_to('noticias.php');
}
$all_posts = get_all_posts();

$post_found = false;
if (isset($_GET['view'])) {
    $post_found = get_post($_GET['view']);
    if ($post_found) {

        $all_posts = [$post_found];
    }
}

?>

<script>
    document.title = 'Noticias'
</script>
<?php if (isset($_GET['success'])) : ?>
    <div class="success">
        El post ha sido creado de forma correcta
    </div>
<?php endif; ?>
<div class="container" style="width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; margin-top: 100px;">


    <div id="contenedorNoticias">
        <!-- <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Aquí va la noticia del día nueva</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                    efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div> -->
    </div>
</div>

</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <div class="posts">
                <?php foreach ($all_posts as $post) : ?>
                    <div class="post_main">
                        <article class="post">
                            <div class="post_img">
                                <!-- <a href="?view=<?php echo $post['PK_ARTICULOID']; ?>"><?php echo $post['TITLE']; ?></a> -->
                            </div>
                            <header>
                                <h2 class="post-title">
                                    <a href="?view=<?php echo $post['PK_ARTICULOID']; ?>"><?php echo $post['TITLE']; ?></a>
                                </h2>
                            </header>
                            <div class="post-content">
                                <?php if ($post_found) : ?>
                                    <?php echo $post['CONTENIDO']; ?>
                                <?php else : ?>
                                    <?php echo $post['EXTRACTO']; ?>
                                <?php endif; ?>
                            </div>
                            <footer>
                                <span class="post-date text-muted">
                                    Publicada en:
                                    <?php echo strftime('%d %b %Y', strtotime($post['FECHACREACION']));    ?>
                                </span>
                                <!-- <div class="delete-post">
                                <a href="?delete-post=<?php echo $post['PK_ARTICULOID']; ?>">Eliminar Post</a>
                            </div> -->
                            </footer>
                        </article>
                    </div>
                    <br>                 
                <?php endforeach; ?>
            </div>


            <nav class="blog-pagination cc_cursor">
                <a class="btn btn-outline-primary cc_pointer" style="border-radius: 2rem;
                    " href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" style="border-radius: 2rem;
                    " href="#" tabindex="-1" aria-disabled="true">Newer</a>
            </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">


            <div class="p-4">
                <h4 class="font-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>

            <div class="p-4">
                <h4 class="font-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->


<?php require('../templates/footer.php');
