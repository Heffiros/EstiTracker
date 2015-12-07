<div id="linechart_material" style="width: 600px; height: 500px; float: left; margin-top : 20px;"></div><br>

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
        width: 600,
        height: 500
      };

      var chart = new google.charts.Line(document.getElementById('linechart_material'));

      chart.draw(data, options);
    }
   </script>


<div style="width: 60%;margin-left:auto; margin-right: auto;text-align: center;">
  <a class="btn btn-default" href="<?php echo BASEPATH?>index.php/backoffice" style=" text-align: center; margin-top: 20px;">
    Retourner à la sélection des estimotes
  </a>
</div>