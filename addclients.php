<?php
include("include/database.php");
	if(isset($_REQUEST['c_add']))
	{
	
	$c_t1=$_POST['c_fname'];
	$c_t2=$_POST['c_lname'];
	$c_t3=$_POST['c_address'];
	$c_t4=$_POST['c_city'];
	$c_t6=$_POST['c_pin'];
	$c_t7=$_POST['c_ph'];
	$c_t8=$_POST['c_mo'];
	$c_t9=$_POST['c_email'];
	$c_t10=$_POST['c_site'];
	$c_t11=$_POST['c_date'];
	$c_t12=$_POST['c_comp'];
	$c_t13=$_POST['c_mo2'];
		
	$c_qry="insert into clients(c_date,c_first,c_last,c_add,c_city,c_pin,c_ph,c_mo,c_email,c_site,c_comp,c_mo2) values('".$c_t11."','".$c_t1."','".$c_t2."','".$c_t3."','".$c_t4."','".$c_t6."','".$c_t7."','".$c_t8."','".$c_t9."','".$c_t10."','".$c_t12."','".$c_t13."')";
	$c_res=mysql_query($c_qry);
	if($c_res)
	{
		header("location:clients.php");
	}
	else
	{
		header("location:clients.php");
	}
	}
	if(isset($_REQUEST['can']))
	{
		header("location:clients.php");
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="styles2.css" type="text/css" />

	
            

<script type="text/javascript" language="javascript">
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.address.value == "" ) 
	{ 
	    alert ( "Please Enter Address Plz" ); 
	    isValid = false; 
    }
	    else if ( document.form1.mo.value == "" ) { 
            alert ( "Please Enter Mobile Number" ); 
            isValid = false;
    } 
    return isValid;
}
</script>

</head>

<body>
<div id="container">
    <div id="sub-header">
	
    <?php
	include("header.php");
	?>
<br />
		<div class="quotation"><center>Add New Clients</center></div>
        <div>
        <form name="form1" action="" method="post">
        <table class="tab_1">
                <tr><td class="l_form">Kind Attn I:</td><td><input id="fname" class="q_in" type="text" name="c_fname" /></td></tr>
                <tr><td class="l_form">Kind Attn II:</td><td><input id="lname" class="q_in" type="text" name="c_lname"/></td></tr>
                <tr><td class="l_form">Company Name:</td><td><input id="lname" class="q_in" type="text" name="c_comp"/></td></tr>
                <tr><td class="l_form">Address:</td><td><textarea id="address" class="q_add" name="c_address"></textarea></td></tr>
                <tr><td class="l_form">City:</td><td><input id="city" class="q_in" type="text" name="c_city"/></td></tr>
				<tr><td class="l_form">Pin Code:</td><td><input class="q_in" type="text" name="c_pin"/></td></tr>
                
                </table>
                <table class="tab_2">
                <tr><td class="l_form">Mobile No:</td><td><input id="mo" class="q_in" type="text" name="c_mo"/></td></tr>
                <tr><td class="l_form">Mobile No:</td><td><input id="mo" class="q_in" type="text" name="c_mo2"/></td></tr>
                <tr><td class="l_form">Phone No:</td><td><input id="ph" class="q_in" type="text" name="c_ph"/></td></tr>
                <tr><td class="l_form">Email Id:</td><td><input class="q_in" type="text" name="c_email"/></td></tr>
                <tr><td class="l_form">Date:</td><td><input class="q_in" type="text" name="c_date" value="<?php  echo date("d-m-Y"); ?>"/></td></tr>
                
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
         <input name="c_add" class="formbutton" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
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
