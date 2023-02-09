<?php 
	
	$out = array();
	foreach (glob('.apk') as $filename) {
		$p = pathinfo($filename);
		$out[] = $p['filename'];
	}

	echo json_encode($out); 
	
	echo 'test' ?>