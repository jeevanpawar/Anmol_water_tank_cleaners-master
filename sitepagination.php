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
<?php
error_reporting(0);
include("include/database.php");

$per_page = 20; 

if($_GET)
{
$page=$_GET['page'];
}



//get table contents
$start = ($page-1)*$per_page;
$sql = "select * from site order by s_id desc limit $start,$per_page";
$rsd = mysql_query($sql);
?>

	<table class="emp_tab">
        <tr class="emp_header">
        <td width="50">In No.</td>
        <td colspan="5">Emp Name</td>
        <td width="250">Client Name</td>
        <td width="180">Action</td>
        </tr>
        
      <?php
		
		while($row=mysql_fetch_array($rsd))
		{		
        	echo"<tr class='emp_header'>";
			echo"<td>";
			echo $row[8];
			echo"</td>";
			echo"<td>";
			echo $row[2];
			echo"</td>";
			echo"<td>";
			echo $row[3];
			echo"</td>";
			echo"<td>";
			echo $row[4];
			echo"</td>";
			echo"<td>";
			echo $row[5];
			echo"</td>";
			echo"<td>";
			echo $row[6];
			echo"</td>";
			echo"<td  width='250'>";
			echo $row[7];
			echo"</td>";
			echo "<td width='180' class='print'>";
			echo "<a href='?id_d=$row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='siteupdate.php?id_u=$row[0]'>Update</a>";
			echo "</td>";
			echo"</tr>";
		}
		?>
        </table>
