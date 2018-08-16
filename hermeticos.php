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
                    <a href="cuadrados.php" class="enlace">
                        <img src="images/productos/producto1.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal enlace">Cuadrados</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/productos/producto2.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Rectangulares</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/productos/producto3.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Redondos</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/productos/producto4.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Cónicos</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/productos/producto5.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Cristal</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    
<?php } ?>







<?php include("footer.php"); ?>