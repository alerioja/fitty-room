<?php

$time = time();

$apikey = 'YQ127V12K4L27NIJJDHO21UXT5ZisoFB0PgTFQkxil3RmZ2jo';
$secret = 'oAawZ6Dr{Y{HXmcx8TzyGaPJEkHVINj}Te2TXjL6';


$query_string = "apikey=" .$apikey;
$resource = "payments/v1/sales";
$body = json_encode([
    'amount' => '10',
    'currency' => 'USD',
    'payment' => [
      'cardNumber' => '4111111111111111',
      'cardExpirationMonth' => '10',
      'cardExpirationYear' => '2019',
    ]
]);

//Hash for x-pay-token

$token = $time.$resource.$query_string.$body;
$hashtoken = "xv2:".$time.":".hash_hmac('sha256', $token, $secret);
// echo "<strong>X-PAY-TOKEN:</strong><br>".$hashtoken. "<br><br>";
$url = "https://sandbox.api.visa.com/cybersource/payments/v1/sales?".$query_string;
// echo "<strong>URL:</strong><br>".$url. "<br><br>";
//Header
$header = (array("X-PAY-TOKEN: ".$hashtoken, "Content-Type: application/json"));
  
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//getting response from server
$response = curl_exec($ch);
if(!$response) {
    die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
}
// echo "<strong>HTTP Status:</strong> <br>".curl_getinfo($ch, CURLINFO_HTTP_CODE). "<br><br>";
curl_close($ch);

$json = json_decode($response);
$json = json_encode($json, JSON_PRETTY_PRINT);
// printf("<pre>%s</pre>", $json);

include 'success.php';

exit();
?>

