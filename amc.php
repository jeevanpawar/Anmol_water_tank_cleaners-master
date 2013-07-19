<?php
	include("include/database.php");
	error_reporting(0);
	$a=$_REQUEST['id'];
	$c_qry_f="select * from reminder where i_id='$a'";
	$c_res_f=mysql_query($c_qry_f);

	if(isset($_REQUEST['can']))
	{
		header("location:amcreport.php");
	}
?>

<html>
<head>

<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="styles2.css" type="text/css" />

</head>

<body>
<div id="container">
    <div id="sub-header">
	
    <?php
	include("header.php");
	?>
<br />
		<div class="quotation"><center>Clients AMC Details</center></div>
        <div>
        
		<form action="" method="post">
        <table class="emp_tab">
        <tr class="menu_header">
        <td width="955">Description</td>
        <td width="150">Date</td>
        <td width="90">Update</td>
        </tr>
        
      	
		<?php
		
		while($row=mysql_fetch_array($c_res_f))
		{
			echo "<tr class='pagi'>";
			echo "<td>";
			echo $row[3];
			echo "</td>";
			echo "<td>";
			$date=$row[4];
			echo date('d-m-Y', strtotime("$date"));
			echo "</td>";
			echo "<td class='print'>";
			echo "<a href='amc_update.php?id=$row[0]'>Update</a>";
			echo "</td>";
			echo "</tr>";
			
		}
		?> 
        </table>
        <br>
        </form>
        </div>
    </div>
    </div>
        
    
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
