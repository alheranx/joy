<?php include("header.php"); ?>


<?php
$producto = $_GET['id'];
$categoria = $_GET['categoria'];
$string = file_get_contents("productos.json");
$archivo_json = json_decode($string, true);


// Comprobamos si hay una petición de producto y la guardamos en la variable Producto_ID
// AL mismo tiempo declaramos TRUE para HAY_PRODUCTO
if (isset($_GET['producto_id'])) {
    $hay_producto = true;
    $producto_id = $_GET['producto_id'];
    $array_item = $archivo_json[$categoria]['subcategorias'][$producto]['productos'][$producto_id];
} else {
    $hay_producto = false;
}


$array_productos    = $archivo_json[$categoria]['subcategorias'][$producto]['productos'];
$actual             = $archivo_json[$categoria]['subcategorias'][$producto]['nombre'];


?>

<!-- ['subcategorias'][$producto]['nombre'] -->
<div class="container">
    <nav aria-label="breadcrumb bg-light">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="productos.php">Productos</a></li>
            <li class="breadcrumb-item text-capitalize"><a href="categoria.php?id=<?php echo $archivo_json[$categoria]['id']; ?>"><?php echo $archivo_json[$categoria]['categoria']; ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $actual; ?></li>
        </ol>
    </nav>
</div>



<div class="container-fluid mt-5 mb-5">
    <div class="container">
        <div class="row">
        
            
            <div class="col-3">


                <?php 

                    foreach ( $archivo_json[$categoria]['subcategorias'] AS $item ) { ?>
                        <div class="col-12 pr-5 pl-5 pb-3 pt-0 m-0">
                            <a href="producto.php?id=<?php echo $item['id']; ?>&categoria=<?php echo $categoria; ?>" class="enlace">
                                <img src="<?php echo $item['imagen']; ?>" alt="" width="100%">
                                <h3 class="text-uppercase text-center font-weight-normal" style="font-size: 20px;"><?php echo $es ? $item['nombre'] : $item['name']; ?></h3>
                            </a>
                        </div>
                        
                <?php } ?>

            </div>




            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-uppercase text-center mt-5 mb-5 titulo_categoria">
                                <?php echo $actual; ?>
                        </h1>
                    </div>
                </div>






                <div class="row">
                    
                    <?php if($hay_producto) { ?>

                            <div class="col-6">
                                <?php echo $hay_producto ? '<img src="'.$array_item['imagen'].'" alt="" width="100%">' : '<img src="images/productos/producto1.jpg" alt="" width="100%">'; ?>
                            </div>

                            <div class="col-6 p-5">
                                <b>CLAVE:</b> <?php echo $array_item['id']; ?><br>
                                <b>CAPACIDAD:</b> <?php echo $array_item['capacidad']; ?><br>
                                <b>MEDIDAS:</b> <?php echo $array_item['medida']; ?><br>
                                <b>PZAS. POR CAJA:</b> <?php echo $array_item['piezas']; ?>
                            </div>
                    
                    <?php } else { ?>
                            

                            <?php 
                            foreach ( $array_productos AS $first_item ) { ?>

                                <div class="col-6">
                                    <img src="<?php echo $first_item['imagen']; ?>" alt="" width="100%">
                                </div>
                                
                                <div class="col-6 p-5">
                                    <b>CLAVE:</b> <?php echo $first_item['id']; ?><br>
                                    <b>CAPACIDAD:</b> <?php echo $first_item['capacidad']; ?><br>
                                    <b>MEDIDAS:</b> <?php echo $first_item['medida']; ?><br>
                                    <b>PZAS. POR CAJA:</b> <?php echo $first_item['piezas']; ?>
                                </div>
                            <?php break; } ?>


                            

                            
                            
                            
                    <?php } ?>
                    
                </div>
            </div>


        </div>
    </div>
</div>




<div class="container">

    <hr class="m-5">


    <div class="row">
        <div class="col-12">
            <h2 class="text-center text-uppercase mb-5"><?php echo $actual; ?></h2>
        </div>
    </div>

    <div class="row">


        

        <?php 
        
        foreach ( $array_productos AS $item ) { ?>

            <div class="col-6 col-md-2">
                <a href="producto.php?id=<?php echo $producto; ?>&producto_id=<?php echo $item['id']; ?>&categoria=<?php echo $categoria; ?>" class="enlace">
                    <img src="<?php echo $item['imagen']; ?>" alt="" width="100%">
                </a>

                <p class="text-center"><?php echo $item['id']; ?></p>
            </div>

        <?php } ?>

    </div>
</div>



<?php include("footer.php"); ?>