<!--adminheader-->
<style type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css"/>

</style>
<table>
<tr>
    <td width="10%">
     <img src="h.jpg" width="100%" height="180" ></td>
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
	if(isset($_SESSION['login']))
	{
   echo "<h3 class='text-success text-center btn btn-success'><div 
            align=\"right\"><strong>&emsp;&emsp;&emsp;
            <a href=\"index.php\"> Home &emsp;&emsp;&emsp; </a>
            <a href=\"signout.php\">Signout</a></strong></div></h3>";
   }
   
		 else
	 {
	 	echo "&nbsp;";
	 }
	?>
		</td>
	
  </tr>
  
</table>

  
	