<?php

	include("include/database.php");
	
	if(isset($_REQUEST['a_add']))
	{
		$a_t1=$_POST['a_amc'];
		$a_t2=$_POST['a_clients'];
		$a_t3=$_POST['a_date'];
			
		$a_qry="insert into amc(a_amc,c_name,s_date) values('".$a_t1."','".$a_t2."','".$a_t3."')";
		$a_res=mysql_query($a_qry);
		if($a_res)
		{
			header("location:amcreport.php");
		}
		else
		{
			echo "error";
		}
	}
	if(isset($_REQUEST['a_can']))
	{
		header("location:amcreport.php");
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anmol Water Tank Cleners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link rel="stylesheet" href="js/jquery-ui.css" />
  <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-ui.js"></script>
  
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "images/calendar.gif",
      buttonImageOnly: true
    });
  });
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
            <li class="selected"><a class="has_submenu" href="site.php">AMC</a>
            	<ul>
                	<li><a href="addamc.php">Add AMC</a></li>
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
		<div class="quotation"><center>Add AMC To Clients</center></div>
        <div>
        <form action="" method="post">
        <table class="addemp_tab">
        <tr>
        <td class="l_form">Start Date:</td>
        <td><input type="text" class="q_in" name="a_date" value="<?php  echo date("d-m-Y"); ?>"></td>
        </tr>
        <tr>
        <td class="l_form">AMC:</td>
        <td>
                <select class="a" name="a_amc">
                <option>..Select..</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
                <option>12</option>
                </select>
        </td>
        </tr>
        <tr><td class="l_form">Select Clients:</td>
        <td>
        <select class="a" name="a_clients">
        <?php
			
			$qry_a="select * from clients";
			$res_a=mysql_query($qry_a);
			while($row_a=mysql_fetch_array($res_a))
			{
				echo"<option>";
				echo $row_a[2];
				echo "";
				echo $row_a[3];
				echo"</option>";	
			}

		?>
        </select>
        </td>
        </tr>
             
        </table>
        <div class="addamc_b">
         <input name="a_add" class="formbutton" value=" Add " type="submit" />
         <input name="a_can" class="formbutton" value="Cancel" type="submit" />
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
