<?php
	error_reporting(0);
	include("include/database.php");
	$id=$_REQUEST['id'];
	$id2=$_REQUEST['id2'];
	
	$i_date=date('Y-m-d',strtotime($id));
	$qry="select * from invoice where i_id=".$id2;
	$res=mysql_query($qry);
	$row=mysql_fetch_array($res);
	
	$qry1="select * from invoice where i_id=".$id2;
	$res1=mysql_query($qry1);
	
	
	$up_qry="select * from reminder where r_id=".$up;
	$up_res=mysql_query($up_qry);
	$row_up=mysql_fetch_array($up_res);
	
	if(isset($_REQUEST['e_can']))
	{
		header("location:reciept_detail.php?id=$id2");
	}
	
	if(isset($_REQUEST['e_up']))
	{	
		$up=$_REQUEST['id'];
		$i_id=$_POST['i_id'];
		$r_name=$_POST['r_name'];
		$r_des=$_POST['c_name'];
		$t1=$_POST['r_date'];
		$date=date('Y-m-d', strtotime($t1));
		$ad=$_POST['c_add'];
		$qry_re="insert into reciept(i_id,d_id,r_name,r_des,r_date,r_address,re_date) values('".$i_id."','".$up."','".$r_name."','".$r_des."','".$date."','".$ad."','".$i_date."')";
		$res_re=mysql_query($qry_re);
		
		$u='*';
		
		$qry_up="update reminder SET r_r='".$u."' where r_id=".$up;
		$res_up=mysql_query($qry_up);
		
		if($res_re)
		{
			header("location:reciept_detail.php?id=$id2");
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
		<div class="quotation"><center>Reciept Details</center></div>
        <div>
        <form action="" method="post">
        <table class="addemp_re">
        <tr>
        <td class="l_form">Invoice Ref. No:</td>
        <td><input type="text" class="q_in" name="i_id" readonly="" value="<?php echo $id2; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Kind Attn:</td>
        <td>
        <select name="r_name">
        <?php
		while($row1=mysql_fetch_array($res1))
		{
		echo "<option>";
		echo  $row1[3];
		echo "</option>";
		echo "<option>";
		echo  $row1[8];
		echo "</option>";
		}
		?>
        </select>
        </td>
        </tr>
        <tr>
        <td class="l_form">Company Name:</td>
        <td><input type="text" class="q_in" name="c_name" value="<?php echo $row[9]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Client Address:</td>
        <td><textarea name="c_add" class="q_add"><?php echo $row[4]; ?></textarea></td>
        </tr>
        <tr>
        <td class="l_form">Reciept Date:</td>
        <td><input type="text" class="q_in" name="r_date" value="<?php echo date('d-m-Y'); ?>"></td>
        </tr>
        
        
        
        </div>
        </table>
        <div class="addemp_reciept">
         <input name="e_up" class="formbutton" value=" Add " type="submit" />
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
