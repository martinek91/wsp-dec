<!doctype html>
<?php
ini_set( 'display_errors', 'On' ); 
error_reporting( E_ALL );
include 'functions.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Wspieranie decyzji</title>
	<script type="text/javascript" src="canvasjs.min.js"></script>
</head>
<body>
	<center>
	<?php
	if (true){
		echo '<div>Jakiś nagłówek</div><br><br>';
		echo '<div>';
		if ($_FILES) {
			include 'choice.php';
		}
		else {
			include 'form.php';
		}
		echo '</div>';
	}
	else{
		echo 'Nie jesteś zalogowany';
	}
	?>
	</center>
</body>
</html>