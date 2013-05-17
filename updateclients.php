<?php
	include("include/database.php");
	$c_up=$_REQUEST['c_id2'];
	$c_qry_f="select * from clients where c_id=".$c_up;
	$c_res_f=mysql_query($c_qry_f);
	$c_row=mysql_fetch_array($c_res_f);
?>
<?php
	if(isset($_REQUEST['can']))
	{
		header("location:clients.php");
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
            

            <li class="selected"><a class="has_submenu" href="clients.php">Clients</a>
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
		<div class="quotation"><center>Update Client Details</center></div>
        <div>
        <form action="" method="post">
        <table class="q_clients">
                <tr><td class="l_form">First Name:</td><td><input class="q_in" type="text" value="<?php echo $c_row[2]; ?>" /></td></tr>
                <tr><td class="l_form">Last Name:</td><td><input class="q_in" type="text" value="<?php echo $c_row[3]; ?>"/></td></tr>
                <tr><td class="l_form" valign="top">Address:</td><td><textarea class="q_add"><?php echo $c_row[4]; ?></textarea></td></tr>
                <tr><td class="l_form">City:</td><td><input class="q_in" type="text" value="<?php echo $c_row[5]; ?>"/></td></tr>
                <tr><td class="l_form">Pin Code:</td><td><input class="q_in" type="text" value="<?php echo $c_row[7]; ?>" /></td></tr>
                <tr><td class="l_form">Email Id:</td><td><input class="q_in" type="text" value="<?php echo $c_row[10]; ?>"/></td></tr>
                </table>
                <table class="q_clients2">
                <tr><td class="l_form">Phone No:</td><td><input class="q_in" type="text" value="<?php echo $c_row[8]; ?>"/></td></tr>
                <tr><td class="l_form">Mobile No:</td><td><input class="q_in" type="text" value="<?php echo $c_row[9]; ?>" /></td></tr>
                <tr><td class="l_form">Date:</td><td><input class="q_in" type="text" name="c_state" value="<?php  echo date("d-m-Y"); ?>"/></td></tr>
                <tr>
                <td class="l_form">Site Type:</td>
                <td>
                <select class="a">
                <option>..Select..</option>
                <option>Residential</option>
                <option>Domestic</option>
                <option>Commercial</option>
                <option>Industrial</option>
                <option>Government</option>
                <option>Municipal</option>
                </select>
                </td>
                </tr>
                <tr><td class="l_form">OT:</td>
                <td>
                <select class="a">
                <option>..Select..</option>
                <option>0</option>
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
                </select>
                </td>
                </tr>
                <tr><td class="l_form">UT:</td>
                <td>
                <select class="a">
                <option>..Select..</option>
                <option>0</option>
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
                </select>
                </td>
                </table>
        <div class="addclients_b">
         <input name="c_up" class="formbutton" value=" Add " type="submit" />
         <input name="can" class="formbutton" value="Cancel" type="submit" />
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
