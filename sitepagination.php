<?php

include("include/database.php");

$per_page = 1; 

if($_GET)
{
$page=$_GET['page'];
}



//get table contents
$start = ($page-1)*$per_page;
$sql = "select * from site order by s_id limit $start,$per_page";
$rsd = mysql_query($sql);
?>


	<table class="emp_tab">
        <?php
		
		while($row=mysql_fetch_array($rsd))
		{		
        	echo"<tr class='emp_header'>";
        	echo"<td width='150'>";
			echo $row[1];
			echo"</td>";
			echo"<td width='300'>";
			echo $row[2];
			echo"</td>";
			echo"<td>";
			echo $row[3];
			echo"</td>";
			
			echo "<td width='120'>";
			echo "<a href='?id_d=$row[0]'><img src='images/delete.png' height='20' width='20' /></a>&nbsp;<a href='siteupdate.php?id_u=$row[0]'><img src='images/update.png' height='20' width='20' /></a>";
			echo "</td>";
			echo"</tr>";
		}
		?>
        </table>
