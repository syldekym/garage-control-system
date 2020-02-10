<?php
$con=mysqli_connect("localhost","root","","gar");
date_default_timezone_set('Africa/Nairobi');
$date=date('Y-m-d H:i:s');
if(new DateTime()>new DateTime("2019-11-04 7:19:50")){
	echo 'system crushed make subcription before you proceed thank you.';
	require_once('AfricasTalkingGateway.php');

// Specify your authentication credentials
$username   = "gar12";
$apikey     = "58f12506724e42d5502a5890c3205a95f00a5d1f3730659c22f3ed314bd1b224";

// Specify the numbers that you want to send to in a comma-separated list 
// Please ensure you include the country code (+254 for Kenya in this case)
$recipient="+254707976754";
    $message='  hello paul GUARAGE SYSTEM has crushed you have to unlock it ';
    
// Create a new instance of our awesome gateway class
$gateway    = new AfricasTalkingGateway($username, $apikey);

/*************************************************************************************
  NOTE: If connecting to the sandbox:

  1. Use "sandbox" as the username
  2. Use the apiKey generated from your sandbox application
     https://account.africastalking.com/apps/sandbox/settings/key
  3. Add the "sandbox" flag to the constructor

  $gateway  = new AfricasTalkingGateway($username, $apiKey, "sandbox");
**************************************************************************************/

// Any gateway error will be captured by our custom Exception class below, 
// so wrap the call in a try-catch block

try 
{ 
  // Thats it, hit send and we'll take care of the rest. 
  $results = $gateway->sendMessage($recipient, $message);
			
  foreach($results as $result) {
    // status is either "Success" or "err
    echo "";
  }
}
catch ( AfricasTalkingGatewayException $e )
{
  echo "";
}

}
else
{
	header('refresh:0;url=admindet.html');
}

?>