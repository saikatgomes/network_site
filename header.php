<?php
    if (empty($HOME)) {
        $HOME="http://pages.cs.wisc.edu/~saikat/projects/network_site/";
    }
    $vision_class="";
    $mission_class="";
    $core_class="";
    $team_class="";
    $contact_class="";
    $active_class="class='active'";
    if (!empty($HR_ACTIVE)){
        if(strcmp($HR_ACTIVE,"VISION")==0){
            $vision_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"MISSION")==0){
            $mission_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"CORE")==0){
            $core_class =$active_class;
        } elseif(strcmp($HR_ACTIVE,"TEAM")==0){
            $team_class =$active_class;
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
        <li <?php echo $vision_class?>><a href=<?php echo $HOME."vision.php" ?>>Vision</a></li>
        <li <?php echo $mission_class?>><a href=<?php echo $HOME."mission.php" ?>>Mission</a></li>
        <li <?php echo $core_class?>><a href=<?php echo $HOME."core.php" ?>>Core Values</a></li>
        <li <?php echo $team_class?>><a href=<?php echo $HOME."team.php" ?>>Our Team</a></li>
        <li <?php echo $contact_class?>><a href=<?php echo $HOME."contact.php" ?>>Contact Us</a></li>
      </ul>
	</b>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
