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
        <td width="100">Date</td>
        <td>Emp Name</td>
        <td width="250">Client Name</td>
        <td width="120">Action</td>
        </tr>
      <?php
		
		while($row=mysql_fetch_array($rsd))
		{		
        	echo"<tr class='emp_header'>";
        	echo"<td width='100'>";
			echo $row[1];
			echo"</td>";
			echo"<td>";
			echo '1.'.$row[2].' 2.'.$row[3].' 3.'.$row[4].' 4.'.$row[5].' 5.'.$row[6];
			echo"</td>";
			echo"<td  width='250'>";
			echo $row[7];
			echo"</td>";
			echo "<td width='120' class='print'>";
			echo "<a href='?id_d=$row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='siteupdate.php?id_u=$row[0]'>Update</a>";
			echo "</td>";
			echo"</tr>";
		}
		?>
        </table>
