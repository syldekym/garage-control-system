<?php include("../xampp/library1.php")?>;
<?php
$con=mysqli_connect("localhost","root","","gar");
$con=mysqli_connect("localhost","root","","gar");
date_default_timezone_set('Africa/Nairobi');
$idno=$_POST['idno'];
$password=$_POST['password'];
$sql="SELECT * FROM admin WHERE id_no='$idno' and password='$password'";
$query=mysqli_query($con,$sql);
if(mysqli_num_rows($query)>0)
{

}
else
{
echo "NOT LOGED IN";
header('refresh:1;url=adminlog.html');
}
?>