<?php
session_start();
?>

<html>
<head>
<title>TestUrBrain Admin Login </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../quiz.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>

</head>

<body>
<?php
include("header.php");
?>

<h1 style=text-align:center>TestUrBrain Admin Login</h1>
<form name="form1" method="post" action="login.php">
<table class="table table-striped" margin-left="10px">
  
  <tr>
    <td width="163" margin-right="50" margin-left="100" class="style2">Admin Name</td>
    <td width="70"><input class="form-control" name="loginid" type="text" id="loginid"></td>
  </tr>
  <tr>
    <td class="style2">Admin Password</td>
    <td><input class="form-control" name="pass" type="password" id="pass"></td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="style2">&nbsp;</td>
    <td><input class="btn btn-primary" name="submit" type="submit" id="submit" value="Login"></td>
  </tr>

  
</table>

</form>

</body>
</html>
