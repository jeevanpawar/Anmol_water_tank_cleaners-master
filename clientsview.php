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
                <tr><td class="l_form">Kind Attn I:</td><td><input type="text" class="q_in" value="<?php echo $c_row[2]; ?>" readonly></td></tr>
                <tr><td class="l_form">Kind Attn II:</td><td><input type="text" class="q_in" value="<?php echo $c_row[3]; ?>" readonly></td></tr>
                <tr><td class="l_form">Address:</td><td><textarea class="q_add" readonly><?php echo $c_row[4]; ?></textarea></td></tr>
                <tr><td class="l_form">City:</td><td><input type="text" class="q_in" readonly value="<?php echo $c_row[5]; ?>"></td></tr>
                <tr><td class="l_form">Pin Code:</td><td><input type="text" class="q_in" readonly value="<?php echo $c_row[6]; ?>"></td></tr>
                <tr><td class="l_form">Company Name:</td><td><input type="text" class="q_in" readonly value="<?php echo $c_row[11]; ?>"></td></tr>
                </table>
                <table class="tab_2">
                <tr><td class="l_form">Mobile No:</td><td><input type="text" class="q_in" readonly value="<?php echo $c_row[8]; ?>"></td></tr>
                <tr><td class="l_form">Mobile No:</td><td><input type="text" class="q_in" readonly value="<?php echo $c_row[12]; ?>"></td></tr>
                <tr><td class="l_form">Email Id:</td><td><input type="text" class="q_in" readonly value="<?php echo $c_row[9]; ?>"></td></tr>
                <tr><td class="l_form">Phone No:</td><td><input type="text" class="q_in" readonly value="<?php echo $c_row[7]; ?>"></td></tr>
                <tr><td class="l_form">Date:</td><td><input type="text" class="q_in" readonly value="<?php  echo $c_row[1]; ?>"></td></tr>
                <tr>
                <td class="l_form">Site Type:</td>
                <td><input type="text" class="q_in" readonly value="<?php echo $c_row[10]; ?>"></td>
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
