<script type="text/javascript" language="javascript" src='<?php echo BASEPATH ?>ckeditor/ckeditor.js'></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<!-- Basepath not working in that peculiar case and i do not want to know why anymore -->
<!-- MODAL CONNETION-->


<script type="text/javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<table id="enregistrement" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>id Estimote</th>
            <th>Nom de l'Estimote</th>
            <th>Référence Beacon</th>
            <th>Type de l'Estimote</th>
            <th>Contenu html de l'Estimote</th>
            <th>Date de création de l'Estimote </th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($query as $value) {
                $id = $value['id'];
                echo "<tr>";
                    echo "<th>" . $value['id'] . "</th>"; 
                    echo "<th>" . $value['name'] . "</th>"; 
                    echo "<th>" . $value['beacon_ref'] . "</th>"; 
                    echo "<th>" . $value['type'] . "</th>"; 
                    echo "<th>" . substr($value['content'], 0 ,100) . "</th>"; 
                    echo "<th>" . $value['created'] . "</th>"; 
                    echo "<th> <img src='".BASEPATH."app/Media/croix.png' onclick='delete_beacon($id)'></img><img src='".BASEPATH."app/Media/stat.png' onclick='go_stat($id)'></img></th>"; 
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<section class="container-fluid" id="section1">
    <div class="v-center">
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
            <input type="text" name="name" id="name" class="form-control" placeholder="nom" style="width: 80%; margin-left: auto; margin-right: auto;">
            <br/>
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
<script type="text/javascript" language="javascript" class="init">
	$(document).ready(function() {
    	$('#enregistrement').DataTable();
	} );
</script>
    
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript">
function delete_beacon(id)
{
    var base = "<?php echo BASEPATH ?>";
    var stat_url = base + 'index.php/stat/delete_stat?id='+id;
    window.location.replace(stat_url);
}


function go_stat(id)
{
    var base = "<?php echo BASEPATH ?>";
    var stat_url = base + 'index.php/stat/stat_chart/?id='+id;
    window.location.replace(stat_url);
}

</script>