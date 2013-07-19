<?php
error_reporting(0);
include("include/database.php");
$a=date('Y-m-d');
$b=date('Y-m-d', strtotime("+1 days"));
$c=date('Y-m-d', strtotime("+4 days"));
$d=date('Y-m-d', strtotime("+8 days"));
$qry_1="select * from reminder where r_date='$a'";
$res_1=mysql_query($qry_1);
$qry_2="select * from reminder where r_date='$b'";
$res_2=mysql_query($qry_2);
$qry_4="select * from reminder where r_date='$c'";
$res_4=mysql_query($qry_4);
$qry_8="select * from reminder where r_date='$d'";
$res_8=mysql_query($qry_8);
?>
<html>
<head>
<title>Anmol Water Tank Cleners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="styles2.css" type="text/css" />

<link rel="stylesheet" href="styles2.css" type="text/css" />
</head>

<body onLoad="setInterval('window.location.reload()', 10000);">
<div id="container">
    <div id="sub-header">
	
    <?php
	include("header.php");
	?>
    
    	<br />
		<div class="quotation"><center>Anmol Water Tank : Reminders</center></div>
        <table class="emp_tab">
        <tr class="menu_header">
        <td width="70">In.No.</td>
        <td width="350">Client Name</td>
        <td>Description</td>
        <td width="150">Actual Date</td>
        <td width="80">After</td>
        <td width="80">Update</td>
        </tr>
        <?php
			while($row_1=mysql_fetch_array($res_1))
			{
				echo"<tr class='pagi'>";
				echo "<td>";
				echo $row_1[1];
				echo "</td>";
				echo "<td>";
				echo $row_1[2];
				echo "</td>";
				echo "<td>";
				echo $row_1[3];
				echo "</td>";
				echo "<td>";
				echo date('d-m-Y', strtotime($row_1[4]));
				echo "</td>";
				echo "<td class='today'>";
				echo "<a href=''> &nbsp;Today&nbsp; </a>";
				echo "</td>";
				echo "<td class='print'>";
				echo "<a href='r_update.php?id=$row_1[0]'>Update</a>";
				echo "</td>";
				echo"</tr>";
			}
		?>
        <?php
			while($row_2=mysql_fetch_array($res_2))
			{
				echo"<tr class='pagi'>";
				echo "<td>";
				echo $row_2[1];
				echo "</td>";
				echo "<td>";
				echo $row_2[2];
				echo "</td>";
				echo "<td>";
				echo $row_2[3];
				echo "</td>";
				echo "<td>";
				echo date('d-m-Y', strtotime($row_2[4]));
				echo "</td>";
				echo "<td class='tomarrow'>";
				echo "<a href=''>1 Day's</a>";
				echo "</td>";
				echo "<td class='print'>";
				echo "<a href='r_update.php?id=$row_2[0]'>Update</a>";
				echo "</td>";
				echo"</tr>";
			}
		?>
		<?php
			while($row_4=mysql_fetch_array($res_4))
			{
				echo"<tr class='pagi'>";
				echo "<td>";
				echo $row_4[1];
				echo "</td>";
				echo "<td>";
				echo $row_4[2];
				echo "</td>";
				echo "<td>";
				echo $row_4[3];
				echo "</td>";
				echo "<td>";
				echo date('d-m-Y', strtotime($row_4[4]));
				echo "</td>";
				echo "<td class='fourth'>";
				echo "<a href=''>4 Day's</a>";
				echo "</td>";
				echo "<td class='print'>";
				echo "<a href='r_update.php?id=$row_4[0]'>Update</a>";
				echo "</td>";
				echo"</tr>";
			}
		?>
        <?php
			while($row_8=mysql_fetch_array($res_8))
			{
				echo"<tr class='pagi'>";
				echo "<td>";
				echo $row_8[1];
				echo "</td>";
				echo "<td>";
				echo $row_8[2];
				echo "</td>";
				echo "<td>";
				echo $row_8[3];
				echo "</td>";
				echo "<td>";
				echo date('d-m-Y', strtotime($row_8[4]));
				echo "</td>";
				echo "<td class='eight'>";
				echo "<a href=''>8 Day's</a>";
				echo "</td>";
				echo "<td class='print'>";
				echo "<a href='r_update.php?id=$row_8[0]'>Update</a>";
				echo "</td>";
				echo"</tr>";
			}
		?>
        </table>
        
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
