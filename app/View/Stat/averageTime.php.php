<div id="columnchart_values" style="width: 600px; height: 500px;float: right"></div>

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
        title: "Temp moyen dans le magasin",
        width: 600,
        height: 500,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

  <div style="width: 60%;margin-left:auto; margin-right: auto;text-align: center;">
  <a class="btn btn-default" href="<?php echo BASEPATH?>index.php/backoffice" style=" text-align: center; margin-top: 20px;">
    Retourner à la sélection des estimotes
  </a>
</div>