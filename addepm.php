<?php

	include("include/database.php");
	
	if(isset($_REQUEST['e_add']))
	{
		$e_t1=$_POST['e_name'];
		$e_t2=$_POST['e_address'];
		$e_t3=$_POST['e_contact'];
		$e_t4=$_POST['e_desig'];
		
		$e_qry="insert into emp(e_name,e_add,e_contact,e_desig) values('".$e_t1."','".$e_t2."','".$e_t3."','".$e_t4."')";
		$e_res=mysql_query($e_qry);
		if($e_res)
		{
			header("location:employee.php");
		}
		else
		{
			echo "error";
		}
	}
	if(isset($_REQUEST['e_can']))
	{
		header("location:employee.php");
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
		<div class="quotation"><center>Add New Employee</center></div>
        <div>
        <form action="" method="post">
        <table class="addemp_tab">
        <tr>
        <td class="l_form">Emp Name:</td>
        <td><input type="text" class="q_in" name="e_name"></td>
        </tr>
        <tr>
        <td valign="top" class="l_form">Address:</td>
        <td><textarea class="q_add" name="e_address"></textarea></td>
        </tr>
        <tr>
        <td class="l_form">Contact Details:</td>
        <td><input type="text" class="q_in" name="e_contact"></td>
        </tr>
        <tr>
        <td class="l_form">Designation:</td>
        <td><input type="text" class="q_in" name="e_desig"></td>
        </tr>
        
        </div>
        </table>
        <div class="addemp_button">
         <input name="e_add" class="formbutton" value=" Add " type="submit" />
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
