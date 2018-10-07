<?php 


$data = json_decode(file_get_contents("php://input"), true);

$from = $data["from"];
$to = $data["to"];
$input = $data["input"];

// default C
$c = 0;
$output = 0;


switch ($from) {
	case 'F':
		$c = ($input - 32) / 1.8; 
		break;

	case 'K':
		$c =  $input - 273.15; 
 		break;
	case "R":
		$c = $input / 0.8;
		break;
	default:
		$c = $input;
		break;
}


switch ($to) {
	case 'F':
		$output = $c + 32 * 1.8; 
		break;

	case 'K':
		$output =  $c + 273.15; 
 		break;
	case "R":
		$output = $c * 0.8;
		break;
	default:
		$output = $c;
		break;
}


echo json_encode($output);



 ?>