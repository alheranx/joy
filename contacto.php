<?php include("header.php"); ?>




<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-uppercase text-center mt-5 mb-5 titulo_categoria">
                <?php echo $es ? 'Contacto' : 'Contact Us'; ?>
            </h1>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-md-6 p-5">

            <p>
            Llame al Tel.: <b>(01 55) 5760-5544</b>,<br>
            en México, D.F.<br>
            ó al <b>01 800 715 1600</b>
            </p>

            <p>
            O llene el siguiente formulario y envíelo a
            <b>Joy Técnica Plástica, S.A de C.V.</b>
            </p>
        </div>


        <div class="col-12 col-md-6">
                <form action="enviar.php" method="post" enctype="multipart/form-data" id="hm-formulario-dos">
                
                    <div class="form-group m-2">
                        <!-- <label for="nombre" class="col-sm-2 col-form-label">Nombre</label> -->
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre...">
                    </div>
                
                    <div class="form-group m-2">
                        <!-- <label for="nombre" class="col-sm-2 col-form-label">Empresa</label> -->
                        <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa...">
                    </div>

                    <div class="form-group m-2">
                        <!-- <label for="nombre" class="col-sm-2 col-form-label">Cargo</label> -->
                        <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo...">
                    </div>

                    <div class="form-group m-2">
                        <!-- <label for="telefono">Teléfono</label> -->
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese teléfono...">
                    </div>
                
                    <div class="form-group m-2">
                        <!-- <label for="email">e-mail</label> -->
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese e-mail...">
                    </div>
                
                    
                    <div class="form-group m-2">
                        <!-- <label for="ciudad">Ciudad</label> -->
                        <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ingrese ciudad...">
                    </div>
                
                    
                    <div class="form-group p-3">
                        <div id="estado_formulario_dos" class="alert alert-success"></div>
                        <button type="button" class="btn btn-info mb-2 btn-danger" onclick='procesarFormulario("estado_formulario_dos", "hm-formulario-dos")'>
                            Envíar a Joy
                        </button>
                    </div>
                </form>


                <p style="display: none;">Texto escondido</p>
        </div>
    </div>
</div>






<?php include("footer.php"); ?>