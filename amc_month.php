<?php
	error_reporting(0);
	include("include/database.php");
	$up=$_REQUEST['id'];
	$up_qry="select * from reminder where r_id=".$up;
	$up_res=mysql_query($up_qry);
	$row_up=mysql_fetch_array($up_res);
	
	if(isset($_REQUEST['e_can']))
	{
		header("location:montly.php");
	}
	
	if(isset($_REQUEST['e_up']))
	{	
		$up_r=$_REQUEST['id'];
		$t1=$_POST['r_date'];
		$t2=date('Y-m-d', strtotime($t1));
		$id=$row_up[1];
		$qry_up="update reminder SET r_date='".$t2."' where r_id=".$up_r;
		$res_up=mysql_query($qry_up);
		if($res_up)
		{
			header("location:montly.php");
		}
		else
		{
			echo "error";
		}
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<div class="quotation"><center>Reminder Update</center></div>
        <div>
        <form action="" method="post">
        <table class="addemp_re">
        <tr>
        <td class="l_form">Invoice No:</td>
        <td><input type="text" class="q_in" name="eu_name" value="<?php echo $row_up[1]; ?>"></td>
        </tr>
        
        <tr>
        <td class="l_form">Date:</td>
        <td><input type="text" class="q_in" name="r_date" value="<?php echo date('d-m-Y', strtotime($row_up[4])); ?>"></td>
        </tr>
        
        </div>
        </table>
        <div class="addemp_r">
         <input name="e_up" class="formbutton" value=" Update " type="submit" />
         <input name="e_can" class="formbutton" value="Cancel" type="submit" />
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
