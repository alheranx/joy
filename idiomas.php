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
	<meta charset="UTF-8">
	<title>Idiomas</title>
</head>




<?php if($es) { ?>

	<body>
		<div>
			<a href="idiomas.php?lang=es">Español</a> | 
			<a href="idiomas.php?lang=en">English</a>
		</div>

		<h1>Titulo</h1>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae enim quibusdam accusantium rerum ab recusandae sunt, deleniti, dignissimos sint ea ullam perspiciatis amet nulla mollitia? Perspiciatis aut libero, saepe voluptatem.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae unde inventore natus eius similique ipsa animi autem voluptatem. Quas deleniti ipsa numquam. Omnis minima laboriosam dolor ipsam velit ex, iusto, nam.</p>
		
	</body>



<?php } else { ?>

	<body>
		<div>
			<a href="idiomas.php?lang=es">Español</a> | 
			<a href="idiomas.php?lang=en">English</a>
		</div>

		<h1>Titulo</h1>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae enim quibusdam accusantium rerum ab recusandae sunt, deleniti, dignissimos sint ea ullam perspiciatis amet nulla mollitia? Perspiciatis aut libero, saepe voluptatem.</p>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae unde inventore natus eius similique ipsa animi autem voluptatem. Quas deleniti ipsa numquam. Omnis minima laboriosam dolor ipsam velit ex, iusto, nam.</p>
		
	</body>

<?php } ?>


</html>