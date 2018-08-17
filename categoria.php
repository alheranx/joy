<?php include("header.php"); ?>

<?php
$categoria = $_GET['id'];
$string = file_get_contents("productos.json");
$json_a = json_decode($string, true);
$categoria_titulo = $json_a[$categoria]['categoria'];
?>



<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-uppercase text-center mt-5 mb-5 titulo_categoria">
                <?php echo $categoria_titulo; ?>
            </h1>
        </div>
    </div>
</div>



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="images/slider/slider1.jpg" alt="">
    </div>
    <!-- <div class="carousel-item">
    <img class="d-block w-100" src="images/slider/slider2.jpg" alt="">
    </div> -->
</div>

<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>



<div class="container-fluid mt-5 mb-5">
    <div class="container">
        <div class="row">

            <?php 
                
                foreach ( $json_a[$categoria]['subcategorias'] AS $producto ) { ?>

                    
                    <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                        <a href="producto.php?id=<?php echo $producto['id']; ?>&categoria=<?php echo $categoria; ?>" class="enlace">
                            <img src="<?php echo $producto['imagen']; ?>" alt="" width="100%">
                            <h3 class="text-uppercase text-center font-weight-normal enlace"><?php echo $es ? $producto['nombre'] : $producto['name']; ?></h3>
                        </a>
                    </div>
                    
            <?php } ?>

        </div>
    </div>
</div>



<?php include("footer.php"); ?>