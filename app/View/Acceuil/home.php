<?php
var_dump($session->getUser()->getPk());

echo "<br >";
echo "<br >";

var_dump($session->getUser()['mail']);

?>
<link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>app/Stylesheet/home.css" />
<script type="text/javascript" language="javascript" src="<?php echo BASEPATH ?>/ckeditor/ckeditor.js"></script>
<!-- MODAL CONNETION-->

<form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0" action="" method="post" >
    <fieldset>
		<div class="form-group">
	        <?php echo $form->input('beacon_ref','reference_estimote','text') ?><br/>
	    </div>
	    <div class="form-group">
	    	Estimote Type :
	        <select>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br/>
	    </div>
	    <div class="form-group">
	        <?php //echo $form->input('content', 'estimote_content_ckeditor', 'text') ?>
    	    <textarea id="editor" name="content"></textarea>
           	<br/>
        </div>
    	<div class="form-group">
        	<input type="submit"  class="btn btn-primary"/>
        </div>
    </fieldset>
</form>


<script>

	CKEDITOR.replace('content');
	console.log(CKEDITOR.instances['editor']);
</script>
<!--scripts loaded here-->
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>