<?php
	header("Content-Type: text/plain");
	require_once('utils.php');
	
	const DATA_DIR = 'data/';
	
	$email = getQueryStringParameter('email');

	if ($email !== null && strlen($email) > 0)
	{
		$filename = DATA_DIR . $email . '.txt';
		$data = file_get_contents($filename);
		$data = unserialize($data);

		echo 'First Name: ' . $data['first_name'] . "\n";
		echo 'Last Name: ' . $data['last_name'] . "\n";
		echo 'Email: ' . $data['email'] . "\n";
		echo 'Age: ' . $data['age'] . "\n";
	}
	else
	{
		echo 'Введены некорректные данные';
	}