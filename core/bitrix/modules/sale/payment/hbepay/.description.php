<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?
$psTitle = "HB_epay";
$arPSCorrespondence = array(
			"TEST_TRANSACTION" => array(
				"NAME" => "Test transaction",
				"DESCR" => "Indicates whether the transaction should be processed as a test transaction",
				"TYPE" => "SELECT",
				"VALUE" => array(
				  "Y" => array(
					"NAME" => "Yes"),
				  "N" => array(
					"NAME" => "No"))
			),	
			"TERMINAL" => array(
				"NAME" => "Terminal",
				"DESCR" => "",
				"VALUE" => "TERMINAL",
				"TYPE" => "PROPERTY"
			),
			"CLIENTSECRET" => array(
				"NAME" => "Client secret",
				"DESCR" => "",
				"VALUE" => "CLIENTSECRET",
				"TYPE" => ""
			),
			"CLIENTID" => array(
				"NAME" => "Client id",
				"DESCR" => "",
				"VALUE" => "CLIENTID",
				"TYPE" => ""
			),
	);
?>