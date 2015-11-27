<link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>app/Stylesheet/home.css" />
<script type="text/javascript" language="javascript" src="http://estitracker.esy.es/ckeditor/ckeditor.js"></script>
<!-- Basepath not working in that peculiar case and i do not want to know why anymore -->
<!-- MODAL CONNETION-->

<!-- <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0" action="" method="post" >
    <fieldset>
		<div class="form-group">
	        <?php //echo $form->input('beacon_ref','reference_estimote','text'); ?><br/>
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
</form> -->

<div class="calque">

</div>

<section class="container-fluid" id="section1">
    <div class="v-center">
        <h1 class="text-center">EstiTracker</h1>
        <h2 class="text-center lato animate slideInDown ">Ajout d'un estimote</h2>
        <p class="text-center">
            <br>
            <a href="#" style="width:212px;" class="btn btn-default btn-lg btn-huge lato" data-toggle="modal" data-target="#myModal1">Cliquez pour ajouter !</a>
            <br>
        </p>
    </div>
  
</section>
<div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="text-center"><br>Ajout d'un estimote</h2>
            </div>
            <div class="modal-body row" style="text-align: center;">
               <!--  <h6 class="text-center">COMPLETE THESE FIELDS TO SIGN UP</h6> -->
                <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0" action='' method='POST'>
                <fieldset>
                	<div class="form-group">
                		<input type="text" name="beacon_ref" id="beacon_ref" class="form-control" placeholder="reference_estimote" style="width: 80%; margin-left: auto; margin-right: auto;">
	        <?php //echo $form->input('beacon_ref','reference_estimote','text'); ?>
	    </div>
	    <div class="form-group">
	    	Estimote Type :
	        <select name="type" class="target">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>
			<br/>
	    </div>
	    <div class="form-group">
	        <?php //echo $form->input('content', 'estimote_content_ckeditor', 'text') ?>
    	    <textarea id="editor" name="content" style="display:none;!important visibility :hidden;!important"></textarea>
           	<br/>
        </div>
    	<div class="form-group">
        	<input type="submit"  class="btn btn-primary"/>
        </div>
                </fieldset>
                </form>
            </div>
         
        </div>
    </div>
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script>
	$(".target" ).change(function() {
		var type = $(".target").val();
		console.log(type);
		if (type == 3) {
			CKEDITOR.replace('content');		
		}
		else {
			if (CKEDITOR.instances)
				CKEDITOR.instances.editor.destroy();
		}
	});
</script>
<!--scripts loaded here-->
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>