<?php
include("include/database.php");
$c_query="select * from clients";
$c_res=mysql_query($c_query);

$c_emp="select * from emp";
$c_emp_res=mysql_query($c_emp);

?>

<?php

if(isset($_REQUEST['submit']))
{
	$q_date=$_POST['q_date'];
	$q_name=$_POST['q_name'];
	$q_address=$_POST['q_address'];
	$q_attn=$_POST['q_attn'];
	$q_mo=$_POST['q_mo'];
	$q_d1=$_POST['d1'];
	$q_d2=$_POST['d2'];
	$q_d3=$_POST['d3'];
	$q_d4=$_POST['d4'];
	$q_d5=$_POST['d5'];
	$q_d6=$_POST['d6'];
	$q_d7=$_POST['d7'];
	$q_c1=$_POST['c1'];
	$q_c2=$_POST['c2'];
	$q_c3=$_POST['c3'];
	$q_c4=$_POST['c4'];
	$q_c5=$_POST['c5'];
	$q_c6=$_POST['c6'];
	$q_c7=$_POST['c7'];
	$q_q1=$_POST['q1'];
	$q_q2=$_POST['q2'];
	$q_q3=$_POST['q3'];
	$q_q4=$_POST['q4'];
	$q_q5=$_POST['q5'];
	$q_q6=$_POST['q6'];
	$q_q7=$_POST['q7'];
	$q_r1=$_POST['r1'];
	$q_r2=$_POST['r2'];
	$q_r3=$_POST['r3'];
	$q_r4=$_POST['r4'];
	$q_r5=$_POST['r5'];
	$q_r6=$_POST['r6'];
	$q_r7=$_POST['r7'];
	$q_s1=$_POST['s1'];
	$q_s2=$_POST['s2'];
	$q_s3=$_POST['s3'];
	$q_s4=$_POST['s4'];
	$q_s5=$_POST['s5'];
	$q_s6=$_POST['s6'];
	$q_s7=$_POST['s7'];
	$q_a1=$_POST['a1'];
	$q_a2=$_POST['a2'];
	$q_a3=$_POST['a3'];
	$q_a4=$_POST['a4'];
	$q_a5=$_POST['a5'];
	$q_a6=$_POST['a6'];
	$q_a7=$_POST['a7'];
	$q_total=$_POST['a8'];
	$quo="insert into quotation(q_date,q_name,q_address,q_attn,q_mo,d1,d2,d3,d4,d5,d6,d7,c1,c2,c3,c4,c5,c6,c7,q1,q2,q3,q4,q5,q6,q7,r1,r2,r3,r4,r5,r6,r7,s1,s2,s3,s4,s5,s6,s7,a1,a2,a3,a4,a5,a6,a7,total) values('".$q_date."','".$q_name."','".$q_address."','".$q_attn."','".$q_mo."','".$q_d1."','".$q_d2."','".$q_d3."','".$q_d4."','".$q_d5."','".$q_d6."','".$q_d7."','".$q_c1."','".$q_c2."','".$q_c3."','".$q_c4."','".$q_c5."','".$q_c6."','".$q_c7."','".$q_q1."','".$q_q2."','".$q_q3."','".$q_q4."','".$q_q5."','".$q_q6."','".$q_q7."','".$q_r1."','".$q_r2."','".$q_r3."','".$q_r4."','".$q_r5."','".$q_r6."','".$q_r7."','".$q_s1."','".$q_s2."','".$q_s3."','".$q_s4."','".$q_s5."','".$q_s6."','".$q_s7."','".$q_a1."','".$q_a2."','".$q_a3."','".$q_a4."','".$q_a5."','".$q_a6."','".$q_a7."','".$q_total."')";
	
	//$reminder_interval = 12/$q_s1;
	//for($i=0; $i<$q_s1; $i++)
	//{
	//	$todays_date + $date_after_reminder_inverval;
	
//	}
	
	$quo_res=mysql_query($quo);
	if($quo_res)
	{
		header("location:quotation.php");
	}
	else
	{
		echo"error";
	}
	
}
if(isset($_REQUEST['cancel']))
{
	header("location:quotation.php");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">

function calculate()
{
	var rate = parseFloat(document.form5.r1.value);
    var ser  = parseInt(document.form5.s1.value);
    var amt  = rate * ser;

    document.form5.a1.value = amt.toFixed(2);
	
	var rate1 = parseFloat(document.form5.r2.value);
    var ser1  = parseInt(document.form5.s2.value);
    var amt1  = rate1 * ser1;

    document.form5.a2.value = amt1.toFixed(2);
	
	var rate2 = parseFloat(document.form5.r3.value);
    var ser2  = parseInt(document.form5.s3.value);
    var amt2  = rate2 * ser2;

    document.form5.a3.value = amt2.toFixed(2);
	
	var rate3 = parseFloat(document.form5.r4.value);
    var ser3  = parseInt(document.form5.s4.value);
    var amt3  = rate3 * ser3;

    document.form5.a4.value = amt3.toFixed(2);
	
	var rate4 = parseFloat(document.form5.r5.value);
    var ser4  = parseInt(document.form5.s5.value);
    var amt4  = rate4 * ser4;

    document.form5.a5.value = amt4.toFixed(2);
	
	var rate5 = parseFloat(document.form5.r6.value);
    var ser5  = parseInt(document.form5.s6.value);
    var amt5  = rate5 * ser5;

    document.form5.a6.value = amt5.toFixed(2);
	
	var rate6 = parseFloat(document.form5.r7.value);
    var ser6  = parseInt(document.form5.s7.value);
    var amt6  = rate6 * ser6;

    document.form5.a7.value = amt6.toFixed(2);
	
	var a1 = parseFloat(document.form5.a1.value);
	var a2 = parseFloat(document.form5.a2.value);
	var a3 = parseFloat(document.form5.a3.value);
	var a4 = parseFloat(document.form5.a4.value);
	var a5 = parseFloat(document.form5.a5.value);
	var a6 = parseFloat(document.form5.a6.value);
	var a7 = parseFloat(document.form5.a7.value);
	
	var total = a1 + a2 + a3 + a4 + a5 + a6 + a7;
	
	document.form5.a8.value = total.toFixed(2);
	
	
}
</script>

</head>

<body>
<div id="container">
	
    
    <div id="sub-header">
    			
                <div class="quo">
                
                
                <form name="form5" action="" method="post">
                <br />
                
                <div class="quotationI"><center>AMC QUOTATION</center></div>
                <br />
                <table class="q_info">
                <tr><td class="l_form">Date:</td><td><input name="q_date" class="q_in" type="text" value="<?php  echo date("d-m-Y"); ?>"/></td></tr>
                <tr><td class="l_form">Client Name:</td>
                <td>
                <select name="q_name">
				<?php
				while($c_row=mysql_fetch_array($c_res))
				{
					echo "<option>";
					echo $c_row[3];
					echo "</option>";
				}
				?>
                </select>
                </td>
                </tr>
                <tr><td class="l_form" valign="top">Address:</td><td><textarea class="q_add" name="q_address"></textarea></td></tr>
                </table>
                <table class="q_info2">
                <tr><td class="l_form">&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td class="l_form">Kind Attn:</td>
                <td>
                <select name="q_attn">
				<?php
				while($c_row_emp=mysql_fetch_array($c_emp_res))
				{
					echo "<option>";
					echo $c_row_emp[1];
					echo "</option>";
				}
				?>
                </select>
                </td>
                </tr>
                <tr><td class="l_form">Mo No:</td><td><input name="q_mo" class="q_in" type="text" /></td>
                </table>
                <br />
                <table class="des">
                <tr>
                <td class="heading" width="300">Description</td>
                <td class="heading" width="80">Capacity</td>
                <td class="heading" width="80">Quantity</td>
                <td class="heading" width="60">Rate</td>
                <td class="heading" width="140">Service in Year</td>
                <td class="heading" width="100">Amount</td></tr>
                <tr class="data">
                <td><input type="text" class="des_in" name="d1" /> </td>
                <td><input type="text" class="des_cap" name="c1" /></td>
                <td><input type="text" class="des_q" name="q1" /></td>
                <td><input type="text" class="des_r" name="r1"/ value="0"></td>
                <td><input type="text" class="des_ser" name="s1" value="0" /></td>
                <td><input type="text" class="des_amt" name="a1" value="0" /></td>
                </tr>
                <tr class="data">
                <td><input type="text" class="des_in" name="d2" /></td>
                <td><input type="text" class="des_cap" name="c2" /></td>
                <td><input type="text" class="des_q" name="q2" /></td>
                <td><input type="text" class="des_r" name="r2"/ value="0"></td>
                <td><input type="text" class="des_ser" name="s2" value="0" /></td>
                <td><input type="text" class="des_amt" name="a2" value="0" /></td>
                </tr>
                <tr class="data">
                <td><input type="text" class="des_in" name="d3" /></td>
                <td><input type="text" class="des_cap" name="c3" /></td>
                <td><input type="text" class="des_q" name="q3" /></td>
                <td><input type="text" class="des_r" name="r3"/ value="0"></td>
                <td><input type="text" class="des_ser" name="s3" value="0" /></td>
                <td><input type="text" class="des_amt" name="a3" value="0" /></td>
                </tr>
                <tr class="data">
                <td><input type="text" class="des_in" name="d4" /></td>
                <td><input type="text" class="des_cap" name="c4" /></td>
                <td><input type="text" class="des_q" name="q4" /></td>
               <td><input type="text" class="des_r" name="r4"/ value="0"></td>
                <td><input type="text" class="des_ser" name="s4" value="0" /></td>
                <td><input type="text" class="des_amt" name="a4" value="0" /></td>
                </tr>
                <tr class="data">
                <td><input type="text" class="des_in" name="d5" /></td>
                <td><input type="text" class="des_cap" name="c5" /></td>
                <td><input type="text" class="des_q" name="q5" /></td>
                <td><input type="text" class="des_r" name="r5"/ value="0"></td>
                <td><input type="text" class="des_ser" name="s5" value="0" /></td>
                <td><input type="text" class="des_amt" name="a5" value="0" /></td>
                </tr>
                <tr class="data">
                <td><input type="text" class="des_in" name="d6" /></td>
                <td><input type="text" class="des_cap" name="c6" /></td>
                <td><input type="text" class="des_q" name="q6" /></td>
                <td><input type="text" class="des_r" name="r6"/ value="0"></td>
                <td><input type="text" class="des_ser" name="s6" value="0" /></td>
                <td><input type="text" class="des_amt" name="a6" value="0" /></td>
                </tr>
                <tr class="data">
                <td><input type="text" class="des_in" name="d7" /></td>
                <td><input type="text" class="des_cap" name="c7" /></td>
                <td><input type="text" class="des_q" name="q7" /></td>
                <td><input type="text" class="des_r" name="r7"/ value="0"></td>
                <td><input type="text" class="des_ser" name="s7" value="0" /></td>
                <td><input type="text" class="des_amt" name="a7" value="0" /></td>
                </tr>
                <tr class="data"><td></td><td></td><td></td><td></td><td>&nbsp;</td>
                <td><input type="text" class="des_amt" name="a8" value="0" /></td>
                </tr>
                </table>
                
                <div class="q_button">
                <input type="button" name="send" class="formbutton" value=" Calculate " onClick="calculate()" />
                <input name="submit" class="formbutton" value=" Submit " type="submit" />
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
