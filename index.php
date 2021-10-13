<?php
	echo "Siamo solo noi<br>";
	echo "Forse.... - Trigger<br>";
	echo "Forse.... - Trigger<br>";
	echo "Effetto demo Wally<br>";

	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_PORT, 2424 );
	curl_setopt( $ch, CURLOPT_TIMEOUT, 400 );
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, TRUE );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );

	$report=curl_getinfo($ch);
	print_r($report);
	$result = curl_exec($ch);
	curl_close($ch);
	echo $result;

  	echo curl_error($ch);

?>
