<?php

	include("include/database.php");
	
	if(isset($_REQUEST['s_add']))
	{	
		$s_to=$_POST['s'];
		$s_t1=$_POST['e1'];
		$s_t2=$_POST['e2'];
		$s_t3=$_POST['e3'];
		$s_t4=$_POST['e4'];
		$s_t5=$_POST['e5'];
		$s_t6=$_POST['b'];
			
		$s_qry="insert into site(s_date,e1,e2,e3,e4,e5,s_add) values('".$s_to."','".$s_t1."','".$s_t2."','".$s_t3."','".$s_t4."','".$s_t5."','".$s_t6."')";
		$s_res=mysql_query($s_qry);
		if($s_res)
		{
			header("location:site.php");
		}
		else
		{
			echo "error";
		}
	}
	if(isset($_REQUEST['s_can']))
	{
		header("location:site.php");
	}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
<div id="container">
	    <div id="nav">
    	<ul class="sf-menu dropdown">
        	
        	<li><a href="home.php">Home</a></li>
            <li class="selected"><a class="has_submenu" href="site.php">Sites</a>
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
		<div class="quotation"><center>Assign To</center></div>
        <div>
        <form action="" method="post">
        <table class="addemp_tab">
        <tr>
        <td class="l_form">Date:</td>
        <td><input type="text" class="q_in" name="s" value="<?php  echo date("d-m-Y"); ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Select Emp Name:</td>
        <td>
        <select class="a" name="e1">
        
         <?php
			
			$qry_a="select * from emp";
			$res_a=mysql_query($qry_a);
			echo "<option>";
			echo " ";
			echo "</option>";
			while($row_a=mysql_fetch_array($res_a))
			{	echo"<option>";
				echo $row_a[1];
				echo"</option>";	
			}

		?>
        </select>
        </td>
        </tr>
        <tr>
        <td class="l_form"></td>
        <td>
        <select class="a" name="e2">
         <?php
			
			$qry_a="select * from emp";
			$res_a=mysql_query($qry_a);
			echo "<option>";
			echo " ";
			echo "</option>";
			while($row_a=mysql_fetch_array($res_a))
			{
				echo"<option>";
				echo $row_a[1];
				echo"</option>";	
			}

		?>
        </select>
        </td>
        </tr>
        <tr>
        <td class="l_form"></td>
        <td>
        <select class="a" name="e3">
         <?php
			
			$qry_a="select * from emp";
			$res_a=mysql_query($qry_a);
			echo "<option>";
			echo " ";
			echo "</option>";
			while($row_a=mysql_fetch_array($res_a))
			{
				echo"<option>";
				echo $row_a[1];
				echo"</option>";	
			}

		?>
        </select>
        </td>
        </tr>
        <tr>
        <td class="l_form"></td>
        <td>
        <select class="a" name="e4">
         <?php
			
			$qry_a="select * from emp";
			$res_a=mysql_query($qry_a);
			echo "<option>";
			echo " ";
			echo "</option>";
			while($row_a=mysql_fetch_array($res_a))
			{
				echo"<option>";
				echo $row_a[1];
				echo"</option>";	
			}

		?>
        </select>
        </td>
        </tr>
        <tr>
        <td class="l_form"></td>
        <td>
        <select class="a" name="e5">
         <?php
			
			$qry_a="select * from emp";
			$res_a=mysql_query($qry_a);
			echo "<option>";
			echo " ";
			echo "</option>";
			while($row_a=mysql_fetch_array($res_a))
			{
				echo"<option>";
				echo $row_a[1];
				echo"</option>";	
			}

		?>
        </select>
        </td>
        </tr>
        <tr>
        <td class="l_form">Select Clients:</td>
        <td>
       
        <select class="a" name="b">
         <?php
			
			$qry_a="select * from clients order by c_id desc";
			$res_a=mysql_query($qry_a);
				
			while($row_a=mysql_fetch_array($res_a))
			{
				echo"<option>";
				echo $row_a[2];
				echo " ";
				echo $row_a[3];
				echo"</option>";	
			}

		?>
        </select>
        </td>
        </tr>
        <tr>
        
        </table>
        <div class="addemp_b">
         <input name="s_add" class="formbutton" value=" Assign " type="submit" />
         <input name="s_can" class="formbutton" value="Cancel" type="submit" />
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
