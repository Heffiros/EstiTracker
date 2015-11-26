
<html>
  <head>
    <title>EstiTracker</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>vendor/bower/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>app/Stylesheet/style.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
    <meta charset="utf-8" />
  </head>
  <body>
    <nav class="navbar navbar-trans navbar-fixed-top" role="navigation" style="position:relative;">
      <div class="container">
	<div class="navbar-header">
	  <a class="navbar-brand text-danger" href="" style="color: #D6D325;">EstiTracker</a>
	</div>
	<div class="navbar-collapse collapse" id="navbar-collapsible">
	</div>
      </div>
    </nav>
    <div class="row marketing">
      <?php echo $data ?>
    </div>
  </body>
</html>
