<?php include("header.php"); ?>

<?php
$categoria = $_GET['id'];
$string = file_get_contents("productos.json");
$json_a = json_decode($string, true);
$categoria_titulo = $json_a[$categoria]['categoria'];
$category_title = $json_a[$categoria]['category'];
$categoria_portada = $json_a[$categoria]['imagen_portada'];
?>



<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="text-uppercase text-center mt-3 mt-md-5 mb-3 mb-md-5 alargada titulo_categoria">
                <?php echo $es ? $categoria_titulo : $category_title; ?>
            </h1>
        </div>
    </div>

    <div class="row p-0">
        <div class="col-12 p-0">
            <img class="d-block w-100" src="<?php echo $categoria_portada; ?>" alt="">
        </div>
    </div>
</div>






<div class="container-fluid mt-5 mb-5">
    <div class="container">
        <div class="row">

            <?php
                foreach ( $json_a[$categoria]['subcategorias'] AS $producto ) { ?>
                    <div class="col-6 col-sm-4 col-md-4 col-lg-3 p-3 mb-3 producto_item">
                        <a href="producto.php?id=<?php echo $producto['id']; ?>&categoria=<?php echo $categoria; ?>" class="text-center enlace">
                            <img src="<?php echo $producto['imagen']; ?>" alt="" class="d-block mx-auto">
                            <h3 class="text-uppercase text-center font-weight-normal enlace mt-3"><?php echo $es ? $producto['nombre'] : $producto['name']; ?></h3>
                        </a>
                    </div>
            <?php } ?>

        </div>
    </div>
</div>



<?php include("footer.php"); ?>