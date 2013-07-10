<?php
	include("include/database.php");
	error_reporting(0);
	
	$c_qry_f="select * from invoice order by i_id desc";
	$c_res_f=mysql_query($c_qry_f);
?>
	
<html>
<head>

<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

</head>

<body>
<div id="container">
	    <div id="nav">
    	<ul class="sf-menu dropdown">
        	
        	<li><a href="home.php">Home</a></li>
            <li ><a class="has_submenu" href="site.php">Sites</a>
            		<ul>
                	<li><a href="siteassgn.php">Assign To</a></li>
                </ul>
            </li>
            <li  class="selected"><a href="amcreport.php">AMC</a>
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
		<div class="quotation"><center>Clients AMC Details</center></div>
        <div>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="70">In. No</td>
        <td width="100">Start Date.</td>
        <td width="250">Client Name</td>
        <td>Client Address</td>
        <td width="150">Contact</td>
        <td width="100">Service</td>
        </tr>
        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='emp_header'>";
        echo "<td>";
		echo $c_row[0];
		echo "</td>";
		echo "<td>";
		echo $c_row[1];
		echo "</td>";
		echo "<td>";
		echo $c_row[3];
		echo "</td>";
		echo "<td>";
		echo $c_row[4];
		echo "</td>";
		echo "<td>";
		echo $c_row[6];
		echo "</td>";
        echo "<td class='print'>";
		echo "<a href='amc.php?id=$c_row[0]'>Service</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
      
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
