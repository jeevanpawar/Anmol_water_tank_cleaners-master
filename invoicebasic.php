<?php
error_reporting(0);
include("include/database.php");
$in=$_REQUEST['i_id'];
$c_query="select * from invoice where i_id=".$in;
$c_res=mysql_query($c_query);
$c_row=mysql_fetch_array($c_res);
?>

<?php


if(isset($_REQUEST['submit']))
{	
	$a=$_POST['d'];
	$b = count($a);
	for($i=0; $i<$b; $i++)
	{
		$id=$_REQUEST['i_id'];
		$c=$c_row[3];
		$d=$c_row[1];	
		$q_d=$_POST['d'][$i];
		$q_c=$_POST['c'][$i];
		$q_q=$_POST['q'][$i];
		$q_r=$_POST['r'][$i];
		$q_a=$_POST['s'][$i];
		$total=$q_q * $q_r * $q_a;
			
	$quo="insert into sub_invoice(i_id,des,capacity,quantity,rate,service,total) values('".$id."','".$q_d."','".$q_c."','".$q_q."','".$q_r."','".$q_a."','".$total."')";
	$quo_res=mysql_query($quo);

	$qry_r="insert into amc(i_id,c_name,a_date,des,service) values('".$id."','".$c."','".$d."','".$q_d."','".$q_a."')";
	$res_r=mysql_query($qry_r);

	$amc = $_POST['s'][$i];
	$reminder_interval = 12/$amc;
	$a =number_format($reminder_interval * 30)+1;
	$c=0;
	$NewDate = '';
	for($j=0; $j<$amc; $j++)
	{
		$day=$c_row[1];
		$arr = explode("-", $day);
		list($day, $month, $year) = $arr;
		$date = $day."-".$month."-".$year;
		$c = $c + $a;
		$NewDate[$j]=date('Y-m-d', strtotime("$date +$c days"));
		$count[$j]=$j+1;
	}
	foreach(array_combine($NewDate, $count) as $x => $co )
	{
		
		$ia=$_REQUEST['i_id'];
		$des=$q_d;
		$name=$c_row[3];
		$name2=$c_row[8];
		$comp=$c_row[9];
		$mo=$c_row[6];
		$mo2=$c_row[10];
		$ph=$c_row[11];
		$qry="insert into reminder(i_id,r_name,r_des,r_date,r_name2,r_comp,r_mo,r_mo2,r_ph,r_count) values('".$ia."','".$name."','".$des."','".$x."','".$name2."','".$comp."','".$mo."','".$mo2."','".$ph."','".$co."')";
		$res=mysql_query($qry);
		
	}
	
	
	if($quo_res)
	{
		header("location:invoicedetails.php");
	}
	else
	{
		echo"error";
	}
	}
	
}
if(isset($_REQUEST['cancel']))
{
	header("location:invoicedetails.php");
}
?>
<html>
<head>
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="styles2.css" type="text/css" />


<script>
 var counter = 1;
 function add_phone_field()
 {
  var obj = document.getElementById("phone");
  var data = obj.innerHTML;
  data += "<table class='des'><tr><td><input class='des_in' type='text' name='d["+counter+"]' id='person_phone"+counter+"' /></td><td width='10%'><input class='des_cap' type='text' name='c["+counter+"]' id='person_phone"+counter+"' /></td><td width='10%'><input class='des_q' type='text' name='q["+counter+"]' id='person_phone"+counter+"' /></td><td width='10%'><input class='des_q' type='text' name='r["+counter+"]' id='person_phone"+counter+"' /></td><td width='10%'><input class='des_q' type='text' name='s["+counter+"]' id='person_phone"+counter+"' /></td></tr></table>";
  obj.innerHTML = data;
  counter++;
  }
 </script>
  
</head>

<body>
<div id="container">
	
    
    <div id="sub-header">
    			
                <div class="quo">
                
                
                <form name="form5" action="" method="post" enctype="multipart/form-data">
                <br />
                
                <div class="quotationI"><center>AMC INVOICE</center></div>
                <br />
                <table class="q_info3">
                <tr><td class="l_form">Date:</td><td><input name="q_date" class="q_in" type="text" value="<?php  echo date("d-m-Y"); ?>"/></td></tr>
                <tr><td class="l_form">Kind Attn I:</td>
                <td>
                <input type="text" class="q_in" name="q_name" value="<?php echo $c_row[3]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Kind Attn II:</td>
                <td>
                <input type="text" class="q_in" name="q_name" value="<?php echo $c_row[8]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Company Name:</td>
                <td>
                <input type="text" class="q_in" name="q_name" value="<?php echo $c_row[9]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Address:</td><td><textarea class="q_add" name="q_address"><?php echo $c_row[4]; ?></textarea></td></tr>
                </table>
                <table class="q_info4">
                <tr><td class="l_form">Invoice No</td>
                <td><input name="q_mo" class="q_in" type="text" readonly value="<?php echo $c_row[0]; ?>"/></td></tr>
                <tr><td class="l_form">Contact No:</td>
                <td>
                <input type="text" class="q_in" name="q_name" value="<?php echo $c_row[6]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Contact No:</td>
                <td>
                <input type="text" class="q_in" name="q_name" value="<?php echo $c_row[10]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Phone No:</td>
                <td>
                <input type="text" class="q_in" name="q_name" value="<?php echo $c_row[11]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">P.O/W.O No</td>
                <td><input name="q_mo" class="q_in" type="text" value="<?php echo $c_row[7]; ?>"/></td></tr>
                <tr><td class="l_form"></td><td></td></tr>
                </table>
                <br />
                <table class="des">
                <tr class="menu_header">
                <td>Description</td>
                <td width="10%">Capacity</td>
                <td width="10%">Quantity</td>
                <td width="10%">Rate</td>
                <td width="10%">AMC</td>
                </tr>
                <span style=" margin-left:100px;color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>
                <tr>
                <td>
                 <input class="des_in" type="text" name="d[]" id="0"><br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="c[]" id="0"><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="q[]" id="0"><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="r[]" id="0"><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="s[]" id="0"><br>
                </td>
                </tr>
                
                </table>
                 <div id="phone">
                
                </div>
                <div class="q_button5">
            	<input name="submit" class="formbutton" value=" Submit " type="submit" onClick="javascript:return validateMyForm();" />
                <input name="cancel" class="formbutton" value="Cancel" type="submit" />
                </div>
                
                </form>
  				</div>
                
                </div>
                
        
    
    	<div class="clear"></div>
    
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
