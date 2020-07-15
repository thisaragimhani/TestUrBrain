<?php
session_start();
extract($_POST);
extract($_SESSION);
include("database.php");
if($submit=='Finish')
{
	mysqli_query($con,"delete from useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
	unset($_SESSION[qn]);
	header("Location: index.php");
	exit;
}
?>

<html>
<head>
<title>Review Quiz </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
echo "<h1 class=head1> Review Test Question</h1>";

if(!isset($_SESSION[qn]))
{
		$_SESSION[qn]=0;
}
else if($submit=='Next Question' )
{
	$_SESSION[qn]=$_SESSION[qn]+1;
	
}

$rs=mysqli_query($con,"select * from useranswer where sess_id='" . session_id() ."'",$cn) or die(mysqli_error());
mysqli_data_seek($rs,$_SESSION[qn]);
$row= mysqli_fetch_row($rs);
echo "<form name=myfm method=post action=review.php>";
echo "<table width=100% align=center> <tr> <td width=30>&nbsp;<td> <table border=0 align=center>";
$n=$_SESSION[qn]+1;
echo "<tR><td height=100><span class=style2>Question ".  $n .": $row[2]</style>";
echo "<tr><td class=".($row[7]==1?'tans':'style8').">1. $row[3]";
echo "<tr><td class=".($row[7]==2?'tans':'style8').">2. $row[4]";
echo "<tr><td class=".($row[7]==3?'tans':'style8').">3. $row[5]";
echo "<tr><td class=".($row[7]==4?'tans':'style8')." >4. $row[6]";
if($_SESSION[qn]<mysqli_num_rows($rs)-1)
echo "<tr><td height=75 align=center><input type=submit name=submit value='Next Question' ></form>";
else
echo "<tr><td height=75 align=center><input type=submit name=submit value='Finish'></form>";

echo "</table></table>";
?>
