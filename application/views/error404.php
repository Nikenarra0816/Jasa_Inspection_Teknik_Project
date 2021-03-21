<!doctype html>

<html>
  <head>	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>404 Page Not Found</title>
  	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/error.css">
  </head>
  <body>
   <div>
    <img src="<?php echo base_url();?>assets/img/error_404.svg" width="40%" alt="Asri Utama Logo">
		 <h2>Page Not Found</h2>
     <p>Oops , page you’re looking for  was  not found . Please go back to previous page</p>
     <button class="btn-back" onclick="history.back()">Back</button>
   </div>
 </body>
</html>