<?php
	include("include/database.php");
	$c_up=$_REQUEST['c_id3'];
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
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="styles2.css" type="text/css" />

</head>

<body>
<div id="container">
    <div id="sub-header">
	
    <?php
	include("header.php");
	?>
<br />
		<div class="quotation"><center>Client Details</center></div>
        <div>
        <form action="" method="post">
        <table class="tab_1">
                <tr><td class="l_form">First Name:</td><td><label><?php echo $c_row[2]; ?></label></td></tr>
                <tr><td class="l_form">Last Name:</td><td><label><?php echo $c_row[3]; ?></label></td></tr>
                <tr><td class="l_form" valign="top">Address:</td><td><label><?php echo $c_row[4]; ?></label></td></tr>
                <tr><td class="l_form">City:</td><td><label><?php echo $c_row[5]; ?></label></td></tr>
                <tr><td class="l_form">Pin Code:</td><td><label><?php echo $c_row[6]; ?></label></td></tr>
                <tr><td class="l_form">Company Name:</td><td><label><?php echo $c_row[11]; ?></label></td></tr>
                </table>
                <table class="tab_2">
                <tr><td class="l_form">Email Id:</td><td><label><?php echo $c_row[9]; ?></label></td></tr>
                <tr><td class="l_form">Phone No:</td><td><label><?php echo $c_row[7]; ?></label></td></tr>
                <tr><td class="l_form">Mobile No:</td><td><label><?php echo $c_row[8]; ?></label></td></tr>
                <tr><td class="l_form">Date:</td><td><label><?php  echo date("d-m-Y"); ?></label></td></tr>
                <tr>
                <td class="l_form">Site Type:</td>
                <td><label><?php echo $c_row[10]; ?></label></td>
                </tr>
                
                
                </table>
        
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
