<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Network - Wisconsin Collaboraitive Education Research</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<!-- top banner -->	
<div class="row">
	<div class="col-md-12">	
		<?php
			include 'banner.php';
		?>
	</div>	
</div>

<!-- body -->
<div class="row">
	<div class="col-md-3">	
		<!-- nav bar -->
		<?php
			$HOME="";
			$NAV_ACTIVE=""; #EDIT THIS: values: HOME, NETWORK_ED, EVENTS, FELLOWS, DOCTORAL_PROGRAMS
			include 'navbar.php';
		?>
	</div>	
	<div class="col-md-9">	
		<!-- top nav bar --> 
		<div class="row">
			<div class="col-md-12">	
				<?php
					$HOME="";
					$HR_ACTIVE="";  #EDIT THIS: values: VISION, MISSION, CORE, TEAM, CONTACT
					include 'header.php';
				?>
			</div>	
		</div>
		<!-- main body -->
		<div class="row">
			<div class="col-md-12">	
				<center>
					SOME STUFF HERE
				</center>
			</div>	
		</div>
	</div>	
</div>

<!-- bottom -->
<div class="row">
	<div class="col-md-12">	
		<?php
			include 'bottom.php';
		?>
	</div>	
</div>





<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55710269-1', 'auto');
  ga('send', 'pageview');
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap-table-master/src/bootstrap-table.js"></script>
  </body>
</html>
