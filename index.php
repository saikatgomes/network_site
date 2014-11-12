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

<div class="row" style="height:100%">i
    <div class="col-md-12">
        <div class="row">
		    <div class="col-md-12">
		          <br>
		            <center>
		            <button type="button" class="btn btn-primary btn-lg">About</button>
		            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		            <button type="button" class="btn btn-link btn-lg">Help Desk</button>
		            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		            <button type="button" class="btn btn-link btn-lg">Events</button>
		            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		            <button type="button" class="btn btn-link btn-lg">Fellows</button>
		            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		            <button type="button" class="btn btn-link btn-lg">Partners</button>
		            </center>
		          <br>
		    </div>
        </div>
		
		<div class="row">
		    <div class="col-md-1">
				&nbsp;			
			</div>
		    <div class="col-md-10">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
					</ol>

					<div class="carousel-inner" role="listbox">
						<div class="item active left">
							<br><br><br><br><br><br><br>
							<?php include 'about.php';?>
							<br><br><br><br><br><br><br>
						</div>
						<div class="item next left">
							<br><br><br><br><br><br><br>
							<?php include 'help.php';?>
							<br><br><br><br><br><br><br>
						</div>
						<div class="item">
							<br><br><br><br><br><br><br>
							<?php include 'events.php';?>
							<br><br><br><br><br><br><br>
						</div>
						<div class="item">
							<br><br><br><br><br><br><br>
							<?php include 'fellows.php';?>
							<br><br><br><br><br><br><br>
						</div>
						<div class="item">
							<br><br><br><br><br><br><br>
							<?php include 'partners.php';?>
							<br><br><br><br><br><br><br>
						</div>
					</div>

					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>

					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
		    </div>
		    <div class="col-md-1">
				&nbsp;			
			</div>
        </div>



































  
    </div>
</div>





<!-- bottom -->
<div class="row" style="position:absolute;bottom:0;width:100%">
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
