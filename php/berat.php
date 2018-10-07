<?php 




	$data = json_decode( file_get_contents("php://input"), true );

	$from = $data["from"];
	$to = $data["to"];
	$input = $data["input"];
	$output = 0;
	$kg = 0;


	switch ($from) {
		case 'gr':
			$kg = 1 / 1000 * $input;
			break;
		
		case 'ons':
			$kg = 1 / 10 * $input;
			break;
		
		case 'kw':
			$kg = 10 * $input;
			break;

		case 'ton':
			$kg = 1000 * $input;
			break;

		default:
			$kg = $input;
			break;
	}


	switch ($to) {
		case 'gr':
			$output = 1000 * $kg;
			break;
		
		case 'ons':
			$output = 10 * $kg;
			break;
		
		case 'kw':
			$output = 1 / 10 * $kg;
			break;

		case 'ton':
			$output = 1 / 1000 * $kg;
			break;

		default:
			$output = $kg;
			break;
	}



	echo json_encode($output);






 ?>