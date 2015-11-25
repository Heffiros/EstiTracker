<link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>app/Stylesheet/home.css" />

<section class="container-fluid" id="section1">
    <div class="v-center">
        <h1 class="text-center">Esti Controller</h1>
        <h2 class="text-center lato animate slideInDown">Change It To Say <b>Something</b> Unique</h2>
        <p class="text-center">
            <br>
            <a href="#" style="width:212px;" class="btn btn-default btn-lg btn-huge lato" data-toggle="modal" data-target="#myModal1">Create an acount</a>
            <br>
            <br>
            <a href="#" style="width:212px;" class="btn btn-default btn-lg btn-huge lato" data-toggle="modal" data-target="#myModal">Connect</a>
        </p>
    </div>
  
</section>

<!-- MODAL CONNETION-->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="text-center"><img src="//placehold.it/110" class="img-circle"><br>Login</h2>
            </div>
            <div class="modal-body row">
                <h6 class="text-center">COMPLETE THESE FIELDS TO CONNECT</h6>
                <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0" action="php/connection.php" method="post" >
                    <div class="form-group">
                        <input name="email" type="text" class="form-control input-lg" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control input-lg" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-danger btn-lg btn-block">Connect</button>
                    </div>
                </form>
            </div>
           
        </div>
    </div>
</div>
<!-- Creation--> 
<div id="myModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body row">
                <h6 class="text-center">COMPLETE THESE FIELDS TO SIGN UP</h6>
                <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0" action='' method='POST'>
                <fieldset>
                	<div class="form-group">
                    <?php echo $form->input('mail') ?><br/>
                	</div>
                	<div class="form-group">
                    <?php echo $form->input('password', 'Mot de passe', 'password') ?><i>(taille : 8 a 16 caractères)</i><br/>
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

    <!--scripts loaded here-->
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    <script src="js/scripts.js"></script>