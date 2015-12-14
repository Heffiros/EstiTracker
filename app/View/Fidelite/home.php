<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<!-- Basepath not working in that peculiar case and i do not want to know why anymore -->
<!-- MODAL CONNETION-->
<script type="text/javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>


<input class="form-control" list="test" type="text" id="number_participant" multiple>
<datalist id="test">
<?php
foreach ($fidele as $value) {
	echo "<option>" .  $value['mail']; 
	echo "</option>";
}
?>
</datalist>
<br>
<button class="btn-success btn" id="target">Voir</button	>
<br>

<div id="contenu_dyna"></div>

<script>


$( "#target" ).click(function() {
	var test = $( "#number_participant" ).val();	

	var base = <?php echo BASEPATH ?>;
	var fidele_url = base + 'index.php/fidele/historique';
	console.log(fidele_url)
	$.ajax({
				async: true,
				type: 'POST',
				data: {mail : test},
				url: fidele_url,
				success: function(data){
					$("#contenu_dyna").html(data);
				}
			});
});




</script>