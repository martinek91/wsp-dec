<?php
	if ($typ != 'map'){
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
	else {
		?><script type="text/javascript">
			google.charts.load('current', {'packages':['geochart']});
			google.charts.setOnLoadCallback(drawRegionsMap);
			function drawRegionsMap() {
				var data = google.visualization.arrayToDataTable([
					['Country', 'Country','cos'],
					['Germany', 200, 125],
					['United States', 300,125],
					['Brazil', 400,652],
					['Canada', 500,63],
					['France', 600,73],
					['Poland', 800,73],
					['RU', 700,1],
					["Japan", 300,600]
				]);
				var options = {colors: ['red']};
				var chart = new google.visualization.GeoChart(document.getElementById('chart'));
				chart.draw(data, options);
			}
		</script>
		<div id="chart" style="width: 900px; height: auto;"></div>
		<?php
	}
?>