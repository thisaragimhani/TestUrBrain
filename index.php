<?php
session_start();
?>

<html>
<head>
<title>Welcome to TestUrBrain</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-warning">
<?php
include("header.php");
include("database.php");
extract($_POST);

if(isset($submit))
{
	$rs=mysqli_query($con,"select * from user where login='$loginid' and pass='$pass'");
	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION[login]=$loginid;
	}
}
if (isset($_SESSION[login]))
{
echo "<h1 class='text-center bg-danger'>Welcome to TestUrBrain online quiz site!</h1>";
		echo '
<table width="50%" height="150" border="0" align="center">
  <tr>
     <td width="93%" height="50" valign="bottom" bordercolor="#0000FF" style="font-size:25px;font-family:verdana"> <a href="sublist.php" class="style4">Select A Subject for Quiz </a></td>
  	<td width="7%" height="50" valign="bottom"><img src="image/select.JPG" width="80" height="80" align="left"></td>
</tr>
  <tr>
    
    <td width="93%" height="50" valign="bottom" bordercolor="#0000FF"> </td>
  </tr>
  <tr>
    
    <td width="93%"valign="bottom" height="50"> <a href="result.php" class="style4" style="font-size:25px;font-family:verdana">Your Result </a></td>
    <td width="7%" height="50" valign="bottom"><img src="image/result.JPG" width="80" height="80" align="left"></td>
</tr>
</table>';
   	exit;
		

}


?>
<table width="100%" >
  
  <tr>
    <td height="100" valign="top"><div style=text-align:center>
        <h1 class="style8">Welcome to TestUrBrain</h1>
      
<p text-align="left" class="style5">&nbsp;</p>
      <blockquote>
          <p text-align="left" class="style5">
		This Site provides you the quizes for various subject fields. 
            You need to login to the take the online quizes.
	 </p>
      </blockquote>
    </div></td>
    		<table align="center" WIDTH="50%" height="200">
			<h3 style=text-align:center>LOGIN PAGE</h3>
		<form method="post" action="">
			<br>
	
				<tr>
					<th class="text-primary">LOGIN ID</th>
					<th>
					<input class="form-control"type="TEXT" title="Enter your regitered LOGIN ID"  placeholder="LOGIN ID"  maxlength="10" size="25"  id="loginid2" name="loginid"/></tD>
				</th>
				<tr>
					<th class="text-primary">ENTER PASSWORD</th>
					<th><input class="form-control" type="password" name="pass" id="pass2"/></th>
					</tr>
					       <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span></td>
         <th></th>
				<th class="errors">
					<input class="btn btn-danger "type="submit" name="submit" id="submit" Value="Login"/>
				
        <a class="btn btn-success " href="signup.php">Register</a></th>
      </table>
      
    </form></td>
  </tr>
</table>

</body>
</html>
