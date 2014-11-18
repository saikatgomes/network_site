<center>

<br>
<br>


<div class="row">
	<div class="col-md-1">
		&nbsp;
	</div>
	<div class="col-md-10">
	    <?php
			$handle = fopen("network.txt", "r");
			if ($handle) {
				while (($line = fgets($handle)) !== false) {
					print $line;
				}
			} else {
				print "Cannot Find network.txt File ! ";
			} 
			fclose($handle);
		?>
	</div>
	<div class="col-md-1">
		&nbsp;
	</div>
</div>

</center>
