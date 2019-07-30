@extends('layouts.app')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
  var analytics = <?php echo $sale; ?>

  google.charts.load('current', {'packages':['corechart']});

  google.charts.setOnLoadCallback(drawChart);

  function drawChart()
  {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Products Wise Total Sale'
    };
    var chart = new google.visualization.BarChart(document.getElementById('bar_chart'));
    chart.draw(data, options);

  }
  </script>

 </head>
 <body>
	 @section('content')
     <div id="bar_chart" style="align:center; width:100%; height:700px;">
 </body>
</html>
@endsection
