<?php
echo '<form style="display: inline-block; padding: 0px 10px 20px 10px;" action="wykres.php" method="POST">
	<input type="hidden" name="typ" value="line"/>
	<input type="hidden" name="nazwa" value="'.$nazwa.'"/>
	<input class="btn-primary" type="submit" value="Liniowy">
</form>';
echo '<form style="display: inline-block; padding: 0px 10px 20px 10px;" action="wykres.php" method="POST">
	<input type="hidden" name="typ" value="bar"/>
	<input type="hidden" name="nazwa" value="'.$nazwa.'"/>
	<input class="btn-primary" type="submit" value="Słupkowy">
</form>';
echo '<form style="display: inline-block; padding: 0px 10px 20px 10px;" action="wykres.php" method="POST">
	<input type="hidden" name="typ" value="area"/>
	<input type="hidden" name="nazwa" value="'.$nazwa.'"/>
	<input class="btn-primary" type="submit" value="Area">
</form>';
echo '<form style="display: inline-block; padding: 0px 10px 20px 10px;" action="wykres.php" method="POST">
	<input type="hidden" name="typ" value="pie"/>
	<input type="hidden" name="nazwa" value="'.$nazwa.'"/>
	<input class="btn-primary" type="submit" value="Kołowy">
</form>';
echo '<form style="display: inline-block; padding: 0px 10px 20px 10px;" action="wykres.php" method="POST">
	<input type="hidden" name="typ" value="doughnut"/>
	<input type="hidden" name="nazwa" value="'.$nazwa.'"/>
	<input class="btn-primary" type="submit" value="Doughnut">
</form>';
echo '<form style="display: inline-block; padding: 0px 10px 20px 10px;" action="wykres.php" method="POST">
	<input type="hidden" name="typ" value="map"/>
	<input type="hidden" name="nazwa" value="'.$nazwa.'"/>
	<input class="btn-primary" type="submit" value="Mapa">
</form>';
?>