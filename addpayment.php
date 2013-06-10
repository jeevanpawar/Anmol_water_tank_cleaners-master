<?php

	include("include/database.php");
	$p=$_REQUEST['p_id'];
	$p_qry="select * from invoice where c_id=".$p;
	$p_res=mysql_query($p_qry);
	$p_row=mysql_fetch_array($p_res);
		
	if(isset($_REQUEST['e_add']))
	{
		$p_t1=$_POST['t1'];
		$p_t2=$_POST['t2'];
		$p_t3=$_POST['t3'];
		$p_t4=$_POST['t4'];
		$p_t5=$_POST['t5'];
		$p_t6=$_POST['t6'];
			
		
		$pa_qry="insert into partial_payment(i_id,c_name,p_mode,c_no,p_date,p_amt) values('".$p_t1."','".$p_t2."','".$p_t3."','".$p_t4."','".$p_t5."','".$p_t6."')";
		$pa_res=mysql_query($pa_qry);
		if($pa_res)
		{
			header("location:payment.php");
		}
		else
		{
			echo "error";
		}
	}
	if(isset($_REQUEST['e_can']))
	{
		header("location:payment.php");
	}
	
	$d=date('d-m-Y');
?>
<html>
<head>
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" language="javascript">
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.ename.value == "" ) 
	{ 
	    alert ( "Please enter Employee Name" ); 
	    isValid = false;
    }
	    else if ( document.form1.add.value == "") { 
            alert ( "please enter Address" ); 
            isValid = false;
		}
		 else if ( document.form1.contact.value == "" ) { 
            alert ( "Please enter Contact Number" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.des.value == "" ) { 
            alert ( "Please enter Designation" ); 
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
            <li ><a class="has_submenu" href="site.php">Sites</a>
            <ul>
                	<li><a href="siteassgn.php">Assign To</a></li>
                </ul>
            </li>
            <li ><a class="has_submenu" href="site.php">AMC</a>
            	<ul>
                    <li><a href="amcreport.php">Amc Details</a></li>
                </ul>

            </li>
            <li><a class="has_submenu" href="clients.php">Clients</a>
            	<ul>
                	<li><a href="addclients.php">Add Clients</a></li>
                    
                    </ul>
            
            </li>
            <li class="selected"><a class="has_submenu" href="employee.php">Employees</a>
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
		<div class="quotation"><center>Payments Details</center></div>
        <div>
        <form name="form1" action="" method="post">
        <table class="addemp_tab">
        <tr>
        <td class="l_form">Invoice No:</td>
        <td><input id="des" type="text" class="q_in" name="t1" value="<?php echo $p_row[0]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Clients Name:</td>
        <td><input id="ename" type="text" class="q_in" name="t2" value="<?php echo $p_row[3]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Payment Mode:</td>
        <td>
        <select name="t3">
        <option>By Check</option>
        <option>By Cash</option>
        </select>
        </td>
        </tr>
        <tr>
        <td class="l_form">Check No:</td>
        <td><input id="contact" type="text" class="q_in" name="t4"></td>
        </tr>
        <tr>
        <td class="l_form">Date:</td>
        <td><input id="des" type="text" class="q_in" name="t5" value="<?php echo $d; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Amount:</td>
        <td><input id="des" type="text" class="q_in" name="t6"></td>
        </tr>
        
        </div>
        </table>
        <div class="addemp_button">
         <input name="e_add" class="formbutton" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
         <input name="e_can" class="formbutton" value="Cancel" type="submit" />
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
