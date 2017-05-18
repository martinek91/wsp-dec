<!doctype html>
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
		/*
			if ($_POST) {
				$cos = $_POST['cos'];
				echo 'Przesłano plik, wybierz rodzaj wykresu<br><br>';
				?>
				<form action=""  method="POST">
					<input type="submit" name="cos" value="1" style="background-image: url(1_2.png); width: 200px; height: 200px; background-repeat: no-repeat; background-position: 0 0; padding: 0; margin: 0; border: none; cursor: pointer; text-indent: -9000px;">
					<input type="submit" name="cos" value="2" style="background-image: url(2_2.png); width: 200px; height: 200px; background-repeat: no-repeat; background-position: 0 0; padding: 0; margin: 0; border: none; cursor: pointer; text-indent: -9000px;">
					<input type="submit" name="cos" value="3" style="background-image: url(3_2.png); width: 200px; height: 200px; background-repeat: no-repeat; background-position: 0 0; padding: 0; margin: 0; border: none; cursor: pointer; text-indent: -9000px;">
				</form>
				<br><br>
				<?php				
				if ($cos > 0) {
					echo '<img src="'.$cos.'.png">';
				}
			}
			else {
				?>
				<!--<form action="index.php"  method="POST" enctype="multipart/form-data">-->
				
				<input type="file" name="nazwa" />
				<form action=""  method="POST">
					<input type="hidden" name="cos" value="0"/>
					<input type="submit" value="Wyślij">   <input type="reset">
				</form>
				<?php
			}
		*/
			if ($_FILES) {
				$max_rozmiar = 1024*1024;
				if (is_uploaded_file($_FILES['plik']['tmp_name'])) {
					if ($_FILES['plik']['size'] > $max_rozmiar) {
						echo 'Błąd! Plik jest za duży!';
					} else {
						echo 'Odebrano plik. Początkowa nazwa: '.$_FILES['plik']['name'];
						echo '<br/>';
						if (isset($_FILES['plik']['type'])) {
							echo 'Typ: '.$_FILES['plik']['type'].'<br/>';
						}
						move_uploaded_file($_FILES['plik']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/foto/'.$_FILES['plik']['name']);
					}
					// wyświetlanie wykresu
					$row = 1;
					$uchwyt = fopen ($_SERVER['DOCUMENT_ROOT'].'/foto/'.$_FILES['plik']['name'],"r");
					while (($data = fgetcsv($uchwyt, 1000, ",")) !== FALSE)  {
						$num = count($data);
						//echo "<p> $num pól w lini $row: <br /></p>\n";
						for ($c=0; $c < $num; $c++) {
							//echo $data[$c] . "<br />\n";
							$wykres[$row][$c] = $data[$c];
						}
						$row++;
					}
					echo '<form action="" method="POST">
						<input type="hidden" name="typ" value="bar"/>
						<input type="hidden" name="nazwa" value="'.$_FILES['plik']['name'].'"/>
						<input type="submit" value="Słupkowy">
					</form>';
					fclose ($uchwyt);
					echo '<script type="text/javascript">
					window.onload = function () {
					var chart = new CanvasJS.Chart("chartContainer", {
					data: [';
					$i = 2;
					while ($i <$row) {
						echo '{
						type: "line",
						showInLegend: true, 
						legendText: "'.$wykres[$i][0].'",
						dataPoints: [';
						$j = 1;
						while ($j < $num) {
							echo '{ label: "'.$wykres[1][$j].'", x: '.$j.', y: '.$wykres[$i][$j].' }';
							$j++;
							if ($j <$num) { echo ',';}
						}
						echo ']
						}';
						$i++;
						if ($i <$row) { echo ',';}
					}
					echo ']
					});
					chart.render();
					}
					</script>
					<div id="chartContainer" style="height: 900px; width: auto;"></div>';
					// koniec wyświetlania
				} else {
					echo 'Błąd przy przesyłaniu danych!';
				}
			}
			else {
				if ($_POST) {
					// wyświetlanie wykresu
					$row = 1;
					$nazwa = $_POST['nazwa'];
					$typ = $_POST['typ'];
					$uchwyt = fopen ($_SERVER['DOCUMENT_ROOT'].'/../tmp/foto/'.$nazwa,"r");
					while (($data = fgetcsv($uchwyt, 1000, ",")) !== FALSE)  {
						$num = count($data);
						//echo "<p> $num pól w lini $row: <br /></p>\n";
						for ($c=0; $c < $num; $c++) {
							//echo $data[$c] . "<br />\n";
							$wykres[$row][$c] = $data[$c];
						}
						$row++;
					}
					echo '<form action="" method="POST">
						<input type="hidden" name="typ" value="bar"/>
						<input type="hidden" name="nazwa" value="'.$_FILES['plik']['name'].'"/>
						<input type="submit" value="Słupkowy">
					</form>';
					fclose ($uchwyt);
					echo '<script type="text/javascript">
					window.onload = function () {
					var chart = new CanvasJS.Chart("chartContainer", {
					data: [';
					$i = 2;
					while ($i <$row) {
						echo '{
						type: "';
						echo $typ;
						echo '",
						showInLegend: true, 
						legendText: "'.$wykres[$i][0].'",
						dataPoints: [';
						$j = 1;
						while ($j < $num) {
							echo '{ label: "'.$wykres[1][$j].'", x: '.$j.', y: '.$wykres[$i][$j].' }';
							$j++;
							if ($j <$num) { echo ',';}
						}
						echo ']
						}';
						$i++;
						if ($i <$row) { echo ',';}
					}
					echo ']
					});
					chart.render();
					}
					</script>
					<div id="chartContainer" style="height: 900px; width: auto;"></div>';
					// koniec wyświetlania
				} else {
				?>
				<form action="" method="POST" ENCTYPE="multipart/form-data">
					<input type="file" name="plik"/><br/>
					<input type="submit" value="Wyślij">   <input type="reset">
				</form>
				<?php
				}
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