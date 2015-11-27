<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

<select class="target">
  <option value="0">Choisir</option>
  <option value="1">Nombre de passant</option>
  <option value="2">Temps de passage</option>
</select>

<span id="contenu_dyna"></span>

<script>

$(".target" ).change(function() {


var type = $(".target").val();

if (type != 0) {
	var base = <?php echo BASEPATH ?>;
	var stat_url = base + 'index.php/stat/stat_chart_' + String(type);
	$.ajax({
				async: true,
				type: 'POST',
				url: stat_url,
				success: function(data){
					$("#contenu_dyna").html(data);
				}
			});
}

});

</script>