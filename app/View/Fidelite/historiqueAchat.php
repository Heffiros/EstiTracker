<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<!-- Basepath not working in that peculiar case and i do not want to know why anymore -->
<!-- MODAL CONNETION-->
<script type="text/javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>app/Stylesheet/style.css" />

<style type="text/css">

	#form_fidele {
		left:42%; 
		position: absolute;
	}

    #enregistrement_filter {
      margin-right:40%;
      margin-bottom: 10px;
    }
    #enregistrement_paginate {
        display: none;
    }
    .dataTables_length {
    display: none;
  }
  #menu {
    display: none;
  }
  #enregistrement {
    border: solid;
    border-color: #3B3A74;
    border-width: 5px;
    border-radius: 5px;
    box-shadow: 10px 10px 5px #888888;
  }
  th {
    text-align: center;
  }
  h1 {
    text-align: center;
  }
  thead {
    background-color: #3B3A74;
    color: white;
  }
</style>

<br>
<br>
<?php if (count($all_achat) == 0) { ?>
<div>Pas d'achat</div>
<?php } else { ?>

<table id="enregistrement" class="display" cellspacing="0" width="90%">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($all_achat as $achat) {
                echo "<tr>";
                    echo "<th> ". $achat['produit'] ." </th>"; 
                    echo "<th> ". $achat['prix'] . "€</th>"; 
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<?php } ?>



<br>
<br>
<form class="col-md-9 col-md-offset-0 col-xs-15 col-xs-offset-0" id="form_fidele">
<div class="form-group">
<input class="form-control" id="number_participant" type="text" placeholder="Produit">
</div>
<div class="form-group">
<input class="form-control" id="number_participant" type="number" placeholder="Prix">
</div>
<div class="form-group">
<input class="btn btn-info" id="number_participant" type="submit" >
</div>
</form>

<script type="text/javascript" language="javascript" class="init">
    $(document).ready(function(){
    $('#enregistrement').DataTable({
        "ordering": false,
        "info":     false,
      "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
      }
    });
});
</script>