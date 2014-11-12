
<?php
    if (empty($HOME)) {
        $HOME="http://pages.cs.wisc.edu/~saikat/projects/network_site/";
    }
    $home_class="";
    $network_class="";
    $events_class="";
    $fellows_class="";
    $doctoralprograms_class="";
    $active_class="class='active'";
    if (!empty($HR_ACTIVE)){
        if(strcmp($HR_ACTIVE,"HOME")==0){
            $home_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"NETWORK_ED")==0){
            $network_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"EVENTS")==0){
            $events_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"FELLOWS")==0){
            $fellows_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"DOCTORAL_PROGRAMS")==0){
            $doctoralprograms_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"CONTACT")==0){
            $contact_class =$active_class;
        }
    }
?>


<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      </ul>
	<b>
      <ul class="nav navbar-nav navbar-right">
        <li <?php echo $network_class?>><a href=<?php echo $HOME."network.php" ?>>NetworkEd</a></li>
        <li <?php echo $events_class?>><a href=<?php echo $HOME."events.php" ?>>Events</a></li>
        <li <?php echo $fellows_class?>><a href=<?php echo $HOME."fellows.php" ?>>Fellows</a></li>
        <li <?php echo $doctoralprograms_class?>><a href=<?php echo $HOME."doc.php" ?>>Doctoral Research Program</a></li>
        <li <?php echo $contact_class?>><a href=<?php echo $HOME."contact.php" ?>>Contact Us</a></li>
      </ul>
	</b>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
