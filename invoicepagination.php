<?php

include("include/database.php");

$per_page = 20; 

if($_GET)
{
$page=$_GET['page'];
}



//get table contents
$start = ($page-1)*$per_page;
$sql = "select * from invoice order by i_id desc limit $start,$per_page";
$rsd = mysql_query($sql);
?>

				<table class="emp_tab">
                <tr class="emp_header">
                <td width="80">In. No</td>
                <td width="250">Client Name</td>
                <td width="160">Date</td>
                <td>Site Address</td>
                <td width="70">Amount</td>
                </tr>
                
        <?php
		
		while($row=mysql_fetch_array($rsd))
		{		
        	echo "<tr class='emp_header'>";
                echo "<td width='70'>";
                echo $row[0];
                echo "</td>";
                echo "<td width='250'>";
                echo $row[2];
                echo "</td>";
                echo "<td width='160'>";
                echo $row[1];
                echo "</td>";
                echo "<td width='500'>";
                echo $row[3];
                echo "</td>";
				echo "<td width='70' class='print'>";
                echo "<a href='report.php?id=$row[0]'>Print</a>";
                echo "</td>";
                echo "</tr>";
                
		}
		?>
        
        
        </table>
