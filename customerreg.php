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
$sql="INSERT INTO customers(first_name,id_no,last_name,password,telephone_no)values('$fname','$idno','$lname','$password','$phoneno')";
if(mysqli_query($con,$sql))
{
echo "REGISTERED SUCCESSFULY";
header('refresh:1;url=index.html');
}
else
{
echo "NOT REGISTERED";
}



?>