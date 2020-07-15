<!--admin-->
<style type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>

</style>
<table>
<tr>
    <td width="10%">
     <img border="0" src="h.jpg" align="right" width="100%" height="170" ></td>
  </tr>

</table>
  <Table width="100%">
  <tr>
  <td>
  <?php @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	
<?php
	if(isset($_SESSION['alogin']))
	{
	
	 echo "<h3 class='text-success text-center btn btn-success'>
	 <div align=\"left\"><strong>
	 <a href=\"viewsub.php\">  VIEW SUBJECTS</a>&emsp;&emsp;&emsp;
	 <a href=\"testview.php\"> VIEW TESTS</a>&emsp;&emsp;&emsp;  
	 <a href=\"questiondelete.php\">VIEW QUESTIONS</a>&emsp;&emsp;&emsp;
	 <a href=\"showuser.php\"> VIEW USERS</a>
	</strong>
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	 <strong><a href=\"login.php\">ADMIN HOME</a>&emsp;
	 <a href=\"signout.php\">SIGN OUT</a></strong>&emsp;&emsp;
	 </div></h3>";
	 }
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
		</td>
	
  </tr>
  
</table>
