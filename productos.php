<?php include("header.php"); ?>




<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-uppercase text-center mt-5 mb-5 titulo_categoria">
                <?php echo $es ? 'Productos' : 'Products'; ?>
            </h1>

            

            <?php echo $es ?
            
                '<p>Resumen</p>'
             :
             '<p>Resume</p>'
            ; ?>
            
        </div>
    </div>
</div>






<?php include("footer.php"); ?>