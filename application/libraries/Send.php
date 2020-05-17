<?php
class Send {

	public function mail($from='no-reply@sophiapolis.fr', $to='sophiapolis.contact@gmail.com', $senderName='', $subject, $mailBody){
		
		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.sendinblue.com/v3/smtp/email",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "POST",
		CURLOPT_POSTFIELDS => "{\"sender\":{\"email\":\"".$from."\"},\"to\":[{\"email\":\"".$to."\",\"name\":\"Guillaume\"}],\"replyTo\":
		{\"email\":\"".$from."\"},\"htmlContent\":\"".$mailBody."\",\"subject\":\"".$subject."\"}",
		CURLOPT_HTTPHEADER => array(
			"accept: application/json",
			"api-key: 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",
			"content-type: application/json"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return "cURL Error #:" . $err;
		} else {
		  return $response;
		}
	}
}
