<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?
$iTestTransaction = CSalePaySystemAction::GetParamValue("TEST_TRANSACTION");
?>
<table border="0" cellspacing="0" cellpadding="1" width="100%"><tr><td class="tableborder">
<table border="0" cellpadding="3" cellspacing="0" width="100%">
	<tr>
		<td align="center" class="tablebody" colspan="2">
			<font class="tablebodytext">
			<form method="post" action="">
			<input type="submit" value="Submit to hb_epay for Payment Now" class="btn btn-primary" name="call_hb_redirect">
			</form>
			</font>
		</td>
	</tr>
</table>
</td></tr></table>
<?
	if(array_key_exists('call_hb_redirect', $_POST)){
   		hb_redirect();
}

	function hb_redirect(){

		  $test_url = "https://testoauth.homebank.kz/epay2/oauth2/token";
		  $prod_url = "https://epay-oauth.homebank.kz/oauth2/token";
		  $test_page = "https://test-epay.homebank.kz/payform/payment-api.js";
		  $prod_page = "https://epay.homebank.kz/payform/payment-api.js";

		  $err_exist = false;
		  $err = "";

		  $hbp_env = htmlspecialcharsbx(CSalePaySystemAction::GetParamValue("TEST_TRANSACTION"));
		  $hbp_client_id = htmlspecialcharsbx(CSalePaySystemAction::GetParamValue("CLIENTID"));
		  $hbp_client_secret = htmlspecialcharsbx(CSalePaySystemAction::GetParamValue("CLIENTSECRET"));
		  $hbp_terminal = htmlspecialcharsbx(CSalePaySystemAction::GetParamValue("TERMINAL"));
		  $hbp_back_link = "http://" . SITE_SERVER_NAME . "/hbepay_resultpage/success.php";
		  $hbp_failure_back_link = "http://" . SITE_SERVER_NAME . "/hbepay_resultpage/failed.php";

		  $hbp_amount = htmlspecialcharsbx($GLOBALS["SALE_INPUT_PARAMS"]["ORDER"]["SHOULD_PAY"]);
		  $hbp_invoice_id = '3060410' . IntVal($GLOBALS["SALE_INPUT_PARAMS"]["ORDER"]["ID"]);
		  $hbp_currency = htmlspecialcharsbx($GLOBALS["SALE_INPUT_PARAMS"]["ORDER"]["CURRENCY"]);
		  $hbp_description = "Pay via HB payment gateway";

		  $hbp_account_id = "";
		  $hbp_telephone = "";
		  $hbp_email = "";
		  $hbp_language = "RU";

		  $hbp_post_link = "";
		  $hbp_failure_post_link = "";

		  if ($hbp_env == 'Y') {
			$token_api_url = $test_url;
			$pay_page = $test_page;
		  } else if($hbp_env == 'N') {
			$token_api_url = $prod_url;
			$pay_page = $prod_page;
		  }

		// initiate environment

		  $fields = [
			'grant_type'      => 'client_credentials', 
			'scope'           => 'payment usermanagement',
			'client_id'       => $hbp_client_id,
			'client_secret'   => $hbp_client_secret,
			'invoiceID'       => $hbp_invoice_id,
			'amount'          => $hbp_amount,
			'currency'        => $hbp_currency,
			'terminal'        => $hbp_terminal,
			'postLink'        => $hbp_post_link,
			'failurePostLink' => $hbp_failure_post_link
		  ];

		  // build query for request
		  $fields_string = http_build_query($fields);

		  // open connection
		  $ch = curl_init();

		  // set the option
		  curl_setopt($ch, CURLOPT_URL, $token_api_url);
		  curl_setopt($ch, CURLOPT_POST, true);
		  curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 

		  // execute post
		  $result = curl_exec($ch);

		  $json_result = json_decode($result, true);
		  if (!curl_errno($ch)) {
			switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
			  case 200:
				$hbp_auth = (object) $json_result;

				$hbp_payment_object = (object) [
				  "invoiceId" => $hbp_invoice_id,
				  "backLink" => $hbp_back_link,
				  "failureBackLink" => $hbp_failure_back_link,
				  "postLink" => $hbp_post_link,
				  "failurePostLink" => $hbp_failure_post_link,
				  "language" => $hbp_language,
				  "description" => $hbp_description,
				  "accountId" => $hbp_account_id,
				  "terminal" => $hbp_terminal,
				  "amount" => $hbp_amount,
				  "currency" => $hbp_currency,
				  "auth" => $hbp_auth,
				  "phone" => $hbp_telephone,
				  "email" => $hbp_email
				];
				?>
				  <script src="<?=$pay_page?>"></script>
				  <script>
					halyk.pay(<?= json_encode($hbp_payment_object) ?>);
				  </script>
				<?
				break;
			  default:
				echo 'Неожиданный код HTTP: ', $http_code, "\n";
			}
		  }
	}
?>