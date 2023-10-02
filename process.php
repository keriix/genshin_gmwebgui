<?php
	$ip = $_POST['ip'];
	$muip = $_POST['muip'];
	$uid = $_POST['uid'];
	$cmd = $_POST['cmd'];
	
	if ($ip == ''){
		$ip = 'host.docker.internal';
	}
	
	if ($muip == ''){
		$muip = '10106';
	}
	
	$url = 'http://' . $ip . ':' . $muip . '/' . 'api?region=dev_docker&ticket=GM&cmd=1116&uid=' . $uid . '&msg=' . urlencode($cmd);
	
	$response = file_get_contents($url);
	
	echo $response;
?>