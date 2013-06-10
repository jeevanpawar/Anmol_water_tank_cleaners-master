<?php
error_reporting(0);
include("include/database.php");
$a=date('d-m-Y');
$b=date('d-m-Y', strtotime("+5 days"));

$qry="select * from reminder where r1='$b'";

$res=mysql_query($qry);

?>
<html>
<head>
<title>Anmol Water Tank Cleners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
<div id="container">
	
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	
        	<li class="selected"><a href="home.php">Home</a></li>
            <li ><a class="has_submenu" href="site.php">Sites</a>
            		<ul>
                	<li><a href="siteassgn.php">Assign To</a></li>
                </ul>
            </li>
            <li ><a href="amcreport.php">AMC</a>
            </li>
            
            
            <li><a class="has_submenu" href="clients.php">Clients</a>
            	<ul>
                	<li><a href="addclients.php">Add Clients</a></li>
                </ul>
            
            </li>
            <li><a class="has_submenu" href="employee.php">Employees</a>
            		<ul>
                	<li><a href="addepm.php">Add Employee</a></li>
                    
                    </ul>
            
            </li>
            <li><a href="payment.php">Payments</a>
            		
            </li>
            <li><a class="has_submenu" href="invoicedetails.php">Invoice Details</a>
            		<ul>
                    <li><a href="addinvoice.php">Invoice Add</a></li>
                
                    </ul>
            </li>
            <li><a class="has_submenu" href="quotation.php">Quotation</a>
            		<ul>
                    <li><a href="addquo.php">Quotation Add</a></li>
                	
                    </ul>
            </li>
            <li><a class="has_submenu" href="term.php">Terms & Conditions</a>
            <ul>
              	<li><a href="addterm.php">Add Terms</a></li>
            </ul>
           </li>
       
        </ul>
    </div>
    
    <div id="sub-header">
		<div class="quo">
    	<br />
		<div class="quotation"><center>Todays Reminders</center></div>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="350">Client Name</td>
        <td>Description</td>
        <td width="150">Actual Date</td>
        </tr>
        </table>
        
        <table class="emp_tab">
        <?php
			while($row=mysql_fetch_array($res))
			{
				echo"<tr>";
				echo "<td>";
				echo $row[1];
				echo "</td>";
				echo "<td>";
				echo $row[2];
				echo "</td>";
				echo "<td>";
				echo $row[4];
				echo "</td>";
				echo"</tr>";
			}
		?>
        </table>
        
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
