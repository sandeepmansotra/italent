@extends('layouts.app')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
  var analytics = <?php echo $day; ?>

  google.charts.load('current', {'packages':['corechart']});

  google.charts.setOnLoadCallback(drawChart);

  function drawChart()
  {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Day Wise Total Sale'
    };
    var chart = new google.visualization.LineChart(document.getElementById('line_chart'));
    chart.draw(data, options);
  }
  </script>
 </head>
 <body>
  @section('content')
	      <div id="line_chart" style="width:100%; height:80%;">
	      </div>
 </body>
</html>
@endsection
