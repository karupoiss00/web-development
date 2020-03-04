<?php
	header("Content-Type: text/plain");
	require_once('utils.php');
	
	const DATA_DIR = 'data/';
	
	$firstName = getQueryStringParameter('first_name');
	$lastName = getQueryStringParameter('last_name');
	$email = getQueryStringParameter('email');
	$age = getQueryStringParameter('age');
	
	if ($email !== null)
	{
		$filename = DATA_DIR . $email . '.txt';
		$data = array(
		  'first_name' => $firstName,
		  'last_name' => $lastName,
		  'email' => $email,
		  'age' => $age,
		);
		$data = serialize($data);
		
		if (!file_exists(DATA_DIR)) 
		{
			mkdir(DATA_DIR, 0777, true);
		}
		
		file_put_contents($filename, $data);
	}
	else
	{
		echo 'Введены некорректные данные';
	}