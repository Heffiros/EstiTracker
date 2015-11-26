<?php
var_dump($session->getUser()->getPk());

echo "<br >";
echo "<br >";

var_dump($session->getUser()['mail']);

?>
<!-- MODAL CONNETION-->

                <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0" action="" method="post" >
                    <fieldset>
                	<div class="form-group">
                    <?php echo $form->input('type','type_estimote','number') ?><br/>
                	</div>
                   	<div class="form-group">
                    <?php echo $form->input('beacon_ref','reference_estimote','text') ?><br/>
                	</div>
                	<div class="form-group">
                    <?php echo $form->input('content', 'estimote_content_ckeditor', 'text') ?><br/>
                	</div>
                	<div class="form-group">
                	<input type="submit"  class="btn btn-primary"/>
                	</div>
                </fieldset>
                </form>
<!--scripts loaded here-->
    
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>