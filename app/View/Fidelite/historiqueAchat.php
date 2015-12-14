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
                    echo "<th> ". $achat['prix'] . "</th>"; 
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<?php } ?>



<form>
<input type="text"> </input>
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