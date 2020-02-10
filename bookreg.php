<?php
$con=mysqli_connect("localhost","root","","gar");
//localhost- servername, root-username, ""-password, gar=database name
$idno=$_POST['idno'];
$eidno=$_POST['eidno'];
//$ is used to declare variables
//$_POST used to pick values from the form
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$phoneno=$_POST['phoneno'];
$sql="INSERT INTO booked_mechanic(CUSTOMERS_ID,MECHANICS_ID,FIRST_NAME,LAST_NAME,PHONE_NUMBER)values('$idno','$eidno','$fname','$lname','$phoneno')";
if(mysqli_query($con,$sql))
{
	$sql="update mechanicreg set STATUS='SECURED' where id_number='$eidno'";
	if(mysqli_query($con,$sql)){

	}
	else
	{
		echo "notyet";
	}
echo "ENGINEER SECURED SUCCESSFULLY SUCCESSFULY";
header('refresh:0;url=booking.php');
$sql = "SELECT * FROM mechanicreg WHERE id_number='$eidno'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
// Be sure to include the file you've just downloaded
require_once('AfricasTalkingGateway.php');

// Specify your authentication credentials
$username   = "gar13";
$apikey     = "d796904ef902ea2d6dca3e636867ee8baccbc3762d9b0d8f9cf2facb3b44761b";

// Specify the numbers that you want to send to in a comma-separated list 
// Please ensure you include the country code (+254 for Kenya in this case)
echo $row["phone_number"];
$recipient="+254".$row["phone_number"];
    $message=' hello '.$row["first_name"].' you are supposed to help someone repare the car pleas check all the details in the website. ....thank you ';
    
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
    // status is either "Success" or "error message"
    echo " Number: " .$result->number;
    echo " Status: " .$result->status;
    echo " MessageId: " .$result->messageId;
    echo " Cost: "   .$result->cost."\n";
  }
}
catch ( AfricasTalkingGatewayException $e )
{
  echo "Encountered an error while sending: ".$e->getMessage();
}
// DONE!!! 

}}


}
else
{
echo "SOME OF YOUR INFORMATION MIGHT HAVE BEEN USED";
header('refresh:1;url=booking.php');
}



?>