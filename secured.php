<script src="tcal.js" type="text/javascript"></script>
<script>
function onlyNum(evt) {
  // Usage: onKeyPress="return onlyNum(event)"
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;

  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    var status = 'This field accepts numbers only!';
    alert(status);
    return false;
  }
  var status = '';
  return true;
}
</script>
<script>
function validate(form1,email) {
 
   var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var address = document.forms[form1].elements[email].value;
   if(reg.test(address) == false) {
 
      alert('Invalid Email Address');
      return false;
   }
}
</script>
</head>
<body>

<center>

</div>
<div style="width:480px;height:700px;border:1px #7a7b78 solid;float:left;margin-center:20px ">
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
$sql = "SELECT * FROM mechanicreg where STATUS='SECURED'";

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
