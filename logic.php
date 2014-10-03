<?php


	


	if(isset($_POST['numwords']))
	{
		$numwords = $_POST['numwords'];
	}
	else
	{
		$numwords = 4;
	}
	if(isset($_POST['includenum']))
	{
		$includenum = $_POST['includenum'];
	}
	else
	{
		$includenum = '0';
	}
	if(isset($_POST['includesymbol']))
	{
		$includesymbol = $_POST['includesymbol'];
	}
	else
	{
		$includesymbol = '0';
	}
	
	
	


	$wordslist = Array(
		'animal',
		'bee',
		'car',
		'door',
		'elephant',
		'frog',
		'game',
		'happy',
		'insect',
		'jelly',
		'kangaroo',
		'light',
		'monster',
		'night',
		'owl',
		'pig',
		'quiz',
		'roof',
		'snow',
		'turtle',
		'umbrella',
		'vulture',
		'walrus',
		'xylophone',
		'yellow',
		'zoo'
		);

	
	if($numwords > 0 && $numwords <= 10)
	{

	}
	else
	{
		$numwords = 4;
	}

	$password = '';
	$tempnum = 0;
	for($i = 0; $i < $numwords; $i++)
	{
		$tempnum = rand(0, count($wordslist) - 1);
		$password = $password.$wordslist[$tempnum];
		array_splice($wordslist, $tempnum, 1);
		if($i < $numwords - 1)
		{
			$password = $password.'-';
		}
	}

	$numcheck = 'unchecked';
	$symbolcheck = 'unchecked';



	
	if($includenum == 'usenum')
	{
		$numcheck = 'checked';
		$password = $password.rand(0, 9);
	}

	if($includesymbol == 'usesymbol')
	{
		$symbolcheck = 'checked';
		$password = $password.'@';
	}



?>