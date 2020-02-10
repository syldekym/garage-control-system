<script src="tcal.js" type="text/javascript"></script>

</head>
<body>

<center>

</div>
<div style="width:480px;height:700px;border:1px #7a7b78 solid;float:center;margin-left:20px ">
<br/>
<div style="width:460px; background-color:#b0c248;border:1px #b0c248 solid;border-top-right-radius:8px;border-top-left-radius:8px;
border-bottom-right-radius:8px;border-bottom-right-radius:8px">


<div style="width:400px;background-color:#c8d384;border:1px #ebf5ac solid;border-top-right-radius:8px;border-top-left-radius:8px;
border-bottom-right-radius:8px;border-bottom-left-radius:8px; ">
</div>

</html>
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
$sql = "SELECT * FROM mechanicreg";

$result = $con->query($sql);

if ($result->num_rows > 0) {
	
	echo 'REGISTERED MECHANICS'.'<br>';
	
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
