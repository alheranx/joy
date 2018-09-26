<?php 
    $string = file_get_contents("productos.json");
    $json_a = json_decode($string, true);


    foreach ( $json_a AS $producto ) { ?>


        <div class="col-6 col-sm-4 col-md-4 col-lg-4 p-4 mb-3 producto_item">
            <div style="background: <?php echo $producto['color']; ?>;">
                <h3 class="text-uppercase text-left font-weight-normal mt-3 text-light p-2 titulo"><?php echo $es ? $producto['categoria'] : $producto['category']; ?></h3>
            </div>

            <a href="categoria.php?id=<?php echo $producto['id']; ?>" class="text-center enlace">
                <img src="<?php echo $producto['imagen']; ?>" alt="" class="d-block mx-auto" style="width: 100%;">
            </a>
        </div>
        
<?php } ?>