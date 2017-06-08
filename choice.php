<?php
if ($_FILES){
	$max_rozmiar = 1024*1024;
	if (is_uploaded_file($_FILES['plik']['tmp_name'])) {
		if ($_FILES['plik']['size'] > $max_rozmiar) {
			echo 'Błąd! Plik jest za duży!';
		}
		else {
			echo 'Odebrano plik. Początkowa nazwa: '.$_FILES['plik']['name'];
			echo '<br/>';
			if (isset($_FILES['plik']['type'])) {
				echo 'Typ: '.$_FILES['plik']['type'].'<br/>';
				if (move_uploaded_file($_FILES['plik']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/../tmp/foto/'.$_FILES['plik']['name'])){
					echo 'Zapisano plik';
					$row = 1;
					$uchwyt = fopen ($_SERVER['DOCUMENT_ROOT'].'/../tmp/foto/'.$_FILES['plik']['name'],"r");
					while (($data = fgetcsv($uchwyt, 1000, ",")) !== FALSE)  {
						$num = count($data);
						//echo "<p> $num pól w lini $row: <br /></p>\n";
						for ($c=0; $c < $num; $c++) {
							//echo $data[$c] . "<br />\n";
							$wykres[$row][$c] = $data[$c];
						}
						$row++;
					}
					fclose ($uchwyt);
					echo 'Wybierz typ wykresu:';
					
				}
				else {
					echo 'Błąd zapisu';
				}
			}
			else {
				echo 'Błąd';
			}
		}
	}
	else {
		echo 'Błąd przy przesyłaniu danych!';
	}
}
?>