<div id="linechart_material" style="width: 600px; height: 500px; float: left; margin-top : 20px;"></div><br>
<<<<<<< HEAD
=======
<div id="columnchart_values" style="width: 600px; height: 500px;float: right"></div>



















>>>>>>> 882253614dd17c03badef35525198ea174a3f573

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

<<<<<<< HEAD

=======
<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart2);
    function drawChart2() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" }],
        <?php echo $return2 ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        width: 600,
        height: 500,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>







>>>>>>> 882253614dd17c03badef35525198ea174a3f573
<div style="width: 60%;margin-left:auto; margin-right: auto;text-align: center;">
  <a class="btn btn-default" href="<?php echo BASEPATH?>index.php/backoffice" style=" text-align: center; margin-top: 20px;">
    Retourner à la sélection des estimotes
  </a>
</div>