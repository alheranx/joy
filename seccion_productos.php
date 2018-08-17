<?php 
    $string = file_get_contents("productos.json");
    $json_a = json_decode($string, true);


    foreach ( $json_a AS $producto ) { ?>


        <div class="col-6 col-sm-4 col-md-4 col-lg-3 p-3 mb-3 producto_item">
            <a href="categoria.php?id=<?php echo $producto['id']; ?>" class="text-center enlace">
                <img src="<?php echo $producto['imagen']; ?>" alt="" class="d-block mx-auto">
                <h3 class="text-uppercase text-center font-weight-normal enlace mt-3"><?php echo $es ? $producto['categoria'] : $producto['category']; ?></h3>
            </a>
        </div>
        
<?php } ?>