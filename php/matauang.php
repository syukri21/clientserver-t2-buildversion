<?php


function toUSD($matauang, $input)
{

	$hasil = 0;

	switch ($matauang) {
		case 'IDR':
			$hasil =  1 / 15000 * $input;
			break;
		
		case 'BTC':
			$hasil =  6587 * $input;
			break;

		case 'JPY':
			$hasil =  0.00878 * $input;
			break;

		case 'EUR':
			$hasil =  1.150573 * $input;
			break;

		default:
			$hasil = 1 * $input;
			break;
	}

    return $hasil;
}

function fromUSD($matauang, $input)
{

	$hasil = 0;
	switch ($matauang) {
		case 'IDR':
			$hasil =   15000 * $input;
			break;
		
		case 'BTC':
			$hasil =  1 /  6587 * $input;
			break;

		case 'JPY':
			$hasil =  1 / 0.00878 * $input;
			break;

		case 'EUR':
			$hasil =  1 / 1.150573 * $input;
			break;

		default:
			$hasil = 1 / 1 * $input;
			break;
	}


    return $hasil;

}


$data = json_decode(file_get_contents('php://input'), true);



$usd = toUSD($data["from"], $data["input"]);
$to = fromUSD($data["to"], $usd);

echo json_encode(number_format($to, 5));

