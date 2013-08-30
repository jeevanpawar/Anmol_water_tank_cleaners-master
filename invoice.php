<?php
error_reporting(0);
include("include/database.php");
$in=$_REQUEST['c_id1'];
$c_query="select * from clients where c_id=".$in;
$c_res=mysql_query($c_query);
$c_row=mysql_fetch_array($c_res);
$c_emp="select * from emp";
$c_emp_res=mysql_query($c_emp);
?>

<?php

if(isset($_REQUEST['submit']))
{	
		$c=$c_row[0];
		$t1=$_POST['t1'];
		$t2=$_POST['t2'];
		$t3=$_POST['t3'];
		$t4=$_POST['t4'];
		$t5=$_POST['t5'];
		$t6=$_POST['t6'];
		$t7=$_POST['t7'];
		$t8=$_POST['t8'];
		$t9=$_POST['t9'];	
		
		$quo="insert into invoice(q_date,c_id,q_name,q_address,q_mo,po_wo,q_name1,c_name,q_mo1,ph) 
		values('".$t1."','".$c."','".$t2."','".$t5."','".$t7."','".$t6."','".$t3."','".$t4."','".$t8."','".$t9."')";
		$quo_res=mysql_query($quo);
		if($quo_res)
		{
			header("location:basic.php");
		}
		else
		{
		echo"error";
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

 
</head>

<body>
<div id="container">
	
    
    <div id="sub-header">
    			
                <div class="quo">
                
                
                <form name="form5" action="" method="post" enctype="multipart/form-data">
                <br />
                
                <div class="quotationI"><center>AMC INVOICE</center></div>
                <br />
                <table class="q_info">
                <tr><td class="l_form">Date:</td><td><input name="t1" class="q_in" type="text" value="<?php  echo date("d-m-Y"); ?>"/></td></tr>
                <tr><td class="l_form">Kind Attn I:</td>
                <td>
                <input type="text" class="q_in" name="t2" value="<?php echo $c_row[2]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Kind Attn II:</td>
                <td>
                <input type="text" class="q_in" name="t3" value="<?php echo $c_row[3]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Company Name:</td>
                <td>
                <input type="text" class="q_in" name="t4" value="<?php echo $c_row[11]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Address:</td><td><textarea class="q_add" name="t5"><?php echo $c_row[4].' '.$c_row[5]; ?></textarea></td></tr>
                </table>
                <table class="q_info2">
                <tr><td class="l_form">P.O/W.O No:</td><td><input type="text" class="q_in" name="t6"></td></tr>
                <tr><td class="l_form">Mo No:</td><td><input name="t7" class="q_in" type="text" value="<?php echo $c_row[8]; ?>"/></td>
                </tr>
                <tr><td class="l_form">Mo No:</td><td><input name="t8" class="q_in" type="text" value="<?php echo $c_row[12]; ?>"/></td>
                </tr>
                <tr><td class="l_form">Ph No:</td><td><input name="t9" class="q_in" type="text" value="<?php echo $c_row[7]; ?>"/></td>
                </tr>
                </table>
                <br /><br /><br /><br /><br /><br /><br /><br />
               
                <div class="q_button">
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
