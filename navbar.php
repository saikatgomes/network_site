<?php
    if (empty($HOME)) {
        $HOME="http://pages.cs.wisc.edu/~saikat/projects/network_site/";
    }
    $home_class="";
    $network_class="";
    $events_class="";
    $fellows_class="";
    $doctoralprograms_class="";
    $active_class="active";
    if (!empty($NAV_ACTIVE)){
        if(strcmp($NAV_ACTIVE,"HOME")==0){
            $home_class =$active_class;
        } elseif(strcmp($NAV_ACTIVE,"NETWORK_ED")==0){
            $network_class =$active_class;
        } elseif(strcmp($NAV_ACTIVE,"EVENTS")==0){
            $events_class =$active_class;
        } elseif(strcmp($NAV_ACTIVE,"FELLOWS")==0){
            $fellows_class =$active_class;
        } elseif(strcmp($NAV_ACTIVE,"DOCTORAL_PROGRAMS")==0){
            $doctoralprograms_class =$active_class;
        }
    }
?>

<b>
<div class="list-group">
  <a href="#" class="list-group-item <?php echo $home_class?>">Home</a>
  <a href="#" class="list-group-item <?php echo $network_class?>">NetworkEd</a>
  <a href="#" class="list-group-item <?php echo $events_class?>">Events</a>
	<br>
  <a href="#" class="list-group-item <?php echo $fellows_class?>">Fellows</a>
	<br>
  <a href="#" class="list-group-item <?php echo $doctoralprograms_class?>">Doctoral Research Program</a>
</div>
</b>

