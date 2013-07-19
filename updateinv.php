<?php
error_reporting(0);
include("include/database.php");
$in=$_REQUEST['id1'];
$c_query="select * from invoice where i_id=".$in;
$c_res=mysql_query($c_query);
$c_row=mysql_fetch_array($c_res);

$c_sub="select * from sub_invoice where i_id=".$in;
$c_ressub=mysql_query($c_sub);
$num_rows = mysql_num_rows($c_ressub);

?>

<?php
if(isset($_REQUEST['submit']))
{	
	$id=$_REQUEST['id1'];
	$del="delete from sub_invoice where i_id=".$id;
	$res=mysql_query($del);
	
	$r_del="delete from reminder where i_id=".$id;
	$r_res=mysql_query($r_del);
	
	$u1=$_POST['q_date'];
	$u2=$_POST['q_name'];
	$u3=$_POST['q_address'];
	$u5=$_POST['q_mo'];
	$u6=$_POST['q_po'];
	$qry_up="update invoice SET q_date='".$u1."', q_name='".$u2."', q_address='".$u3."', q_mo='".$u5."', po_wo='".$u6."' where i_id=".$in;
	$res_up=mysql_query($qry_up);
	
	$a=$_POST['d'];
	$b = count($a);
	for($i=0; $i<$b; $i++)
	{
		$id=$_REQUEST['id1'];
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
		$day=$u1;
		$arr = explode("-", $day);
		list($day, $month, $year) = $arr;
		$date = $day."-".$month."-".$year;
		$c = $c + $a;
		$NewDate[$j]=date('Y-m-d', strtotime("$date +$c days"));
	}
	foreach($NewDate as $x)
	{
		$ia=$_REQUEST['id1'];
		$des=$q_d;
		$name=$c_row[3];
		$qry="insert into reminder(i_id,r_name,r_des,r_date) values('".$ia."','".$name."','".$des."','".$x."')";
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
 var counter = <?php echo $num_rows; ?> ;
 function add_phone_field()
 {
  var obj = document.getElementById("phone");
  var data = obj.innerHTML;
  data += "<table class='des'><tr><td><input class='des_in' type='text' name='d["+counter+"]' id='person_phone"+counter+"' /></td><td width='10%'><input class='des_cap' type='text' name='c["+counter+"]' id='person_phone"+counter+"' /></td><td width='10%'><input class='des_q' type='text' name='q["+counter+"]' id='person_phone"+counter+"' /></td><td width='10%'><input class='des_r' type='text' name='r["+counter+"]' id='person_phone"+counter+"' /></td><td width='10%'><input class='des_ser' type='text' name='s["+counter+"]' id='person_phone"+counter+"' /></td></tr></table>";
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
                <tr><td class="l_form">Date:</td><td><input name="q_date" class="q_in" type="text" value="<?php  echo $c_row[1]; ?>"/></td></tr>
                <tr><td class="l_form">Client Name:</td>
                <td>
                <input type="text" class="q_in" name="q_name" value="<?php echo $c_row[3]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Address:</td><td><textarea class="q_add" name="q_address"><?php echo $c_row[4]; ?></textarea></td></tr>
                </table>
                <table class="q_info4">
                <tr><td class="l_form">Invoice No</td>
                <td><input class="q_in" readonly type="text" value="<?php echo $c_row[0]; ?>"/></td></tr>
                <tr><td class="l_form">P.O/W.O No</td>
                <td><input name="q_po" class="q_in" type="text" value="<?php echo $c_row[7]; ?>"/></td></tr>
                <tr><td class="l_form">Mo No:</td><td><input name="q_mo" class="q_in" type="text" value="<?php echo $c_row[6]; ?>"/></td>
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
                <span style="margin-left:100px;color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>
                <?php
				$i=0;
				while($c_subrow=mysql_fetch_array($c_ressub))
				{	
					if($num_rows>0)
					{
					echo "<tr>";
					echo "<td>";
					echo "<input class='des_in' type='text' name='d[$i]' id='0' value='$c_subrow[2]'>";
     				echo "</td>";
					echo "<td>";
					echo "<input class='des_cap' type='text' name='c[$i]' id='0' value='$c_subrow[3]'>";
     				echo "</td>";
					echo "<td>";
					echo "<input class='des_q' type='text' name='q[$i]' id='0' value='$c_subrow[4]'>";
     				echo "</td>";
					echo "<td>";
					echo "<input class='des_q' type='text' name='r[$i]' id='0' value='$c_subrow[5]'>";
     				echo "</td>";
					echo "<td>";
					echo "<input class='des_q' type='text' name='s[$i]' id='0' value='$c_subrow[6]'>";
     				echo "</td>";
					echo "</tr>";
					$i=$i+1;
					}
					$num_rows=$num_rows-1;

				}
				?>
                
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
