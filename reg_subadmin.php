<?PHP
$con = mysqli_connect("localhost","root","","gar");
	echo '<center>';

	echo '<HTML>
	
<head>
<title>
</title>

</head>
<body>
<table border = 2 >
<tr> 
<th>IDENTITY CARD</th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>PHONE NUMBER</th>



</tr>
<tr>';
$sql = "SELECT * FROM subadmin";

$result = $con->query($sql);

if ($result->num_rows > 0) {
	
	echo 'REGISTERED COMPANY ADMINSTRATORS'.'<br>';
	
	echo '
	<body bgcolor="gold">
	
	'; 
	echo ' </body>' ;
	
 while($row = $result->fetch_assoc()) {
				echo '<td>';
			echo $row["id_number"];
			echo '</td>';
				echo '<td>';
			echo $row["first_name"];
			echo '</td>';
			 		echo '<td>';
			echo $row["last_name"];
			echo '</td>';
					echo '<td>';
			echo $row["phone_number"];
			echo '</td>';
			echo '</tr>';
			
}
			}
?>
