<?php 

	$data = json_decode(file_get_contents("php://input"), true);

	$data = $data["data"];
	
	$suhu = array(
	  array(
	    "value" => "Celcius",
	    "label" => "Celcius"
	  ),
	  array(
	    "value" => "Fahrenheit",
	    "label" => "Fahrenheit"
	  ),
	  array(
	    "value"=> "Reamur",
	    "label" => "Reamur"
	  ),
	  array(
	  	"value" => "Kelvin",
	  	"label" => "Kelvin"
	 ),
	);


	$matauang = [
	  array(
	    "value" => "USD Dollar",
	    "label" => "USD Dollar"
	  ),
	  array(
	    "value" => "BTC Bitcoin",
	    "label" => "BTC Bitcoin"
	  ),
	  array(
	    "value"=> "JPY Yuan",
	    "label" => "JPY Yuan"
	  ),
	  array(
	  	"value" => "IDR Rupiah",
	  	"label" => "IDR Rupiah"
	 ),

	  array(
	  	"value" => "EUR EURO",
	  	"label" => "EUR EURO"
	 ),
	];


	$massa = [
	  array(
	    "value" => "Gram",
	    "label" => "Gram"
	  ),
	  array(
	    "value" => "Ons",
	    "label" => "Ons"
	  ),
	  array(
	    "value"=> "Kilogram",
	    "label" => "Kilogram"
	  ),
	  array(
	  	"value" => "Kuintal",
	  	"label" => "Kuintal"
	 ),

	  array(
	  	"value" => "Ton",
	  	"label" => "Ton"
	 ),
	];


	switch ($data) {
		case 'Massa':
				echo json_encode($massa);
			break;

		case 'Suhu':
				echo json_encode($suhu);
			break;

		default:
				echo json_encode($matauang);
			break;

	}








 ?>