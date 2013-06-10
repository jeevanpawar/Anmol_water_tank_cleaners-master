<?php
	include("include/database.php");
	$e_qry_f="select * from terms";
	$e_res_f=mysql_query($e_qry_f);
?>
<?php
	if(isset($_REQUEST['e_id1']))
	{
		$e_d=$_REQUEST['e_id1'];
		$e_del="delete from terms where t_id=".$e_d;
		$e_dres=mysql_query($e_del);
		if($e_dres)
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
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript">
function confirmSubmit()
{
var agree=confirm("Are you sure to Delete this Entry?");
if (agree)
	return true ;
else
	return false ;
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
		<div class="quotation"><center>Terms and Conditions</center></div>
        <div>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="50">T.No.</td>
        <td>Terms & Conditions</td>
        <td width="100">Action</td>        
        </tr>
        
        <?php
		while($e_row=mysql_fetch_array($e_res_f))
		{
        echo "<tr class='emp_header'>";
        echo "<td width='50'>";
		echo $e_row[0];
		echo "</td>";
        echo "<td>";
		echo $e_row[1];
		echo "</td>";
        echo "<td width='100'>";
		echo "<a href='?e_id1=$e_row[0]' onclick='return confirmSubmit()'>Delete</a>/<a href='updateterm.php?e_id2=$e_row[0]'>Update</a>";
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
