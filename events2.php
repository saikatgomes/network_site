<center>
	<div class="row">
		<div class="col-md-12">
		    
<?php

	$json_string = 'events2.json';
	$jsondata = file_get_contents($json_string);
	$obj = json_decode($jsondata,true);

	$count = sizeof($obj);
	$event_count=0;

	print("<br>");
	print("<br>");
	print("<br>");
	print("<br>");
	print("<br>");
	print("<br>");
	print("<br>");

	for($i=1; $i<=1; $i++){		
		print("<div class=\"row\"><div class=\"col-md-2\">&nbsp;</div><div class=\"col-md-10\">");
		print("<div class=\"row\">");
		for($j=1; $j<=3; $j++){
			print("<div class=\"col-md-3\">");
			if($event_count<$count){
				$one_event=$obj[$event_count];
				$event_count=$event_count+1;

				print("<div class=\"panel panel-primary\"><div class=\"panel-heading\"><h3 class=\"panel-title\"><b>".$one_event['Date']."</b></h3></div><div class=\"panel-body\">");

				$e_cnt=sizeof($one_event['Event_Name']);
				for($k=0; $k<$e_cnt; $k++){					
					print("<a href=\"".$one_event['Event_Link'][$k]."\">");
    				print("<b>".$one_event['Event_Name'][$k]."</b></a></br>");
    				print($one_event['Event_Details'][$k]."</br></br>");
				}
				print("</div></div>");				
			}else{
				print("something");
			}
			print("</div>");
		}		
	
		print("</div>");
		print("</div><div class=\"col-md-1\">&nbsp;</div></div>");

	}


?>

		</div>
	</div>
</center>
