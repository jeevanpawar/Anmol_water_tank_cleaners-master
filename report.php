<?php
include("include/database.php");

$p=$_REQUEST['id'];

$qry="select * from quotation where q_id=".$p;
$res=mysql_query($qry);
$row=mysql_fetch_array($res);
?>
<?php

$term="select * from terms";
$term_res=mysql_query($term);

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
<div class="quotation"><center>QUOTATION FOR AMC</center></div>
<div class="date">Date&nbsp;:&nbsp;<label><?php echo $row[1]; ?></label></div>
<div class="date">Quo No : <label><?php echo $row[0]; ?></label></div>
<div>To</div>
<div><textarea>Name:<br><?php echo $row[2]; ?></textarea></div>
<br><br>
<div>Kind Attn : <label><?php echo $row[4]; ?></label></div>
<br>
<div>Mob No : <label><?php echo $row[5]; ?></label></div>

<div class="description">
<table class="report">
<tr>
<td>Description</td>
<td>Capacity</td>
<td>Quantity</td>
<td>Rate</td>
<td>Service In Year</td>
<td>Amount</td>
</tr>
<tr>
<td><?php echo $row[6]; ?></td>
<td><?php echo $row[13]; ?></td>
<td><?php echo $row[20]; ?></td>
<td><?php echo $row[27]; ?></td>
<td><?php echo $row[34]; ?></td>
<td><?php echo $row[41].' /-'; ?></td>
</tr>
<tr>
<td><?php echo $row[7]; ?></td>
<td><?php echo $row[14]; ?></td>
<td><?php echo $row[21]; ?></td>
<td><?php echo $row[28]; ?></td>
<td><?php echo $row[35]; ?></td>
<td><?php echo $row[42].' /-'; ?></td>
</tr>
<tr>
<td><?php echo $row[8]; ?></td>
<td><?php echo $row[15]; ?></td>
<td><?php echo $row[22]; ?></td>
<td><?php echo $row[29]; ?></td>
<td><?php echo $row[36]; ?></td>
<td><?php echo $row[43].' /-'; ?></td>
</tr>
<tr>
<td><?php echo $row[9]; ?></td>
<td><?php echo $row[16]; ?></td>
<td><?php echo $row[23]; ?></td>
<td><?php echo $row[30]; ?></td>
<td><?php echo $row[37]; ?></td>
<td><?php echo $row[44].' /-'; ?></td>
</tr>
<tr>
<td><?php echo $row[10]; ?></td>
<td><?php echo $row[17]; ?></td>
<td><?php echo $row[24]; ?></td>
<td><?php echo $row[31]; ?></td>
<td><?php echo $row[38]; ?></td>
<td><?php echo $row[45].' /-'; ?></td>
</tr>
<tr>
<td><?php echo $row[11]; ?></td>
<td><?php echo $row[18]; ?></td>
<td><?php echo $row[25]; ?></td>
<td><?php echo $row[32]; ?></td>
<td><?php echo $row[39]; ?></td>
<td><?php echo $row[46].' /-'; ?></td>
</tr>
<tr>
<td><?php echo $row[12]; ?></td>
<td><?php echo $row[19]; ?></td>
<td><?php echo $row[26]; ?></td>
<td><?php echo $row[33]; ?></td>
<td><?php echo $row[40]; ?></td>
<td><?php echo $row[47].' /-'; ?></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>Total Amount:</td>
<td><?php echo $row[48].' /-'; ?></td>
</tr>
</table>
</div>

<br><br><br>

<div>
<u>Terms & Conditions</u>
<?php
while($row=mysql_fetch_array($term_res))
{
	echo "<br>";
	
	echo $row[0];
	echo ".";
	echo $row[1];
	
}
?>

</div>
<div>
<br>
<br>
<br><br><br><br>
Authorised Person:____________________
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
For Anmol Water Tank Cleaners
<br><br>
Name Signature and Stamp
<br><br>
By signing we accept the Rates & Terms & Conditions
</div>

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