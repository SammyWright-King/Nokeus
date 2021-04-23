<?php
	ob_start();	
	echo '
		<figure style="text-align:center">
			<img src="intro.png" style="width:80%;margin-top:20vh" />
		</figure>';
	header( "refresh:1;url=home.php" );

?>