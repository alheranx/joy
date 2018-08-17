<?php 
    $string = file_get_contents("productos.json");
    $json_a = json_decode($string, true);


    foreach ( $json_a AS $producto ) { ?>


        <div class="col-6 col-xs-6 col-md-4 col-lg-3 p-5">
            <a href="categoria.php?id=<?php echo $producto['id']; ?>" class="text-center enlace">
                <img src="<?php echo $producto['imagen']; ?>" alt="" height="120px" class="d-block mx-auto">
                <img src="<?php echo $producto['imagen']; ?>" alt="" height="120px" class="d-none mx-auto">
                <h3 class="text-uppercase text-center font-weight-normal enlace"><?php echo $es ? $producto['categoria'] : $producto['category']; ?></h3>
            </a>
        </div>
        
<?php } ?>