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
		
	$c_qry="insert into clients(c_first,c_last,c_add,c_city,c_pin,c_ph,c_mo,c_email,c_site) values('".$c_t1."','".$c_t2."','".$c_t3."','".$c_t4."','".$c_t6."','".$c_t7."','".$c_t8."','".$c_t9."','".$c_t10."')";
	$c_res=mysql_query($c_qry);
	if($c_res)
	{
		header("location:clients.php");
	}
	else
	{
		header("location:addclients.php");
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
			
            

<script type="text/javascript" language="javascript">
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.fname.value == "" ) 
	{ 
	    alert ( "Please enter First Name" ); 
	    isValid = false; 
    }
	    else if ( document.form1.lname.value == "") { 
            alert ( "please enter Last Name" ); 
            isValid = false;
		}
		 else if ( document.form1.address.value == "" ) { 
            alert ( "Please enter Address" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.city.value == "" ) { 
            alert ( "Please enter City" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.pin.value == "" ) { 
            alert ( "Please enter Pincode" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.email.value == "" ) { 
            alert ( "Please enter Email Address" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.ph.value == "" ) { 
            alert ( "Please enter Phone Number" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.mo.value == "" ) { 
            alert ( "Please enter Mobile Number" ); 
            isValid = false;
    } 
    return isValid;
}
</script>

</head>

<body>
<div id="container">
	
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	
        	<li><a href="index.php">Home</a></li>
            <li ><a href="site.php">Sites</a>
            <ul>
                	<li><a href="siteassgn.php">Assign To</a></li>
                </ul>
            </li>
            <li ><a class="has_submenu" href="site.php">AMC</a>
            	<ul>
                    <li><a href="amcreport.php">Amc Details</a></li>
                </ul>

            </li>
            <li class="selected"><a class="has_submenu" href="clients.php">Clients</a>
            	<ul>
                	<li><a href="addclients.php">Add Clients</a></li>
                   
                    </ul>
            
            </li>
            <li><a class="has_submenu" href="employee.php">Employees</a>
            		<ul>
                	<li><a href="addepm.php">Add Employee</a></li>
                    <li><a href="employee.php">Employee Details</a></li>
                    </ul>
            
            </li>
            <li><a class="has_submenu" href="invoicedetails.php">Invoice Details</a>
            		<ul>
                	<li><a href="invoice.php">Invoice</a></li>
                    </ul>
            </li>
            <li><a class="has_submenu" href="quotation.php">Quotation</a>
            		<ul>
                	<li><a href="quotationI.php">Quotation I</a></li>
                    <li><a href="quotationII.php">Quotation II</a></li>
                    </ul>
            </li>
            <li><a class="has_submenu"  href="term.php">Terms & Conditions</a>
            <ul>
              	<li><a href="addterm.php">Add Terms</a></li>
            </ul>
           </li>
       
        </ul>
    </div>
    
    <div id="sub-header">
    <div class="quo">
    	<br />
		<div class="quotation"><center>Add New Clients</center></div>
        <div>
        <form name="form1" action="" method="post">
        <table class="q_clients">
                <tr><td class="l_form">First Name:</td><td><input id="fname" class="q_in" type="text" name="c_fname" /></td></tr>
                <tr><td class="l_form">Last Name:</td><td><input id="lname" class="q_in" type="text" name="c_lname"/></td></tr>
                <tr><td class="l_form">Address:</td><td><textarea id="address" class="q_add" name="c_address"></textarea></td></tr>
                <tr><td class="l_form">City:</td><td><input id="city" class="q_in" type="text" name="c_city"/></td></tr>
				<tr><td class="l_form">Pin Code:</td><td><input id="pin" class="q_in" type="text" name="c_pin"/></td></tr>
                <tr><td class="l_form">Email Id:</td><td><input id="email" class="q_in" type="text" name="c_email"/></td></tr>
                </table>
                <table class="q_clients2">
                <tr><td class="l_form">Phone No:</td><td><input id="ph" class="q_in" type="text" name="c_ph"/></td></tr>
                <tr><td class="l_form">Mobile No:</td><td><input id="mo" class="q_in" type="text" name="c_mo"/></td></tr>
                
                <tr><td class="l_form">Date:</td><td><input class="q_in" type="text" name="c_state" value="<?php  echo date("d-m-Y"); ?>"/></td></tr>
                
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
        <div class="addclients_b">
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
