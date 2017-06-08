<!doctype html>
<?php
ini_set( 'display_errors', 'On' ); 
error_reporting( E_ALL );
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Wspieranie decyzji</title>
	<script type="text/javascript" src="canvasjs.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
	<center>
	<?php
	if (true){
		echo '<div>Jakiś nagłówek</div><br><br>';
		echo '<div>';
		if ($_POST) {
			$typ = $_POST['typ'];
			$nazwa = $_POST['nazwa'];
			include 'choice2.php';
			include 'functions.php';
			include 'wykres2.php';
		}
		else {
			echo '<a href="index.html">Powrót</a>';
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