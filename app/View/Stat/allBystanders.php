 <div id="linechart_material" style="width: 900px; height: 500px"></div>

<script type="text/javascript">
	  google.load('visualization', '1.1', {packages: ['line']});
    google.setOnLoadCallback(drawChart);

    function drawChart() {

      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Day');
      data.addColumn('number', '<?php echo $esti_ref ?>');

      data.addRows([
        <?php echo $return ?> 
      ]);
      var options = {
        chart: {
          title: 'Nombre de passant',
        },
        width: 900,
        height: 500
      };

      var chart = new google.charts.Line(document.getElementById('linechart_material'));

      chart.draw(data, options);
    }
   </script>