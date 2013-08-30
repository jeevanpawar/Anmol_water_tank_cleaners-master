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
        <tr class="menu_header">
        <td width="50">In No.</td>
        <td width="200">Emp Assign</td>
        <td width="250">Kind Attn I</td>
        <td width="250">Kind Attn II</td>
        <td width="250">Company Name</td>
        <td width="180">Action</td>
        </tr>
        
      <?php
		
		while($row=mysql_fetch_array($rsd))
		{		
        	echo "<tr class='pagi'>";
			echo"<td>";
			echo $row[8];
			echo"</td>";
			echo"<td>";
			echo "<select >";
			echo "<option>";
			echo $row[2];
			echo "</option>";
			echo "<option>";
			echo $row[3];
			echo "</option>";
			echo "<option>";
			echo $row[4];
			echo "</option>";
			echo "<option>";
			echo $row[5];
			echo "</option>";
			echo "<option>";
			echo $row[6];
			echo "</option>";
			echo "</select>";
			echo"</td>";
			echo"<td>";
			echo $row[7];
			echo"</td>";
			echo"<td>";
			echo $row[9];
			echo"</td>";
			
			echo"<td  width='250'>";
			echo $row[10];
			echo"</td>";
			echo "<td width='180' class='print'>";
			echo "<a href='?id_d=$row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='siteupdate.php?id_u=$row[0]'>Update</a>";
			echo "</td>";
			echo"</tr>";
		}
		?>
        </table>
