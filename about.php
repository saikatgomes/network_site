
<div class="row">
	<div class="col-md-1">
		&nbsp;
	</div>
	<div class="col-md-10">
	    <h1>		
			<center>
			<br>
			<b>
			<font size="100"><font color="d9230f">CONNECT</font><font color="000000"> + </font><font color="d9230f">ENGAGE</font><font color="000000"> &#8594; </font><font color="d9230f">TRANSFORM</font></font>
			</b>
			</center>
		</h1>
	</div>
	<div class="col-md-1">
		&nbsp;
	</div>
</div>

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

