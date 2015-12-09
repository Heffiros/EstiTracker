<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" language="javascript" src='<?php echo BASEPATH ?>ckeditor/ckeditor.js'></script>
<link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>app/Stylesheet/style.css" />

<br>
 <form class="col-md-8 col-md-offset-0 col-xs-12 col-xs-offset-0" action="	email/send" method="GET">
	<div class="form-group">
      <input id="number_participant" class="form-control" name="nb_gagnant" type="number" placeholder="Nombre" required>
	</div>

	<div class="form-group">
      <input class="form-control" type="text" placeholder="Objet" name="objet" required>
	</div>

	<div class="form_group">
		<textarea id="text_ck" type="text" name="content" required></textarea><br>
	</div>

	<div class="form_group">
		<input id="submit_mail" type="submit" class="btn btn-success" value="Envoyer"></input>
	</div>
</form>

<script>
	CKEDITOR.replace('content');
	CKEDITOR.config.height = '600'
</script>
