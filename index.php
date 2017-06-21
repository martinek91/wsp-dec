<!doctype html>
<?php
ini_set( 'display_errors', 'On' ); 
error_reporting( E_ALL );
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Wspieranie decyzji</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap-filestyle.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body class="bg-info">
	<center>
	<?php
	if (true){
		echo '
        <div class="bg-primary text-white">
        <br>
        <h1 class="hidden-xs-down">Mechanizm wspomagania decyzji wyboru wizualizacji dla danego zestawu danych</h1>
        <br>
        </div>
        <div class="container bg-info">
        <br><br>
        <img src="img/graf.jpg" class="img-rounded" alt="Graf"  width="600"> 
        <br><br><br>';

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