<?php


$n1={"January":0,"February":0,"March":0,"April":0,"May":0,"June":93,"July":6710,"August":0,"September":0,"October":0,"November":0,"December":0};

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 


	
   <script type="text/javascript">  

	google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() 
	  {
				var data = google.visualization.arrayToDataTable([
					  ["Element", "Rs", { role: "style" } ]
					<?php if($success=='1'){
									foreach($n1 as $key => $value)
										{		
											 if($key=='January'){
												 $color='#b87333';
												 
											 } if($key=='February'){
												 
												 $color='#FFDAB9';
												 
											 } if($key=='March'){
												 $color='#5F9EA0';								 
											 } if($key=='April'){
												  $color='#FFD700';
												 
											 } if($key=='May'){
												  $color='#A0522D';
												 
											 } if($key=='June'){
												  $color='#87CEFA';
												 
											 } if($key=='July'){
												  $color='#FF6347';
												 
											 } if($key=='August'){
												 
												  $color='#32CD32';
											 } if($key=='September'){
												  $color='#F5F5DC';
												 
											 } if($key=='October'){
												 
												  $color='#8B0000';
											 } if($key=='November'){
												 
												  $color='#A52A2A';
											 } if($key=='December'){
												  $color='#FF7F50';
												 
											 } 
											 
											 $asdd=",['".$key."',".$value.",'".$color."']"; 
											
											echo $asdd;
									}
						}else{
							echo"[january,0,]";
						}
					
					?>
				]);

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
  
  
					<div id="columnchart_values" style="width: 1000px; height: 400px;"></div>
          



?>
