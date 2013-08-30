<?php
	include("include/database.php");
	$c_up=$_REQUEST['c_id2'];
	$c_qry_f="select * from clients where c_id=".$c_up;
	$c_res_f=mysql_query($c_qry_f);
	$c_row=mysql_fetch_array($c_res_f);
?>
<?php
	if(isset($_REQUEST['can']))
	{
		header("location:clients.php");
	}
?>
<?php
	if(isset($_REQUEST['c_up']))
	{	
		$c=$_REQUEST['c_id2'];
		$t1=$_POST['c_first'];
		$t2=$_POST['c_last'];
		$t3=$_POST['c_add'];
		$t4=$_POST['c_city'];
		$t5=$_POST['c_pin'];
		$t7=$_POST['c_email'];
		$t6=$_POST['c_ph'];
		$t8=$_POST['c_mo'];
		$t9=$_POST['c_date'];
		$t10=$_POST['c_site'];
		$t11=$_POST['c_comp'];
		$t12=$_POST['c_mo2'];
		
		$qry_up="update clients SET c_date='".$t9."', c_first='".$t1."', c_last='".$t2."', c_add='".$t3."', c_city='".$t4."', c_pin='".$t5."', c_ph='".$t6."', c_mo='".$t8."', c_email='".$t7."', c_site='".$t10."', c_comp='".$t11."', c_mo2='".$t12."' where c_id=".$c;
		$res_up=mysql_query($qry_up);
		if($res_up)
		{
			header("location:clients.php");
		}
		else
		{
			echo "error";
		}
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
		<div class="quotation"><center>Update Client Details</center></div>
        <div>
        <form action="" method="post">
        <table class="tab_1">
                <tr><td class="l_form">Kind Attn I:</td><td><input class="q_in" type="text" name="c_first" value="<?php echo $c_row[2]; ?>" /></td></tr>
                <tr><td class="l_form">Kind Attn II:</td><td><input class="q_in" type="text" name="c_last" value="<?php echo $c_row[3]; ?>"/></td></tr>
                <tr><td class="l_form">Company Name:</td><td><input class="q_in" type="text" name="c_comp" value="<?php echo $c_row[11]; ?>"/></td></tr>
                <tr><td class="l_form">Address:</td><td><textarea class="q_add" name="c_add"><?php echo $c_row[4]; ?></textarea></td></tr>
                <tr><td class="l_form">City:</td><td><input class="q_in" type="text" name="c_city" value="<?php echo $c_row[5]; ?>"/></td></tr>
                <tr><td class="l_form">Pin Code:</td><td><input class="q_in" type="text" name="c_pin" value="<?php echo $c_row[6]; ?>" /></td></tr>
                </table>
                <table class="tab_2">
                <tr><td class="l_form">Mobile No:</td><td><input class="q_in" type="text" name="c_mo" value="<?php echo $c_row[8]; ?>" /></td></tr>
                <tr><td class="l_form">Mobile No:</td><td><input class="q_in" type="text" name="c_mo2" value="<?php echo $c_row[12]; ?>" /></td></tr>
                <tr><td class="l_form">Phone No:</td><td><input class="q_in" type="text" name="c_ph" value="<?php echo $c_row[7]; ?>"/></td></tr>
                <tr><td class="l_form">Email Id:</td><td><input class="q_in" type="text" name="c_email" value="<?php echo $c_row[9]; ?>"/></td></tr>
                <tr><td class="l_form">Date:</td><td><input class="q_in" type="text" name="c_date" value="<?php  echo $c_row[1]; ?>"/></td></tr>
                <tr>
                <td class="l_form">Site Type:</td>
                <td>
                <select class="a" name="c_site">
                <option>..Select..</option>
                <option>Residential</option>
                <option>Domestic</option>
                <option>Commercial</option>
                <option>Industrial</option>
                <option>Government</option>
                <option>Municipal</option>
                </select>
                </td>
                </tr>
                </table>
        <div class="add_h">
         <input name="c_up" class="formbutton" value=" Update " type="submit" />
         <input name="can" class="formbutton" value="Cancel" type="submit" />
        </div>
        
        </form>
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
