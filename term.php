<?php
	include("include/database.php");
	$e_qry_f="select * from terms";
	$e_res_f=mysql_query($e_qry_f);
?>
<html>
<head>
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="styles2.css" type="text/css" />


<script type="text/javascript">
function confirmSubmit()
{
var agree=confirm("Are you sure to Delete this Entry?");
if (agree)
	return true ;
else
	return false ;
}

</script>
</head>

<body>
<div id="container">
    <div id="sub-header">
	
    <?php
	include("header.php");
	?>
<br />
		<div class="quotation"><center>Terms and Conditions</center></div>
        <div>
        <table class="emp_tab">
        <tr class="menu_header">
        <td width="50">T.No.</td>
        <td>Terms & Conditions</td>
        <td width="100">Action</td>        
        </tr>
        
        <?php
		while($e_row=mysql_fetch_array($e_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td width='50'>";
		echo $e_row[0];
		echo "</td>";
        echo "<td>";
		echo $e_row[1];
		echo "</td>";
        echo "<td width='100' class='print'>";
		echo "<a href='updateterm.php?e_id2=$e_row[0]'>Update</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
      
        </table>
        
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
