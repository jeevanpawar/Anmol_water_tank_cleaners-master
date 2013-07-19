<?php
	
	error_reporting(0);
	include("include/database.php");
	
	if(isset($_REQUEST['s_add']))
	{	
		$s_up=$_REQUEST['id_u'];
		$s_to=$_POST['s'];
		$s_t1=$_POST['e1'];
		$s_t2=$_POST['e2'];
		$s_t3=$_POST['e3'];
		$s_t4=$_POST['e4'];
		$s_t5=$_POST['e5'];
			
		$s_qry="update site SET s_date='".$s_to."', e1='".$s_t1."', e2='".$s_t2."', e3='".$s_t3."', e4='".$s_t4."', e5='".$s_t5."' where s_id=".$s_up;
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
<link rel="stylesheet" href="styles2.css" type="text/css" />

</head>

<body>
<div id="container">
    <div id="sub-header">
	
    <?php
	include("header.php");
	?>
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
        <?php
			
			$i=$_REQUEST['id_u'];
			$qry="select * from site where s_id='$i'";
			$res=mysql_query($qry);
			$row=mysql_fetch_array($res);
		?>
        <tr>
        <td class="l_form">Client Name:</td>
        <td>
       	<input type="text" class="q_in" value="<?php echo $row[7]; ?>">
        </td>
        </tr>
        <tr>
        
        </table>
        <div class="addemp_b">
         <input name="s_add" class="formbutton" value=" Update " type="submit" />
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
