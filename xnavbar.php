<?php
    if (empty($HOME)) {
        $HOME="http://pages.cs.wisc.edu/~saikat/projects/network_site/";
    }
    $vision_class="";
    $home_class="";
    $mission_class="";
    $core_class="";
    $team_class="";
    $active_class="active";
    if (!empty($NAV_ACTIVE)){
        if(strcmp($NAV_ACTIVE,"VISION")==0){
            $vision_class =$active_class;
        } elseif(strcmp($NAV_ACTIVE,"MISSION")==0){
            $mission_class =$active_class;
        } elseif(strcmp($NAV_ACTIVE,"CORE")==0){
            $core_class =$active_class;
        } elseif(strcmp($NAV_ACTIVE,"TEAM")==0){
            $team_class =$active_class;
        } elseif(strcmp($NAV_ACTIVE,"HOME")==0){
            $home_class =$active_class;
        } 
    }
?>


<b>
<div class="list-group">
  <a href="<?php echo $HOME."index.php" ?>" class="list-group-item <?php echo $home_class?>">Home</a>
  <a href="<?php echo $HOME."vision.php" ?>" class="list-group-item <?php echo $vision_class?>">Vision</a>
  <a href="<?php echo $HOME."mission.php" ?>" class="list-group-item <?php echo $mission_class?>">Mission</a>
  <a href="<?php echo $HOME."core.php" ?>" class="list-group-item <?php echo $core_class?>">Core Values</a>
  <a href="<?php echo $HOME."team.php" ?>" class="list-group-item <?php echo $team_class?>">Our Team</a>
</div>
</b>

