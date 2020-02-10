<?php
$con=mysqli_connect("localhost","root","","gar");
$idno=$_POST['idno'];
$password=$_POST['password'];
$sql="SELECT * FROM customers WHERE id_no='$idno' and password='$password'";
$query=mysqli_query($con,$sql);
if(mysqli_num_rows($query)>0)
{
echo "loged in successfully";
header('refresh:0;url=customerdet1.html');
}
else
{
echo "NOT LOGED IN";
}
?>