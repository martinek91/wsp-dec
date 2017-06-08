<?php
$row = 1;
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
fclose ($uchwyt);
?>