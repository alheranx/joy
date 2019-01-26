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



<div class="encabezado_wrapper">
    <header class="container-fluid p-0 mb-0 mb-md-0 shadow encabezado" id="top">
        <div class="row justify-content-md-between p-0 m-0 shadow">
            <div class="col-4 col-sm-8 col-md-2 col-lg-2 left p-0 m-0">
                <a href="index.php">
                    <img src="images/logotipo.png" alt="" width="100%">
                </a>
            </div>

            <div class="col-12 col-xs-8 col-sm-6 col-md-7 align-self-center p-0">
            
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                        
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="index.php">
                                        <?php echo $es ? 'Inicio' : 'Home'; ?>
                                    </a>
                                </li>
 
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="productos.php">
                                        <?php echo $es ? 'Productos' : 'Products'; ?>
                                    </a>
                                </li>


                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link text-light dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" ><?php echo $es ? 'Productos' : 'Products'; ?></a>
                                    
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li> -->
                                
                                <!-- 
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="lonuevo.php">
                                    <?php echo $es ? 'Lo nuevo' : 'New!'; ?>
                                    </a>
                                </li>
                                -->
                                
                                <li class="nav-item">
                                <a class="nav-link text-light" href="nosotros.php">
                                    <?php echo $es ? 'Nosotros' : 'About Us'; ?>
                                </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link text-light" href="contacto.php">
                                        <?php echo $es ? 'Contacto' : 'Contact'; ?>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <!-- <a class="nav-link text-light" href="<?php echo $_SERVER['PHP_SELF'].'?lang='; echo $es ? 'en' : 'es'; ?>"> -->
                                    <a class="nav-link text-light" href="<?php echo 'index.php?lang='; echo $es ? 'en' : 'es'; ?>">
                                        <img src="images/bandera_<?php echo $es ? 'usa' : 'mexico'; ?>.jpg" alt="" height="20px;">
                                    </a>
                                </li>

                            </ul>
                            </div>
                        </nav>
            </div>
        </div>
    </header>
</div> 


<div style="position: fixed; right: 0px; bottom: 0px; padding: 15px!important; z-index: 99999">
    <a href="#top" class="d-block">
        <img src="images/up.png" alt="" class="d-block">
    </a>
</div>