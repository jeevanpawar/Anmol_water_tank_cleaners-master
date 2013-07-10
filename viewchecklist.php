<?php
	include("include/database.php");
	error_reporting(0);
	$v=$_REQUEST['id_v'];	
	$qry_c="select * from checklist where c_id='$v'";
	$res_c=mysql_query($qry_c);
	$row_c=mysql_fetch_array($res_c);
	
	$qry_ut="select * from ut where c_id='$v'";
	$res_ut=mysql_query($qry_ut);
	
	$qry_ot="select * from ot where c_id='$v'";
	$res_ot=mysql_query($qry_ot);
	
?>
<?php
	if(isset($_REQUEST['can']))
	{
		header("location:clients.php");
	}
?>
<html>
<head>
<title>Anmol Water Tank Cleners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
<div id="container">
	<div id="sub-header">
    <div class="quo">
    	<br />
		<div class="quotation"><center>Checklist</center></div>
        <div>
        <form action="" method="post">
        <table class="checklist">
        <tr class="emp_header">
        <td width="250">&nbsp;</td><td width="60">Yes</td><td>Remarks</td>
        </tr>
        <tr><td></td></tr>
        <tr>
        <td class="l_form" align="left">ELEC PT</td><td><input type="text" class="check" name="c1" value="<?php echo $row_c[3]; ?>" /></td><td><input type="text" class="c_in" name="r1" value="<?php echo $row_c[17]; ?>" /></td>
        </tr>
        <tr>
        <td class="l_form" align="left">H2O PT</td><td><input type="text" class="check" name="c2" value="<?php echo $row_c[4]; ?>"/></td><td><input type="text" class="c_in" name="r2" value="<?php echo $row_c[18]; ?>" /></td>
        </tr>
        <tr>
        <td class="l_form" align="left">OT LADDER</td><td><input type="text" class="check" name="c3" value="<?php echo $row_c[5]; ?>"/></td><td><input type="text" class="c_in" name="r3" value="<?php echo $row_c[19]; ?>" /></td>
        </tr>
        <tr>
        <td class="l_form" align="left">UT LADDER</td><td><input type="text" class="check" name="c4" value="<?php echo $row_c[6]; ?>"/></td><td><input type="text" class="c_in" name="r4" value="<?php echo $row_c[20]; ?>"/></td>
        </tr>
        <tr>
        <td class="l_form" align="left">H2O PIPE SIZE</td><td><input type="text" class="check" name="c5" value="<?php echo $row_c[7]; ?>"/></td><td><input type="text" class="c_in" name="r5" value="<?php echo $row_c[21]; ?>" /></td>
        </tr>
        <tr>
        <td class="l_form" align="left">TANK SIZE UT</td><td><input type="text" class="check" name="c6" value="<?php echo $row_c[8]; ?>"/></td><td><?php 
		while($row_ut=mysql_fetch_array($res_ut))
		{
			echo "<input type='text' class='c_in' value='$row_ut[2]'>";
		}
		?></td>
        </tr>
        <tr>
        <td class="l_form" align="left">TANK SIZE OT</td><td><input type="text" class="check" name="c7" value="<?php echo $row_c[9]; ?>"/></td><td><?php 
		while($row_ot=mysql_fetch_array($res_ot))
		{
			echo "<input type='text' class='c_in' value='$row_ot[2]'>";
		}
		?></td>
        </tr>
            
        <tr>
        <td class="l_form" align="left">LOAD SHEDDING</td><td><input type="text" class="check" name="c8" value="<?php echo $row_c[10]; ?>"/></td><td><input type="text" class="c_in" name="r8" value="<?php echo $row_c[28]; ?>"/></td>
        </tr>
        <tr>
        <td class="l_form" align="left">H2O SCHEDULE</td><td><input type="text" class="check" name="c9" value="<?php echo $row_c[11]; ?>"/></td><td><input type="text" class="c_in" name="r9" value="<?php echo $row_c[29]; ?>"/></td>
        </tr>
        <tr>
        <td class="l_form" align="left">LIFT</td><td><input type="text" class="check" name="c10" value="<?php echo $row_c[12]; ?>"/></td><td><input type="text" class="c_in" name="r10" value="<?php echo $row_c[30]; ?>"/></td>
        </tr>
        <tr>
        <td class="l_form" align="left">FLOORS</td><td><input type="text" class="check" name="c11" value="<?php echo $row_c[13]; ?>"/></td><td><input type="text" class="c_in" name="r11" value="<?php echo $row_c[31]; ?>"/></td>
        </tr>
        <tr>
        <td class="l_form" align="left">SITE</td><td ><input type="text" class="check" name="c12" value="<?php echo $row_c[14]; ?>"/></td><td><input type="text" class="c_in" name="r12" value="<?php echo $row_c[32]; ?>"/></td>
        </tr>
        </table>
        <table class="c_last">
        <tr>
        <td class="l_form">Note:</td><td class="l_form">Representative</td>
        </tr>
        <tr>
        <td><textarea class="c_add" name="c13"><?php echo $row_c[15]; ?></textarea></td>
        <td valign="top">
        <input type="text" class="q_in" value="<?php echo $row_c[16]; ?>"></td>
        </td>
        </tr>
        </table>
        
        <div class="addclients_can">
         <input name="can" class="formbutton" value="Cancel" type="submit" />
        </div>
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
