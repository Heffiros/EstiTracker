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


<form class='col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0' action='' method='POST'>
    <fieldset>
        <div class='form-group'>
            <input type='text' name='beacon_ref' id='beacon_ref' class='form-control' 
            placeholder='reference_estimote' style='width: 80%; margin-left: auto; margin-right: auto;'
            value='<?php echo $estimote['beacon_ref'] ?>' >
        </div>
        <div class='form-group'>
            <input type='text' name='name' id='name' class='form-control' 
            placeholder='nom' style='width: 80%; margin-left: auto; margin-right: auto;'
            value='<?php echo $estimote['name'] ?>'>
            <br/>
        </div>
        <div class='form-group'>
            Estimote Type :
            <select name='type' class='target'>
                <option value='1'
                <?php
                if($estimote['type'] == 1){
                    echo 'selected=selected';
                } ?>
                >1</option>
                <option value='2'
                <?php
                if($estimote['type'] == 2){
                    echo 'selected=selected'; 
                } ?>
                >2</option>
                <option value='3'
                <?php
                 if($estimote['type'] == 3){
                    echo 'selected=selected';
                } ?>
                >3</option>
            </select>
            <br/>
        </div>
        <div class='form-group'>
            <textarea id='editor' name='content' style='display:none;!important visibility :hidden;!important' 
            value="<?php echo $estimote['content'] ?>" ></textarea>
            <br/>
        </div>
        <div class='form-group'>
            <input type='submit'  class='btn btn-primary'/>
        </div>
    </fieldset>
</form>

<script>
    var type = $(".target").val();
    if (type == 3) {
        CKEDITOR.replace('content');        
    }
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

