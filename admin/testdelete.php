<?php
session_start();
?>
<html>
<head>
<title>TestUrBrain - Delete test</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("../database.php");
 $id=$_GET['test_id'];

$sql=mysqli_query($con,"delete from test where test_id='$id'");
header('location:testview.php');
?>