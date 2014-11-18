<center>
	<div class="row">
		<div class="col-md-12">
		    <h1>		
				Fellows:
			</h1>
		</div>
	</div>

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
