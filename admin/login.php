<?php
session_start();
error_reporting(1);
?>

<html>
<head>
<title>Admin Home page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>

<body >
<?php
include("header.php");
include("../database.php");
extract($_POST);
if(isset($submit))
{
	$rs=mysqli_query($con,"select * from admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysqli_error());
	if(mysqli_num_rows($rs)<1)
	{
		echo "<BR><BR><BR><BR><div class=head1> Insert valid User Name or Password<br>
		<a href='index.php'>Click here to login again </a>
		<div>";
	
		echo "<script>window.location='index.php'</script>";		
	}
	else
	{
	echo "<script>window.location='login.php'</script>";			
	$_SESSION['alogin']="true";
	}
}
else if(!isset($_SESSION[alogin]))
{
	echo "<BR><BR><BR><BR><div class=head1> Your are not logged in<br> Please <a href=index.php>Login</a><div>";
		exit;
}

		echo"<h1 style=text-align:center><br>This is Restricted to Administrator only.<br><br> Welcome!</h1>";	
		


?>



</body>
</html>
