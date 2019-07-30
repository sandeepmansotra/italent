@extends('layouts.app')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="text/javascript">
   var analytics = <?php echo $item; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
     title : 'Products Sold by Quantity'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);

   }
  </script>

 </head>
 <body>
    @section('content')
     <div id="pie_chart" style="align:center width:100%; height:700px;">
     </div>
 </body>
</html>
@endsection
