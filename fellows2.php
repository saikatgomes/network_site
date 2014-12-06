<center>

<br>
<br>


<div class="row">
	<div class="col-md-1">
		&nbsp;
	</div>
	<div class="col-md-1">
        <br>
        <br>
        <br>
        <br>
        <br>
        <img src="img/placeholder.png" align="left" height=325>
	</div>
	<div class="col-md-8">
	    <?php
			$handle = fopen("network2.txt", "r");
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
