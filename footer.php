<div class="container-fluid bg-secondary mt-5">
        <div class="row">
                <div class="col-12">
                    <p class="text-light text-center p-3 delgada">
                        <?php if($es) { ?>
                            Teléfonos.: (01 55) 5760-5544 / 01 800 715 1600
                        <?php } else { ?>
                            Telephones.: (01 55) 5760-5544 / 01 800 715 1600
                        <?php } ?>
                    </p>
                </div>
        </div>
</div>



<!--
<form action="enviar.php" method="post" enctype="multipart/form-data" id="hm-formulario-dos">
        
    <div class="form-group m-2">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre...">
    </div>

    <div class="form-group m-2">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
    </div>

    <div class="form-group m-2">
        <label for="email">e-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese e-mail...">
    </div>

    <div class="form-group m-2">
        <label for="telefono">Teléfono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese teléfono...">
    </div>

    <div class="form-group m-2">
        <label for="ciudad">Teléfono</label>
        <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ingrese ciudad o estado...">
    </div>

    
    <div class="form-group m-2 text-center">
        <div id="estado_formulario_dos" class="alert alert-success"></div>
        <button type="button" class="btn btn-info mb-2 fondo_morado borde_morado" onclick='procesarFormulario("estado_formulario_dos", "hm-formulario-dos")'>
            SOLICITO INFORMACIÓN
        </button>
    </div>
</form>
-->
</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
$('.carousel').carousel();

if( window.innerWidth < 600 ){
    // alert("menos de 800");
    // $('div.container-full').addClass('container-fluid').removeClass('container-full');
}

document.getElementById("estado_formulario_uno").style.display = "none";
document.getElementById("estado_formulario_dos").style.display = "none";



function procesarFormulario(statusId, formularioId) {
    var url_que_procesa_el_formulario = "http://hmedia.mx/sendgrid/mail.php";
    var status = document.getElementById(statusId);
    var formulario = document.getElementById(formularioId);
    var campos = {};
    var errores = 0;
    var mensaje_de_exito = "Su solicitud se ha envíado correctamente.";
    var mensaje_sin_campos = "Debe llenar todos los campos marcados como obligatorios";
    var mensaje_con_campos = "Todos los campos llenados correctamente.";
    var encabezado                          = {};
        encabezado.subject                  = "PROGRAMA ELITE HEALTH EXP";
        encabezado.remitente_nombre         = "Registros Elite Health";
        encabezado.remitente_mail           = "no-reply@cenegenicsmexico.com";
        encabezado.destinatario_nombre      = "Web cenegenicsmexico.com";
        encabezado.destinatario_mail        = "contacto@cenegenicsmexico.com";

    

    status.style.display = "block";
    

    for (var i = 0, element; element = formulario.elements[i++];) {
        if ( element.value === "" ) {
            if(element.attributes.required) {
                errores++;
            }
        } else {
            campos[element.name] = element.value;
        }
    }

    if(errores >= 1) {
        status.innerHTML = mensaje_sin_campos;
    } else {
        status.innerHTML = mensaje_con_campos;
        

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                status.innerHTML = mensaje_de_exito;
                // console.log(xhttp.responseText);
            }
        };
        xhttp.open("POST", url_que_procesa_el_formulario, true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf-8");
        xhttp.send( "campos="+JSON.stringify(campos)+"&encabezado="+JSON.stringify(encabezado) );
    }
}
</script>
</html>