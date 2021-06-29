<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawLinearChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Profit'],
          ['2014', 1000, 400, 200],
          ['2015', 1170, 460, 250],
          ['2016', 660, 1120, 300],
          ['2017', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Desarrollo de la empresa',
            subtitle: 'Ventas, Gastos y Ganancias: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById("chart_div"));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

      function drawLinearChart(){
        
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales'],
          ['2004',  1000],
          ['2005',  1170],
          ['2006',  660],
          ['2007',  1030]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById("chart_div2"));

        chart.draw(data, options);
      }


    </script>
  </head>
  
</html>
