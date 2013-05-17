<?php
	include("include/database.php");
	error_reporting(0);
	
	$c_qry_f="select * from amc";
	$c_res_f=mysql_query($c_qry_f);
?>
	
<html>
<head>

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
            <li><a class="has_submenu" href="site.php">Sites</a>
            <ul>
                	<li><a href="siteassgn.php">Assign To</a></li>
                </ul>
            </li>
            <li class="selected"><a class="has_submenu" href="site.php">AMC</a>
            	<ul>
                    <li><a href="amcreport.php">Amc Details</a></li>
                </ul>

            </li>
            <li><a class="has_submenu" href="clients.php">Clients</a>
            	<ul>
                	<li><a href="addclients.php">Add Clients</a></li>
                    <li><a href="addclients.php">AMC Reports</a></li>
                    
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
		<div class="quotation"><center>Clients AMC Details</center></div>
        <div>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="50">Start Date.</td>
        <td width="250">Client Name</td>
        </tr>
        <table class="emp_tab">
         
        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='emp_header'>";
        echo "<td width='50'>";
		echo $c_row[2];
		echo "</td>";
        echo "<td width='250'>";
		echo "<a href='amc.php?id=$c_row[1]'>$c_row[1]</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        </table>
        </table>
        </div>
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
