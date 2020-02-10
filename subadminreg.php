<?php
$con=mysqli_connect("localhost","root","","gar");
//localhost- servername, root-username, ""-password, gar=database name
$idno=$_POST['idno'];
//$ is used to declare variables
//$_POST used to pick values from the form
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$phoneno=$_POST['phoneno'];
$password=$_POST['password'];
$sql="INSERT INTO subadmin(first_name,id_number,last_name,password,phone_number)values('$fname','$idno','$lname','$password','$phoneno')";
if(mysqli_query($con,$sql))
{
echo "REGISTERED SUCCESSFULY";
header('refresh:1;url=index.html');
}
else
{
echo "NOT REGISTERED";
header('refresh:1;url=index.html');
}



?>