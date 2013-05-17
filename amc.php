<?php
	include("include/database.php");
	error_reporting(0);
	$a=$_REQUEST['id'];
	$c_qry_f="select * from amc where c_name='$a'";
	$c_res_f=mysql_query($c_qry_f);
	$row=mysql_fetch_array($c_res_f);
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
        <table class="emp_tab1">
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;Start Date:<?php echo $row[2]; ?></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Client Name : <?php echo $row[1]; ?></td>
        
        </tr>
        
        </table>

        <table class="emp_tab1">
        <tr class="emp_header">
        
        </tr>
        
        <table class="emp_tab1">
        <tr class="f">
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Description</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Next Amc Dates</td>
        </tr>
        
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[3]; ?></td>
        <td>
		<?php 
		
		$amc = $row[10];
		$reminder_interval = 12/$amc;
		$a = $reminder_interval * 30;
		for($i=0; $i<$amc; $i++)
		{
		   $c = $c + $a;
		   $NewDate=date('d-m-Y', strtotime("+$c days"));
		   echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<span class='n'>$NewDate</span>";
		}
		
		?>
        </td>
        </tr>
        
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[4]; ?></td>
        <td>
		<?php 
		
		$amc1 = $row[11];
		$reminder_interval1 = 12/$amc1;
		$a1 = $reminder_interval1 * 30;
		for($i=0; $i<$amc1; $i++)
		{
		   $c1 = $c1 + $a1;
		   $NewDate1=date('d-m-Y', strtotime("+$c1 days"));
		   echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<span class='n'>$NewDate1</span>";
		}
		
		?>
        </td>
        </tr>
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[5]; ?></td>
        <td>
		<?php 
		
		$amc2 = $row[12];
		$reminder_interval2 = 12/$amc2;
		$a2 = $reminder_interval2 * 30;
		for($i=0; $i<$amc2; $i++)
		{
		   $c2 = $c2 + $a2;
		   $NewDate2=date('d-m-Y', strtotime("+$c2 days"));
		   echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<span class='n'>$NewDate2</span>";
		}
		
		?>
        </td>
        </tr>
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[6]; ?></td>
        <td>
		<?php 
		
		$amc3 = $row[13];
		$reminder_interval3 = 12/$amc3;
		$a3 = $reminder_interval3 * 30;
		for($i=0; $i<$amc3; $i++)
		{
		   $c3 = $c3 + $a3;
		   $NewDate3=date('d-m-Y', strtotime("+$c3 days"));
		   echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<span class='n'>$NewDate3</span>";
		}
		
		?>
        </td>
        </tr>
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[7]; ?></td>
        <td>
		<?php 
		
		$amc4 = $row[14];
		$reminder_interval4 = 12/$amc4;
		$a4 = $reminder_interval4 * 30;
		for($i=0; $i<$amc4; $i++)
		{
		   $c4 = $c4 + $a4;
		   $NewDate4=date('d-m-Y', strtotime("+$c4 days"));
		   echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<span class='n'>$NewDate4</span>";
		}
		
		?>
        </td>
        </tr>
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[8]; ?></td>
        <td>
		<?php 
		
		$amc5 = $row[15];
		$reminder_interval5 = 12/$amc5;
		$a5 = $reminder_interval5 * 30;
		for($i=0; $i<$amc5; $i++)
		{
		   $c5 = $c5 + $a5;
		   $NewDate5=date('d-m-Y', strtotime("+$c5 days"));
		   echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<span class='n'>$NewDate5</span>";
		}
		
		?>
        </td>
        </tr>
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[9]; ?></td>
        <td>
		<?php 
		
		$amc6 = $row[16];
		$reminder_interval6 = 12/$amc6;
		$a6 = $reminder_interval6 * 30;
		for($i=0; $i<$amc6; $i++)
		{
		   $c6 = $c6 + $a6;
		   $NewDate6=date('d-m-Y', strtotime("+$c6 days"));
		   echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<span class='n'>$NewDate6</span>";
		}
		
		?>
        </td>
        </tr>
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
