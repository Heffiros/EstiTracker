<div id="piechart" style="width: 900px; height: 500px"></div>

<script type="text/javascript">
	  google.load('visualization', '1.0', {'packages':['corechart'], "callback": drawChart});
      google.setOnLoadCallback(drawChart);

     function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Estimote réference', 'Nombre de personne'],
          <?php echo $return ?>
        ]);

        var options = {
          title: 'Nombre de personne connecté'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    v