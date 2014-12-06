

<div class="row">
	<div class="col-md-2">
		&nbsp;
	</div>
	<div class="col-md-8">
	    <?php
			$handle = fopen("about.txt", "r");
			if ($handle) {
				while (($line = fgets($handle)) !== false) {
					print $line;
				}
			} else {
				print "HELLO THERE!!!";
			} 
			fclose($handle);
		?>
	</div>
	<div class="col-md-2">
		&nbsp;
	</div>
</div>

