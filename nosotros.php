<?php include("header.php"); ?>




<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-uppercase text-center mt-5 mb-5 titulo_categoria">
                <?php echo $es ? 'PRESENTACIÓN' : 'Presentation'; ?>
            </h1>

            

            <?php echo $es ?
            
                '<p>Joy Técnica Plástica S.A. de C.V. establecida en 1968 es una empresa 100 % mexicana dedicada al diseño, fabricación y distribución de artículos de plástico para el hogar.</p>
                <p>Producimos artículos de alta calidad, exclusivamente con materiales de primera, no tóxicos autorizados para utilizarse con alimentos. Contamos con una amplia línea de productos como: Recipientes Herméticos, Jarras, Cestos para Basura, Cubetas, Cajas, Palanganas, etc.</p>
                <p>Nuestro objetivo es brindarle al ama de casa productos útiles, bonitos y de gran calidad para el hogar.</p>
                <p>Puede usted adquirir nuestros productos en las principales tiendas de la República Mexicana, tales como Wal-Mart, Bodega Aurrera, Comercial Mexicana, Gigante, Soriana, etc.</p>
                <p>Esperamos poder servirle y recuerde......</p>'
             :
             '<p>Joy Tecnica Plastica SA de CV founded in 1968 is a 100% Mexican owned business. We design, manufacture and distribute plastic houseware of very high quality such as pitchers, waste baskets, pails, boxes, bowls, basins, air-tight food containers of assorted sizes, etc.</p>
                <p>Our products are made with first class high quality plastic. In addition, all our food storage products are produced with non-toxic materials conforming to strict regulations by governing agencies.</p>
                <p>Our mission is to offer homemakers useful and beautiful plastic products of the best quality available.</p>
                <p>You may find our products in main stores such as Wal-MArt, Aurrera, Comercial Mexicana, Soriana, Gigante and others.</p>'
            ; ?>


            <p class="text-right mt-5"><img src="images/logo_ch.jpg" alt="">es una joya en su hogar</p>
            
        </div>
    </div>
</div>






<?php include("footer.php"); ?>