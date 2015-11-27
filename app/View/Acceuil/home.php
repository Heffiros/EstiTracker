<link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>app/Stylesheet/home.css" />
<script type="text/javascript" language="javascript" src="<?php echo BASEPATH ?>/ckeditor/ckeditor.js"></script>
<!-- MODAL CONNETION-->

<form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0" action="" method="post" >
    <fieldset>
		<div class="form-group">
	        <?php echo $form->input('beacon_ref','reference_estimote','text'); ?><br/>
	    </div>
	    <div class="form-group">
	    	Estimote Type :
	        <select name="type">
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
/*var box = 0;
$("#3").click(function(){
	if (box != 3) {*/
		CKEDITOR.replace('content');
		console.log(CKEDITOR.instances['editor']);

// 		box = 3
// 	} else {
// 		CKEDITOR.instances.editor.destroy();
// 		box = 0
// 	}
// });
// $("#2").click(function(){
// 	if (box != 2)
// 		box = 2
// 	else
// 		box = 0
// });
// $("#1").click(function(){
// 	if (box != 1)
// 		box = 1
// 	else
// 		box = 0
// });
// $("#create").click(function(){
// 	$("#select").attr("value", box)
// });
</script>
<!--scripts loaded here-->
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>