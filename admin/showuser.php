<?php
session_start();
?>
<html>
<head>
<title>TestUrBrain -show user</title>
<link href="../quiz.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>
<?php
include("header.php");
include("../database.php");
{

		$sql=mysqli_query($con,"Select * From user");	
		echo "<table class='table table-striped'>";
		echo"<h1 style=text-align:center>Registered User Detail</h1>";
		echo "<tr>
		<th class='text-primary'>UserID</th>
				<th class='text-primary'>Name</th>
	<th class='text-primary'>Email</th>
	<th class='text-primary'>Delete User</th></tR>";
	
	while($result=mysqli_fetch_assoc($sql))
	{
	$id=$result['username'];
	
	echo "<tr>";	
	echo "<td>".$result['login']. "</td>";
	echo "<td>".$result['username']."</td>";
	echo "<td>".$result['email']."</td>";
	
	echo "<td><a href='userdelete.php?username=$id'><span class='glyphicon glyphicon-trash'></span></a></td>";
	echo "</tr>";
	echo"</div>";
	}
	echo "</table>";
		
}

?>