<?php include("../xampp/library3.php")?>;
<?php
$con=mysqli_connect("localhost","root","","gar");
$idno=$_POST['idno'];
$password=$_POST['password'];
$sql="SELECT * FROM subadmin WHERE id_number='$idno' and password='$password'";
$query=mysqli_query($con,$sql);
if(mysqli_num_rows($query)>0)
{

}
else
{

}
?>