<?php

	include("include/database.php");
	
	if(isset($_REQUEST['s_up']))
	{	
		$s_up=$_REQUEST['id_u'];
		$s_to=$_POST['s'];
		$s_t1=$_POST['n'];
		$s_t2=$_POST['b'];
			
		$s_qry="update site SET s_date='".$s_to."', e_name='".$s_t1."', s_add='".$s_t2."' where s_id=".$s_up;
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
            <li class="selected"><a class="has_submenu" href="site.php">Sites</a>
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
		<div class="quotation"><center>Assign To</center></div>
        <div>
        <?php
			$su=$_REQUEST['id_u'];
			$s_qry="select * from site where s_id=".$su;
			$s_res=mysql_query($s_qry);
			$s_row=mysql_fetch_array($s_res);
		?>
        <form action="" method="post">
        <table class="addemp_tab">
        <tr>
        <td class="l_form">Date:</td>
        <td><input type="text" class="q_in" id="datepicker" name="s" value="<?php echo $s_row[1]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Select Emp Name:</td>
        <td>
        <select class="a" name="n">
         <?php
			
			$qry_a="select * from emp";
			$res_a=mysql_query($qry_a);
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
			
			$qry_a="select * from clients";
			$res_a=mysql_query($qry_a);
			while($row_a=mysql_fetch_array($res_a))
			{
				echo"<option value='$row_a[4]'>";
				echo $row_a[2];
				echo "";
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
         <input name="s_up" class="formbutton" value=" Update " type="submit" />
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
