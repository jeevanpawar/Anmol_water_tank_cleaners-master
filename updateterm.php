<?php

	include("include/database.php");
	
	$up_e = 0;
	$up_e=$_REQUEST['e_id2'];
	$up_qry="select * from terms where t_id=".$up_e;
	$up_res=mysql_query($up_qry);
	$row_up=mysql_fetch_array($up_res);
	
	if(isset($_REQUEST['e_can']))
	{
		header("location:term.php");
	}
	
	if(isset($_REQUEST['e_up']))
	{	
		$up=$_REQUEST['e_id2'];
		$t_no=$_POST['t_no'];
		$t_term=$_POST['term'];
		
		$qry_up="update terms SET t_id='".$t_no."', t_term='".$t_term."' where t_id=".$up;
	
		$res_up=mysql_query($qry_up);
		if($res_up)
		{
			header("location:term.php");
		}
		else
		{
			echo "error";
		}
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
            <li><a class="has_submenu" href="employee.php">Employees</a>
            		<ul>
                	<li><a href="addepm.php">Add Employee</a></li>
                    <li><a href="employee.php">Employee Details</a></li>
                    </ul>
            
            </li>
            <li><a href="invoice.php">Invoice</a></li>
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
		<div class="quotation"><center>Update Terms & Conditions</center></div>
        <div>
        <form action="" method="post">
        <table class="addemp_tab">
        <tr>
        <td class="l_form">Term No:</td>
        <td><input type="text" class="q_in" name="t_no" value="<?php echo $row_up[0]; ?>"></td>
        </tr>
        <tr>
        <td valign="top" class="l_form">Terms & Conditions:</td>
        <td><textarea class="q_add" name="term"><?php echo $row_up[1]; ?></textarea></td>
        </tr>
        
        </div>
        </table>
        <div class="addemp_b">
         <input name="e_up" class="formbutton" value=" Update " type="submit" />
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
