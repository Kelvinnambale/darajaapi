<?php
//YOU MPESA API KEYS
$consumerKey = "7VeheFSFJrqzPVOwPg6ABIKR6zhRx8n9QtWs2H6GTvzssXH1"; //Fill with your app Consumer Key
$consumerSecret = "xslSx9pfoO0CZ3y2sLvAzLJ0Tb7ikxCz4XfEAvuCE1mA57sk9Q8UVuDTxonq2Je4"; //Fill with your app Consumer Secret
//ACCESS TOKEN URL
$access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentialsgit';
$headers = ['Content-Type:application/json; charset=utf8'];
$curl = curl_init($access_token_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_HEADER, FALSE);
curl_setopt($curl, CURLOPT_USERPWD, $consumerKey . ':' . $consumerSecret);
$result = curl_exec($curl);
$status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$result = json_decode($result);
echo $access_token = $result->access_token;
curl_close($curl);

