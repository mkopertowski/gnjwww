<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../_gfx/favicon.ico">

    <title>Grupa Nurków Jaskiniowych PZA - Strefa GNJ</title>
        
    <!-- Bootstrap core CSS -->
    <link href="../_css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../_css/bootstrap-theme.min.css" rel="stylesheet">

    <link href="../_css/datepicker.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="../_css/strefagnj.css" rel="stylesheet">    
  </head>

  <body role="document">

    <?php if(isset($this->menu)) print($this->menu); ?>
  
    <div class="container theme-showcase" role="main">

	<?php if(isset($this->content)) print($this->content); ?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../_js/bootstrap.min.js"></script>
    <script src="../_js/bootstrap-datepicker.js"></script>    
  </body>
</html>
