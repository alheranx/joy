<?php include("header.php"); ?>




<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-uppercase text-center mt-5 mb-5 titulo_categoria">
                <?php echo $es ? 'Contacto' : 'Contact Us'; ?>
            </h1>
        </div>
    </div>



    <form action="enviar.php" method="post" enctype="multipart/form-data" id="hm-formulario-dos">

        <div class="row">
        

                <div class="col-12 col-md-6 p-3">

                        <div class="form-group">
                            <!-- <label for="nombre" class="col-sm-2 col-form-label">Nombre</label> -->
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre...">
                        </div>
                        
                        <div class="form-group">
                            <!-- <label for="nombre" class="col-sm-2 col-form-label">Empresa</label> -->
                            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa...">
                        </div>
                        
                        <div class="form-group">
                            <!-- <label for="telefono">Teléfono</label> -->
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese teléfono...">
                        </div>
                        
                        <div class="form-group">
                            <!-- <label for="email">e-mail</label> -->
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese e-mail...">
                        </div>
                        
                        <div class="form-group">
                            <!-- <label for="ciudad">Ciudad</label> -->
                            <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ingrese ciudad...">
                        </div>

                </div>
                    
                    
                <div class="col-12 col-md-6 p-3">

                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Mensaje ..."></textarea>
                        </div>
                        
                        
                        <div class="form-group text-right">
                            <div id="estado_formulario_dos" class="alert alert-success"></div>
                            <button type="button" class="btn btn-info mb-2 btn-danger" onclick='procesarFormulario("estado_formulario_dos", "hm-formulario-dos")'>
                                    Envíar a Joy
                            </button>
                        </div>
                            
                            
                        <p style="display: none;">Texto escondido</p>
                </div>
            
        </div><!-- row  -->
    </form>
            
</div><!-- container -->      
            
            <!-- <p>
            Llame al Tel.: <b>(01 55) 5760-5544</b>,<br>
            en México, D.F.<br>
            ó al <b>01 800 715 1600</b>
            </p>

            <p>
            O llene el siguiente formulario y envíelo a
            <b>Joy Técnica Plástica, S.A de C.V.</b>
            </p> -->



<?php include("footer.php"); ?>