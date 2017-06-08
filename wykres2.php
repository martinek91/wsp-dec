<?php
	if ($typ != 'mapa'){
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
	}
?>