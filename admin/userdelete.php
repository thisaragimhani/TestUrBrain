<?php
session_start();
?>
<html>
<head>
<title>TestUrBrain - user delete</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("../database.php");
 $id=$_GET['username'];

$sql=mysqli_query($con,"delete from user where username='$id'");
header('location:login.php');
?>