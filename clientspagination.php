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
include("include/database.php");
error_reporting(0);	

	if(isset($_REQUEST['c_id1']))
	{
		$del=$_REQUEST['c_id1'];
		$c_del="delete from clients where c_id=".$del;
		$c_dres=mysql_query($c_del);
		
		$c_check="delete from checklist where c_id=".$del;
		$c_res=mysql_query($c_check);
		
		if($c_dres)
		{
			header("location:clients.php");
		}
		else
		{
			echo "error";
		}
	}
?>


<?php

$per_page = 20; 

if($_GET)
{
$page=$_GET['page'];

}
	
	$start = ($page-1)*$per_page;
	$c_qry_f="select * from clients order by c_id desc limit $start,$per_page";
	$c_res_f=mysql_query($c_qry_f);
		
?>
        <table class="emp_tab">
        <tr class="menu_header">
        <td width="250">Client Name</td>
        <td width="160">Contact No.</td>
        <td>Site Address</td>
        <td width="100">Checklist</td>
        <td width="100">Action</td>
        </tr>

        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td width='250'>";
		echo $c_row[2]; echo "&nbsp;"; echo $c_row[3];
		echo "</td>";
        echo "<td width='160'>";
		echo $c_row[8];
		echo "</td>";
		echo "<td>";
		echo $c_row[4];
		echo "</td>";
		echo "<td width='100' class='print'>";
		echo "<a href='checklist.php?id_a=$c_row[0]'>Add</a>&nbsp;<a href='viewchecklist.php?id_v=$c_row[0]'>View</a>";
		echo "</td>";
        echo "<td width='100' class='print'>";
		echo "<a href='clientspagination.php?c_id1=$c_row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='updateclients.php?c_id2=$c_row[0]'>Update</a>&nbsp;<a href='clientsview.php?c_id3=$c_row[0]'>View</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
