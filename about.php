<center>
	<div class="row">
		<div class="col-md-12">
		    <h1>		
				<br>
				<font size="100"><font color="d9230f">CONNECT</font><font color="000000"> + </font><font color="d9230f">ENGAGE</font><font color="000000"> = </font><font color="d9230f">TRANSFORM</font></font>
			</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
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
	</div>
</center>
