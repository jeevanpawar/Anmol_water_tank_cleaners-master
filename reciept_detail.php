<?php
	include("include/database.php");
	error_reporting(0);
	$a=$_REQUEST['id'];
	$c_qry_f="select * from reciept where i_id='$a'";
	$c_res_f=mysql_query($c_qry_f);
	if(isset($_REQUEST['can']))
	{
		header("location:amcreport.php");
	}
	
	if(isset($_REQUEST['receipt']))
	{
		$r1=$_POST['r1'];
		header("location:addreciept.php?id=$r1&&id2=$a");
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
		
        <div>
        
        <form action="" method="post">
        
        &nbsp;&nbsp;&nbsp;<select name="r1">
        <?php
		$qry_g="select * from reminder where i_id='$a' GROUP BY r_date";
		$res_g=mysql_query($qry_g);
		while($row_g=mysql_fetch_array($res_g))
		{
			echo "<option>";
			echo  date('d-m-Y', strtotime($row_g[4]));
			echo "</option>";
		}
		?>
        </select>
        
        <input type="submit" name="receipt">
        <br><br>
        <div class="quotation"><center>Reciept Details</center></div>
    	<table class="emp_tab">
        <tr class="menu_header">
        <td width="100">Reciept No</td>
        <td width="120">Date</td>
        <td width="250">Kind Attn</td>
        <td width="250">Comp Name</td>
        <td>Address</td>
        <td width="50">Print</td>
        </tr>
		<?php
		while($row=mysql_fetch_array($c_res_f))
		{
			echo "<tr class='pagi' align='center'>";
			echo "<td>";
			echo $row[0];
			echo "</td>";
			echo "<td>";
			echo date('d-m-Y', strtotime($row[5]));
			echo "</td>";
			echo "<td>";
			echo $row[3];
			echo "</td>";
			echo "<td>";
			echo $row[4];
			echo "</td>";
			echo "<td>";
			echo $row[6];
			echo "</td>";
			echo "<td class='print'>";
			echo "<a href='recieptpdf.php?id=$row[0]&&id2=$a&&d=$row[7]'>Print</a>";
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