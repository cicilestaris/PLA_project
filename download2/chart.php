
<script type="text/javascript" src="js/fusioncharts.js"></script>
<script type="text/javascript" src="js/fusioncharts.theme.ocean.js"></script>

<?php
// This is a simple example on how to draw a chart using FusionCharts and PHP.
// We have included includes/fusioncharts.php, which contains functions
// to help us easily embed the charts.
include("fusioncharts.php");
// Create the chart - Column 2D Chart with data given in constructor parameter
// Syntax for the constructor - new FusionCharts("type of chart", "unique chart id", "width of chart", "height of chart", "div id to render the chart", "type of data", "actual data")
include "json_chart.php";
$isi_chart = '{
		   "chart":{
			  "caption":"Jumlah KTP",
			  "subCaption":"Pertanggal yang masuk minimal 1",
			  "numberPrefix":"",
			  "theme":"ocean"
		   },
		   "data":['.$data_chart.'
		   ]
		}';
		// echo $isi_chart;
$columnChart = new FusionCharts("column2d", "ex2" , 600, 400, "chart-1", "json", $isi_chart);
// Render the chart
$columnChart->render();

?>
<!-- wWWWHarry's SuperMartu$330K -->
<div id="chart-1">
<!-- <div id="chart-2"> -->
