<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawLinearChart);
      google.charts.setOnLoadCallback(drawDonutChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mes', 'Ventas', 'Gastos', 'Ganancias'],
          ['Enero', 1000, 400, 200],
          ['Febrero', 1170, 460, 250],
          ['Marzo', 660, 1120, 300],
          ['Abril', 1030, 540, 350]
        ]);

        var options = {
          chart: {
            title: 'Desarrollo de la empresa',
            subtitle: 'Ventas, Gastos y Ganancias: Enero-Abril',
          }
        };

        var chart = new google.charts.Bar(document.getElementById("chart_div"));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }

      function drawLinearChart(){
        
        var data = google.visualization.arrayToDataTable([
          ['Mes', 'ganancias'],
          ['Enero',  1000],
          ['Febrero',  2000],
          ['Marzo',  4000],
          ['Abril',  5500]
        ]);

        var options = {
          title: 'Ganancias de la empresa',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById("chart_div2"));

        chart.draw(data, options);
      }
      function drawDonutChart(){
        var data = google.visualization.arrayToDataTable([
          ['Productos', 'Cantidad'],
          ['Materiales',     11],
          ['Maquinaria',      2],
          ['Consumibles',  2],
          ['Transito', 2],
        ]);

        var options = {
          title: 'Productos en almacen',
          is3D: false,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
        chart.draw(data, options);
      }


    </script>
  </head>
  
</html>
