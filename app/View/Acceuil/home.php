<script type="text/javascript" language="javascript" src='<?php echo BASEPATH ?>ckeditor/ckeditor.js'></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<!-- Basepath not working in that peculiar case and i do not want to know why anymore -->
<!-- MODAL CONNETION-->


<script type="text/javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>



<style type="text/css">
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

<h1>Liste des estimotes</h1><br>

<table id="enregistrement" class="display" cellspacing="0" width="90%">
    <thead>
        <tr>
            <th>id Estimote</th>
            <th>Nom de l'Estimote</th>
            <th>Référence Beacon</th>
            <th>Type de l'Estimote</th>
            <th>Date de création de l'Estimote </th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($query as $value) {
                $id = $value['id'];
                $type = $value['type'];
                $beacon_ref = $value['beacon_ref'];
                $created = $value['created'];
                $name = $value['name'];
                $content = $value['content'];
                echo "<tr>";
                    echo "<th> $id </th>"; 
                    echo "<th> $name</th>"; 
                    echo "<th>$beacon_ref</th>"; 
                    echo "<th>$type</th>"; 
                    echo "<th>$created</th>"; 
                    echo "<th><img src='".BASEPATH."app/Media/croix.png' onclick='delete_beacon($id)'></img>
                               <img src='".BASEPATH."app/Media/stat.png' onclick='go_stat($id, $type)'></img>
                               <img src='".BASEPATH."app/Media/edit.png' onclick='modif_beacon($id)'></img>";
                    
                   
                    echo "</th>"; 
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
            <a type="submit" href="<?php echo BASEPATH ?>index.php/email" style="width:212px;" class="btn btn-success btn-lg btn-huge lato" >Envoyer Mail Promo</a>
            <a href="#" style="width:212px;" class="btn btn-default btn-lg btn-huge lato"
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
    
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>

<script>
function delete_beacon(id)
{
    var base = "<?php echo BASEPATH ?>";
    var stat_url = base + 'index.php/stat/delete_stat?id='+id;
    window.location.replace(stat_url);
}


function go_stat(id, type)
{
    var base = "<?php echo BASEPATH ?>";
    var stat_url = base + 'index.php/stat/stat_chart_' + type + '/?id='+id;
    window.location.replace(stat_url);
}

function modif_beacon (id) {
    var base = "<?php echo BASEPATH ?>";
    var stat_url = base + 'index.php/modif/'+id;
    window.location.replace(stat_url);
}

</script>