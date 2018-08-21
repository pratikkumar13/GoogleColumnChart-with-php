# GoogleColumnChart-with-php

Column styles GoogleChart  
  
<script type="text/javascript"> 
	google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() 
	  {
				var data = google.visualization.arrayToDataTable([
					  ["Element", "Rs", { role: "style" } ]
					,['January',0,'#b87333'],['February',0,'#FFDAB9'],['March',0,'#5F9EA0'],['April',0,'#FFD700'],['May',0,'#A0522D'],['June',93,'#87CEFA'],['July',6710,'#FF6347'],['August',0,'#32CD32'],['September',0,'#F5F5DC'],['October',0,'#8B0000'],['November',0,'#A52A2A'],['December',0,'#FF7F50']				]);

			  var view = new google.visualization.DataView(data);
			  view.setColumns([0, 1,
							   { calc: "stringify",
								 sourceColumn: 1,
								 type: "string",
								 role: "annotation" },
							   2]);

				 var options = { bars: 'horizontal', // Required for Material Bar Charts.
						  axes: {
										x: {
										  0: { side: 'top', label: 'Percentage'} // Top x-axis.
										}
									  },
									  
						legend: { position: 'top', maxLines: 3 },
						bar: { groupWidth: '75%' },
						isStacked: true
					  };

			 
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  
</script>



