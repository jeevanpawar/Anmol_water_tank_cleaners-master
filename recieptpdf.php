<?php
error_reporting(0);
include("include/database.php");
$p=$_REQUEST['id'];
$i=$_REQUEST['id2'];
$d=$_REQUEST['d'];
$qry_r="select * from reminder where i_id='$i' and r_date='$d'";
$res_r=mysql_query($qry_r);

$qry1="select * from reciept where r_id='$p'";
$res1=mysql_query($qry1);
$row1=mysql_fetch_array($res1);

$qry2="select * from invoice where i_id='$i'";
$res2=mysql_query($qry2);
$row2=mysql_fetch_array($res2);

$qry3="select * from site where i_id='$i'";
$res3=mysql_query($qry3);
$row3=mysql_fetch_array($res3);

?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anmol Water Tank</title>
<style type="text/css">
.heading
{
	font-size:36px;
	font-family:"MS Serif", "New York", serif;
	text-decoration:underline;
}
.sub_heading
{
	font-size:20px;
	font-family:"MS Serif", "New York", serif;
}
.quotation
{
	font-size:24px;
	font-weight:bold;
	text-decoration:underline;
}
.date
{	
	margin-left:80%;
}
.description ul
{
	border:1px solid #000; 
}
.description ul li
{	
	list-style:none;
	display:inline;
	padding:20px;
}
.report
{
	width:720px;
	margin-top:15px;
}
.report td
{
		border:1px solid #000;
		text-align:center;
		height:25px;
}
.total
{
	width:720px;
}
.total td
{
	
}
.tow
{
	margin-top:-80px;
	padding-top:-75px;
}
.da
{

	margin-left:560px;
}
.add
{
	height:auto;
	width:200px;
}
</style>
</head>
<body>
<br>
<br>
<div class="heading"><center>ANMOL WATER TANK CLEANERS</center></div>
<div class="sub_heading"><center>Shop No 4, Vaibhavlakshmi Appt, Behind Prakash Petrol Pump</center></div>
<div class="sub_heading"><center>Govind Nagar, Nashik-422009</center></div>
<div class="sub_heading"><center>Ph:&nbsp;9970301010 / 9175299779</center></div>
<br><br>
<div class="quotation"><center>Tank Cleaning Service Report</center></div>
<div class="to">
<div class="da">
Rec. No &nbsp;:&nbsp;<label><?php echo $p; ?></label>
<br>
Date&nbsp;:&nbsp;<label><?php echo date('d-m-Y', strtotime($row1[5])); ?></label>
<br>
Invoice Ref. No : <label><?php echo $i; ?></label>
<br>
Date&nbsp;:&nbsp;<label><?php echo $row2[1]; ?></label>
</div>
<div class="tow">
To
<br>
<textarea><?php echo $row1[3]; ?></textarea>
<br>
<textarea><?php echo $row1[4]; ?></textarea>
<br>
<div class="add"><?php echo $row1[6]; ?></div>
<br>
</div>
</div>

<div class="description">
<table class="report">
<tr>
<td>Description</td>
<td width="40">Capacity</td>
<td width="40">Quantity</td>
<td width="40">AMC</td>
<td width="70">Service Done </td>
</tr>
<?php
while($row_d=mysql_fetch_array($res_r))
{
	$qry_des="select * from sub_invoice where des='$row_d[3]' and i_id='$i'";
	$res_des=mysql_query($qry_des);
	$row_des=mysql_fetch_array($res_des);
	
	echo "<tr>";
	echo "<td>";
	echo $row_d[3];
	echo "</td>";
	echo "<td>";
	echo $row_des[3];
	echo "</td>";
	echo "<td>";
	echo $row_des[4];
	echo "</td>";
	echo "<td>";
	echo $row_des[6];
	echo "</td>";
	echo "<td>";
	echo $row_d['r_count'];
	echo "</td>";
	echo "</tr>";
}
?>
</table>
</div>
<br><br>
<div>
Work Done By:
<?php
$row_site=mysql_fetch_array($res_site);
echo "<br>";
echo $row3[2];
echo "<br>";
echo $row3[3];
echo "<br>";
echo $row3[4];
echo "<br>";
echo $row3[5];
echo "<br>";
echo $row3[6];
?>
</div>
<br><br>
<div>

Signature Of Customer:____________________
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
For Anmol Water Tank Cleaners
<br><br>
</div>


<br>



</body>
</html>

<?php
$htmlcontent=ob_get_clean();

include("dompdf/dompdf_config.inc.php");


  $htmlcontent = stripslashes($htmlcontent);
  $dompdf = new DOMPDF();
  $dompdf->load_html($htmlcontent);
  $dompdf->set_paper("folio", "portrait");
  $dompdf->render();
  $dompdf->stream($filename, array("Attachment" => false));	
  exit(0);
?>