<?php 
    $string = file_get_contents("productos.json");
    $json_a = json_decode($string, true);


    foreach ( $json_a AS $producto ) { ?>


        <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
            <a href="categoria.php?id=<?php echo $producto['id']; ?>" class="enlace">
                <img src="<?php echo $producto['imagen']; ?>" alt="" width="100%">
                <h3 class="text-uppercase text-center font-weight-normal enlace"><?php echo $es ? $producto['categoria'] : $producto['category']; ?></h3>
            </a>
        </div>
        
<?php } ?>