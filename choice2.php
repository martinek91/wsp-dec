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
?>