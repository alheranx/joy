<?php include("header.php"); ?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-uppercase text-center mt-5 mb-5 titulo_categoria">Herméticos</h1>
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



<?php if($es) { ?>
    <div class="container-fluid mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria1.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal enlace">Cajas</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="hermeticos.php" class="enlace">
                        <img src="images/categorias/categoria2.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Herméticos</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria3.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Limpieza</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria4.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Cestos</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria5.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Cestos</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria6.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Cestos</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="container-fluid mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria1.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal enlace">Boxes</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="hermeticos.php" class="enlace">
                        <img src="images/categorias/categoria2.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Hermetic</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria3.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Cleaning</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria4.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">baskets</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria5.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">baskets</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria6.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">baskets</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>







<?php include("footer.php"); ?>