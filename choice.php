<?php
if ($_FILES){
	$max_rozmiar = 1024*1024;
	if (is_uploaded_file($_FILES['plik']['tmp_name'])) {
		if ($_FILES['plik']['size'] > $max_rozmiar) {
			echo 'Błąd! Plik jest za duży!';
		}
		else {
			echo 'Odebrano plik: '.$_FILES['plik']['name'];
			echo '<br/>';
			if (isset($_FILES['plik']['type'])) {
				//echo 'Typ: '.$_FILES['plik']['type'].'<br/>';
				if (move_uploaded_file($_FILES['plik']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/../tmp/foto/'.$_FILES['plik']['name'])){
					//echo 'Zapisano plik';
					$nazwa = $_FILES['plik']['name'];
					include 'choice2.php';
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