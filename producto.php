<?php include("header.php"); ?>


<!--    ==============================   VARIABLES    ==============================  -->
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
$current             = $archivo_json[$categoria]['subcategorias'][$producto]['name'];
?>


<!--    ==============================   MIGAS DE PAN    ==============================  -->
<div class="container mt-5">
    <nav aria-label="breadcrumb bg-light">
        <ol class="breadcrumb">
            
            <li class="breadcrumb-item"><a href="productos.php"><?php echo $es ? "Productos" : "Products"; ?></a></li>
            
            <li class="breadcrumb-item text-capitalize">
                <a href="categoria.php?id=<?php echo $archivo_json[$categoria]['id']; ?>"><?php echo $es ? $archivo_json[$categoria]['categoria'] : $archivo_json[$categoria]['category']; ?>
            </a></li>

            <li class="breadcrumb-item active" aria-current="page"><?php echo $es ? $actual : $current; ?></li>
        </ol>
    </nav>
</div>




<div class="container-fluid">
    <div class="container">
        <div class="row">
        
            
            <!--    ==============================   TIPOS DE PRODUCTOS    ==============================  -->
            <div class="col-12 col-md-3 d-none d-md-block mt-3 barra_lateral">
                <?php 
                    foreach ( $archivo_json[$categoria]['subcategorias'] AS $item ) { ?>
                        <div class="col-12 pr-5 pl-5 pb-3 pt-0 m-0">
                            <a href="producto.php?id=<?php echo $item['id']; ?>&categoria=<?php echo $categoria; ?>" class="enlace">
                                <!-- <img src="<?php echo $item['imagen']; ?>" class="d-block mx-auto"> -->
                                <p class="text-uppercase text-center font-weight-light p-2" style="font-weight: 300; font-size: 16px; background: <?php echo $archivo_json[$categoria]['color']; ?>; color: #fff;"><?php echo $es ? $item['nombre'] : $item['name']; ?></p>
                            </a>
                        </div>
                        
                <?php } ?>
            </div>



            <!--    ==============================   TÍTULO    ==============================  -->
            <div class="col-12 col-md-8">
                    <!-- 
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-uppercase text-center alargada m-3 m-md-3 mb-md-5 titulo_categoria">
                                <?php echo $es ? $actual : $current; ?>
                        </h1>
                    </div>
                </div>
                        -->





                <div class="row text-center text-md-left producto_principal">
                    
                    <?php if($hay_producto) { ?>
                            <!--
                            <div class="col-12 text-center">
                                <?php echo $hay_producto ? '<img src="'.$array_item['imagen'].'" alt="" width="70%">' : '<img src="images/productos/producto1.jpg" alt="" width="100%">'; ?>
                            </div>
                            -->

                            <!-- 
                            <div class="col-12 text-center">
                                <h6><?php echo $es ? $array_item['subnombre'] : $array_item['subname']; ?></h6>
                            </div>
                            -->

                            
                            <div class="col-12 p-3 p-md-5">
                                <b><?php echo $es ? "CLAVE" : "ITEM"; ?>:</b> <?php echo $array_item['id']; ?>
                                <b><?php echo $es ? "CAPACIDAD" : "CAPACITY"; ?>:</b> <?php echo $array_item['capacidad']; ?>
                                <b><?php echo $es ? "MEDIDAS" : "DIMENSION"; ?>:</b> <?php echo $array_item['medida']; ?>
                                <b><?php echo $es ? "PZAS. POR CAJA" : "PIECES PER BOX"; ?>:</b> <?php echo $array_item['piezas']; ?>
                            </div>
                    
                    <?php } else { ?>
                            

                            <?php 
                            foreach ( $array_productos AS $first_item ) { ?>

                                <div class="col-12 text-center">
                                    <img src="<?php echo $first_item['imagen']; ?>" alt="" width="60%">
                                </div>
                                
                                <div class="col-12">
                                    <!--
                                    <h6><?php echo $es ? $first_item['subnombre'] : $first_item['subname']; ?></h6>
                                    -->

                                    <div class="d-inline-flex p-2 bd-highlight">
                                        <div class="p-1 text-center align-self-stretch">
                                            <div class="p-1" style="border: #333 1px solid;">
                                                <?php echo $es ? "CLAVE" : "ITEM"; ?>:</b> <?php echo $first_item['id']; ?></div>
                                            </div>

                                        <div class="p-1 text-center align-self-stretch">
                                            <div class="p-1" style="border: #333 1px solid;">
                                                <?php echo $es ? "CAPACIDAD" : "CAPACITY"; ?>:</b> <?php echo $first_item['capacidad']; ?></div>
                                            </div>

                                        <div class="p-1 text-center align-self-stretch">
                                            <div class="p-1" style="border: #333 1px solid;">
                                                <?php echo $es ? "MEDIDAS" : "DIMENSION"; ?>:</b> <?php echo $first_item['medida']; ?></div>
                                            </div>

                                        <div class="p-1 text-center align-self-stretch">
                                            <div class="p-1" style="border: #333 1px solid;">
                                                <?php echo $es ? "PZAS. POR CAJA" : "PIECES PER BOX"; ?>:</b> <?php echo $first_item['piezas']; ?></div>
                                          
                                            </div>
                                    </div>
                                </div>
                            <?php break; } ?>

                            
                    <?php } ?>
                    
                </div>
            </div>


        </div>
    </div>
</div>






<div class="container mt-3 mt-md-5">
    <hr class="m-5">

    <div class="col-12">
        <h2 class="text-center text-uppercase alargada mb-3 mb-md-5">
            <?php echo $es ? $actual : $current; ?>
        </h2>
    </div>


    <div class="row">
        <?php 
        foreach ( $array_productos AS $item ) { ?>
            
            <div class="col-6 col-md-2 mb-5 producto_pie">
                <a href="producto.php?id=<?php echo $producto; ?>&producto_id=<?php echo $item['id']; ?>&categoria=<?php echo $categoria; ?>" class="enlace">
                    <img src="<?php echo $item['imagen']; ?>" class="d-block mx-auto">
                </a>
                
                <!-- 
                <a href="producto.php?id=<?php echo $producto; ?>&producto_id=<?php echo $item['id']; ?>&categoria=<?php echo $categoria; ?>" class="d-block text-center mt-2 enlace">
                    <?php echo $item['id']; ?>
                </a>
                -->
            </div>
        <?php } ?>
    </div>
</div>



<?php include("footer.php"); ?>