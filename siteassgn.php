<?php

	include("include/database.php");
	$id=$_REQUEST['id'];
	$qry="select * from invoice where i_id=".$id;
	$res=mysql_query($qry);
	$row=mysql_fetch_array($res);
	
	if(isset($_REQUEST['s_add']))
	{	
		$o='1';
		$qry_up="update invoice SET assign='$o' where i_id='$id'";
		$res_up=mysql_query($qry_up);
		
		$s_to=$_POST['s'];
		$s_t1=$_POST['e1'];
		$s_t2=$_POST['e2'];
		$s_t3=$_POST['e3'];
		$s_t4=$_POST['e4'];
		$s_t5=$_POST['e5'];
		$s_t6=$_POST['a_name'];
		$s_t7=$_POST['i_id'];
		$s_t8=$_POST['a_name2'];
		$s_t9=$_POST['c_name'];
		$s_qry="insert into site(s_date,e1,e2,e3,e4,e5,s_add,i_id,s_add2,c_name) values('".$s_to."','".$s_t1."','".$s_t2."','".$s_t3."','".$s_t4."','".$s_t5."','".$s_t6."','".$s_t7."','".$s_t8."','".$s_t9."')";
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
        <td class="l_form">Invoice No:</td>
        <td><input type="text" class="q_in" name="i_id" value="<?php  echo $id; ?>"></td>
        </tr>
        
        <tr>
        <td class="l_form">Date:</td>
        <td><input type="text" class="q_in" name="s" value="<?php  echo date("d-m-Y"); ?>"></td>
        </tr>
        
        <tr>
        <td class="l_form">Kind Attn I:</td>
        <td><input type="text" class="q_in" name="a_name" value="<?php  echo $row[3]; ?>"></td>
        </tr>
        
        <tr>
        <td class="l_form">Kind Attn II:</td>
        <td><input type="text" class="q_in" name="a_name2" value="<?php  echo $row[8]; ?>"></td>
        </tr>
        
        <tr>
        <td class="l_form">Company Name:</td>
        <td><input type="text" class="q_in" name="c_name" value="<?php  echo $row[9]; ?>"></td>
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
