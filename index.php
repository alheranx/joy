<?php
session_start();

// Cuando dan clic en un idioma
if( isset( $_GET['lang'] ) ) {
	// Si dan clic en español
	if($_GET['lang'] == 'es') {
		// Español es igual a TRUE (verdadero)
		$_SESSION['lang'] = 'es';
		$es = true;
	}
	else {
		$_SESSION['lang'] = 'en';
		$es = false;
	}
}

// Cuando entran por primera vez
else {

	if(  isset($_SESSION['lang'] )  ) {
		if(  $_SESSION['lang'] == 'es'  ) {
			$es = true;
		}
		else {
			$es = false;
		}
	}
	else {
		$_SESSION['lang'] = 'es';
		$es = true;
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Joy Tecnica Plastica</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos_programa.css">
</head>
<body>


<header class="container-fluid p-0 mb-5 shadow">
    <div class="row justify-content-md-between p-0 m-0 shadow">
        <div class="col-4 col-sm-8 col-md-2 col-lg-2 left p-0 m-0">
            <img src="images/logotipo.png" alt="" width="100%">
        </div>

        <div class="col-12 col-xs-8 col-sm-6 col-md-7 align-self-center p-0">
        




            <?php if($es) { ?>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item">
                            <a class="nav-link text-light" href="#">Nosotros</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link text-light" href="#">Productos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Lo nuevo</a>
                                </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Contacto</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php?lang=en">
                                        <img src="images/bandera_usa.jpg" alt="" height="20px;">
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php?lang=es">
                                        <img src="images/bandera_mexico.jpg" alt="" height="20px;">
                                </a>
                            </li>
                        </ul>
                        </div>
                    </nav>

            <?php } else { ?>

                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item">
                            <a class="nav-link text-light" href="#">About Us</a>
                            </li>

                            <li class="nav-item">
                            <a class="nav-link text-light" href="#">Products</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">New!</a>
                                </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Contact Us</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php?lang=en">
                                        <img src="images/bandera_usa.jpg" alt="" height="20px;">
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php?lang=es">
                                        <img src="images/bandera_mexico.jpg" alt="" height="20px;">
                                </a>
                            </li>
                        </ul>
                        </div>
                    </nav>


            <?php  } ?>






        </div>
    </div>
</header>




<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="images/slider/slider1.jpg" alt="">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="images/slider/slider2.jpg" alt="">
    </div>
</div>

<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>



<?php if($es) { ?>
    <div class="container-fluid mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria1.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal enlace">Cajas</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="hermeticos.html" class="enlace">
                        <img src="images/categorias/categoria2.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Herméticos</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria3.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Limpieza</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria4.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Cestos</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria5.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Cestos</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria6.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Cestos</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="container-fluid mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria1.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal enlace">Boxes</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="hermeticos.html" class="enlace">
                        <img src="images/categorias/categoria2.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Hermetic</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria3.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">Cleaning</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria4.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">baskets</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria5.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">baskets</h3>
                    </a>
                </div>
                <div class="col-12 col-xs-6 col-md-4 col-lg-3 p-5">
                    <a href="#" class="enlace">
                        <img src="images/categorias/categoria6.jpg" alt="" width="100%">
                        <h3 class="text-uppercase text-center font-weight-normal">baskets</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>







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