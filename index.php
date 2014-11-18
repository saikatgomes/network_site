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

<?php
    if (empty($HOME)) {
        $HOME="http://pages.cs.wisc.edu/~saikat/projects/network_site";
    }
    $active_class="active";
    $primary_class="primary";
    $link_class="link";

    $about_class=$link_class;
    $network_class=$link_class;
    $events_class=$link_class;
    $partners_class=$link_class;
    $DRP_class=$link_class;


    $about_slide_class="";
    $network_slide_class="";
    $events_slide_class="";
    $partners_slide_class="";
    $DRP_slide_class="";

	$HR_ACTIVE="";


	if (isset($_GET["ACTIVE"])){
		$HR_ACTIVE=$_GET["ACTIVE"];
	}

    if (!empty($HR_ACTIVE)){
        if(strcmp($HR_ACTIVE,"ABOUT")==0){
            $about_class =$primary_class;
    		$about_slide_class=$active_class;
        } elseif(strcmp($HR_ACTIVE,"NETWORK")==0){
            $network_class =$primary_class;
    		$network_slide_class=$active_class;
        } elseif(strcmp($HR_ACTIVE,"EVENTS")==0){
            $events_class =$primary_class;
    		$events_slide_class=$active_class;
        } elseif(strcmp($HR_ACTIVE,"PARTNERS")==0){
            $partners_class =$primary_class;
    		$partners_slide_class=$active_class;
        } elseif(strcmp($HR_ACTIVE,"DRP")==0){
            $DRP_class =$primary_class;
    		$DRP_slide_class=$active_class;
        } else{
            $about_class =$primary_class;
    		$about_slide_class=$active_class;
        }
    } else {
        $about_class =$primary_class;
    	$about_slide_class=$active_class;
	}
?>


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

        <?php
			include 'menu.php';
		?>
		
		<div class="row">
		    <div class="col-md-1">
				&nbsp;			
			</div>
		    <div class="col-md-10">
				<div id="carousel-main" class="carousel slide" data-ride="carousel" data-interval="false">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-main" data-slide-to="0" class="active btn-primary"></li>
						<li data-target="#carousel-main" data-slide-to="1" class="btn-primary"></li>
						<li data-target="#carousel-main" data-slide-to="2" class="btn-primary"></li>
						<li data-target="#carousel-main" data-slide-to="3" class="btn-primary"></li>
						<li data-target="#carousel-main" data-slide-to="4" class="btn-primary"></li>
					</ol>

					<div class="carousel-inner" role="listbox">
						<div class="item <?php echo $about_slide_class?>" style="height: 600px;">
							<?php include 'about.php';?>
						</div>
						<div class="item <?php echo $events_slide_class?>" style="height: 600px;">
							<?php include 'events.php';?>
						</div>
						<div class="item <?php echo $DRP_slide_class?>" style="height: 600px;">
							<?php include 'drp.php';?>
						</div>
						<div class="item <?php echo $network_slide_class?>" style="height: 600px;">
							<?php include 'fellows.php';?>
						</div>
						<div class="item <?php echo $partners_slide_class?>" style="height: 600px;">
							<?php include 'partners.php';?>
						</div>
					</div>

					<a class="left carousel-control" href="#carousel-main" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>

					<a class="right carousel-control" href="#carousel-main" role="button" data-slide="next">
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
<!-- 
<div class="row" style="position:absolute;bottom:0;width:100%"> -->
<div class="row" style="width:100%">
	<div class="col-md-12">	
		<?php
			include 'bottom.php';
		?>
	</div>	
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap-table-master/src/bootstrap-table.js"></script>
  </body>
</html>
