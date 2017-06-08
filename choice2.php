<?php
echo '<form action="wykres.php" method="POST">
	<input type="hidden" name="typ" value="line"/>
	<input type="hidden" name="nazwa" value="'.$nazwa.'"/>
	<input type="submit" value="Liniowy">
</form>';
echo '<form action="wykres.php" method="POST">
	<input type="hidden" name="typ" value="bar"/>
	<input type="hidden" name="nazwa" value="'.$nazwa.'"/>
	<input type="submit" value="Słupkowy">
</form>';
echo '<form action="wykres.php" method="POST">
	<input type="hidden" name="typ" value="area"/>
	<input type="hidden" name="nazwa" value="'.$nazwa.'"/>
	<input type="submit" value="Area">
</form>';
echo '<form action="wykres.php" method="POST">
	<input type="hidden" name="typ" value="pie"/>
	<input type="hidden" name="nazwa" value="'.$nazwa.'"/>
	<input type="submit" value="Kołowy">
</form>';
echo '<form action="wykres.php" method="POST">
	<input type="hidden" name="typ" value="doughut"/>
	<input type="hidden" name="nazwa" value="'.$nazwa.'"/>
	<input type="submit" value="doughut">
</form>';
echo '<form action="wykres.php" method="POST">
	<input type="hidden" name="typ" value="map"/>
	<input type="hidden" name="nazwa" value="'.$nazwa.'"/>
	<input type="submit" value="Mapa">
</form>';
?>