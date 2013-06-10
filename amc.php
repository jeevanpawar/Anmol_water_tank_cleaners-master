<?php
	include("include/database.php");
	error_reporting(0);
	$a=$_REQUEST['id'];
	$c_qry_f="select * from amc where c_name='$a'";
	$c_res_f=mysql_query($c_qry_f);
	$row=mysql_fetch_array($c_res_f);
?>
<?php
		if(isset($_REQUEST['add']))
		{
			$n=$row[1];
			$d=$row[3];
			$nn0=$_POST['a1'];
			$nn1=$_POST['a2'];
			$nn2=$_POST['a3'];
			$nn3=$_POST['a4'];
			$nn4=$_POST['a5'];
			$nn5=$_POST['a6'];
			$nn6=$_POST['a7'];
			$nn7=$_POST['a8'];
			$nn8=$_POST['a9'];
			$nn9=$_POST['a10'];
			$nn10=$_POST['a11'];
			$nn11=$_POST['a12'];
			$inq="insert into reminder(r_name,r_des,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12) values('".$n."','".$d."','".$nn0."','".$nn1."','".$nn2."','".$nn3."','".$nn4."','".$nn5."','".$nn6."','".$nn7."','".$nn8."','".$nn9."','".$nn10."','".$nn11."')";
			$resin=mysql_query($inq);
		}
		?>	
<?php
		if(isset($_REQUEST['add1']))
		{
			$n1=$row[1];
			$d1=$row[3];
			$aa0=$_POST['b1'];
			$aa1=$_POST['b2'];
			$aa2=$_POST['b3'];
			$aa3=$_POST['b4'];
			$aa4=$_POST['b5'];
			$aa5=$_POST['b6'];
			$aa6=$_POST['b7'];
			$aa7=$_POST['b8'];
			$aa8=$_POST['b9'];
			$aa9=$_POST['b10'];
			$aa10=$_POST['b11'];
			$aa11=$_POST['b12'];
			$inq1="insert into reminder(r_name,r_des,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12) values('".$n1."','".$d1."','".$aa0."','".$aa1."','".$aa2."','".$aa3."','".$aa4."','".$aa5."','".$aa6."','".$aa7."','".$aa8."','".$aa9."','".$aa10."','".$aa11."')";
			$resin1=mysql_query($inq1);
		}
		?>
        <?php
		if(isset($_REQUEST['add2']))
		{
			$n2=$row[1];
			$d2=$row[3];
			$bb0=$_POST['c1'];
			$bb1=$_POST['c2'];
			$bb2=$_POST['c3'];
			$bb3=$_POST['c4'];
			$bb4=$_POST['c5'];
			$bb5=$_POST['c6'];
			$bb6=$_POST['c7'];
			$bb7=$_POST['c8'];
			$bb8=$_POST['c9'];
			$bb9=$_POST['c10'];
			$bb10=$_POST['c11'];
			$bb11=$_POST['c12'];
			$inq2="insert into reminder(r_name,r_des,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12) values('".$n2."','".$d2."','".$bb0."','".$bb1."','".$bb2."','".$bb3."','".$bb4."','".$bb5."','".$bb6."','".$bb7."','".$bb8."','".$bb9."','".$bb10."','".$bb11."')";
			$resin2=mysql_query($inq2);
		}
		?>
        <?php
		if(isset($_REQUEST['add3']))
		{
			$n3=$row[1];
			$d3=$row[3];
			$cc0=$_POST['d1'];
			$cc1=$_POST['d2'];
			$cc2=$_POST['d3'];
			$cc3=$_POST['d4'];
			$cc4=$_POST['d5'];
			$cc5=$_POST['d6'];
			$cc6=$_POST['d7'];
			$cc7=$_POST['d8'];
			$cc8=$_POST['d9'];
			$cc9=$_POST['d10'];
			$cc10=$_POST['d11'];
			$cc11=$_POST['d12'];
			$inq3="insert into reminder(r_name,r_des,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12) values('".$n3."','".$d3."','".$cc0."','".$cc1."','".$cc2."','".$cc3."','".$cc4."','".$cc5."','".$cc6."','".$cc7."','".$cc8."','".$cc9."','".$cc10."','".$cc11."')";
			$resin3=mysql_query($inq3);
		}
		?>
        <?php
		if(isset($_REQUEST['add4']))
		{
			$n4=$row[1];
			$d4=$row[3];
			$dd0=$_POST['e1'];
			$dd1=$_POST['e2'];
			$dd2=$_POST['e3'];
			$dd3=$_POST['e4'];
			$dd4=$_POST['e5'];
			$dd5=$_POST['e6'];
			$dd6=$_POST['e7'];
			$dd7=$_POST['e8'];
			$dd8=$_POST['e9'];
			$dd9=$_POST['e10'];
			$dd10=$_POST['e11'];
			$dd11=$_POST['e12'];
			$inq4="insert into reminder(r_name,r_des,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12) values('".$n4."','".$d4."','".$dd0."','".$dd1."','".$dd2."','".$dd3."','".$dd4."','".$dd5."','".$dd6."','".$dd7."','".$dd8."','".$dd9."','".$dd10."','".$dd11."')";
			$resin4=mysql_query($inq4);
		}
		?>
        <?php
		if(isset($_REQUEST['add5']))
		{
			$n5=$row[1];
			$d5=$row[3];
			$ee0=$_POST['f1'];
			$ee1=$_POST['f2'];
			$ee2=$_POST['f3'];
			$ee3=$_POST['f4'];
			$ee4=$_POST['f5'];
			$ee5=$_POST['f6'];
			$ee6=$_POST['f7'];
			$ee7=$_POST['f8'];
			$ee8=$_POST['f9'];
			$ee9=$_POST['f10'];
			$ee10=$_POST['f11'];
			$ee11=$_POST['f12'];
			$inq5="insert into reminder(r_name,r_des,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12) values('".$n5."','".$d5."','".$ee0."','".$ee1."','".$ee2."','".$ee3."','".$ee4."','".$ee5."','".$ee6."','".$ee7."','".$ee8."','".$ee9."','".$ee10."','".$ee11."')";
			$resin5=mysql_query($inq5);
		}
		?>
        <?php
		if(isset($_REQUEST['add6']))
		{
			$n6=$row[1];
			$d6=$row[3];
			$ff0=$_POST['g1'];
			$ff1=$_POST['g2'];
			$ff2=$_POST['g3'];
			$ff3=$_POST['g4'];
			$ff4=$_POST['g5'];
			$ff5=$_POST['g6'];
			$ff6=$_POST['g7'];
			$ff7=$_POST['g8'];
			$ff8=$_POST['g9'];
			$ff9=$_POST['g10'];
			$ff10=$_POST['g11'];
			$ff11=$_POST['g12'];
			$inq6="insert into reminder(r_name,r_des,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12) values('".$n6."','".$d6."','".$ff0."','".$ff1."','".$ff2."','".$ff3."','".$ff4."','".$ff5."','".$ff6."','".$ff7."','".$ff8."','".$ff9."','".$ff10."','".$ff11."')";
			$resin6=mysql_query($inq6);
		}
		?>
<html>
<head>

<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
<div id="container">
	    <div id="nav">
    	<ul class="sf-menu dropdown">
        	
        	<li><a href="index.php">Home</a></li>
            <li><a class="has_submenu" href="site.php">Sites</a>
            <ul>
                	<li><a href="siteassgn.php">Assign To</a></li>
                </ul>
            </li>
            <li class="selected"><a class="has_submenu" href="site.php">AMC</a>
            	<ul>
                    <li><a href="amcreport.php">Amc Details</a></li>
                </ul>

            </li>
            <li><a class="has_submenu" href="clients.php">Clients</a>
            	<ul>
                	<li><a href="addclients.php">Add Clients</a></li>
                    <li><a href="addclients.php">AMC Reports</a></li>
                    
                    </ul>
            
            </li>
            <li><a class="has_submenu" href="employee.php">Employees</a>
            		<ul>
                	<li><a href="addepm.php">Add Employee</a></li>
                    <li><a href="employee.php">Employee Details</a></li>
                    </ul>
            
            </li>
            <li><a class="has_submenu" href="invoicedetails.php">Invoice Details</a>
            		<ul>
                	<li><a href="invoice.php">Invoice</a></li>
                    </ul>
            </li>
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
		<div class="quotation"><center>Clients AMC Details</center></div>
        <div>
        <table class="emp_tab1">
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;Start Date:<?php echo $row[2]; ?></td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Client Name : <?php echo $row[1]; ?></td>
        
        </tr>
        
        </table>
		<form action="" method="post">
        <table class="emp_tab1">
        <tr class="emp_header">
        
        </tr>
        
        <table class="emp_tab1">
        <tr class="f">
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Description</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;Next Amc Dates</td>
        </tr>
        
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[3]; ?></td>
        <td>
		
        
		<?php 
		$amc = $row[10];
		$reminder_interval = 12/$amc;
		$a = $reminder_interval * 30;
		$c=0;
		for($i=0; $i<$amc; $i++)
		{
		   $c = $c + $a;
		   $NewDate[$i]=date('d-m-Y', strtotime("+$c days"));
		   echo "&nbsp";
		   echo "<span class='n'>$NewDate[$i]</span>";
		}
		echo "<input type='submit' name='add' value='add'>";
		echo "<input type='hidden' name='a1' value='$NewDate[0]'>";
		echo "<input type='hidden' name='a2' value='$NewDate[1]'>";
		echo "<input type='hidden' name='a3' value='$NewDate[2]'>";
		echo "<input type='hidden' name='a4' value='$NewDate[3]'>";
		echo "<input type='hidden' name='a5' value='$NewDate[4]'>";
		echo "<input type='hidden' name='a6' value='$NewDate[5]'>";
		echo "<input type='hidden' name='a7' value='$NewDate[6]'>";
		echo "<input type='hidden' name='a8' value='$NewDate[7]'>";
		echo "<input type='hidden' name='a9' value='$NewDate[8]'>";
		echo "<input type='hidden' name='a10' value='$NewDate[9]'>";
		echo "<input type='hidden' name='a11' value='$NewDate[10]'>";
		echo "<input type='hidden' name='a12' value='$NewDate[11]'>";
		
		?>
        
        </td>
        </tr>
        
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[4]; ?></td>
        <td>
        
		<?php 
		
		$amc1 = $row[11];
		$reminder_interval1 = 12/$amc1;
		$a1 = $reminder_interval1 * 30;
		for($i=0; $i<$amc1; $i++)
		{
		   $c1 = $c1 + $a1;
		   $NewDate1[$i]=date('d-m-Y', strtotime("+$c1 days"));
		   echo "&nbsp;";
		   echo "<span class='n'>$NewDate1[$i]</span>";
		}	
		echo "<input type='submit' name='add1' value='add'>";
		echo "<input type='hidden' name='b1' value='$NewDate1[0]'>";
		echo "<input type='hidden' name='b2' value='$NewDate1[1]'>";
		echo "<input type='hidden' name='b3' value='$NewDate1[2]'>";
		echo "<input type='hidden' name='b4' value='$NewDate1[3]'>";
		echo "<input type='hidden' name='b5' value='$NewDate1[4]'>";
		echo "<input type='hidden' name='b6' value='$NewDate1[5]'>";
		echo "<input type='hidden' name='b7' value='$NewDate1[6]'>";
		echo "<input type='hidden' name='b8' value='$NewDate1[7]'>";
		echo "<input type='hidden' name='b9' value='$NewDate1[8]'>";
		echo "<input type='hidden' name='b10' value='$NewDate1[9]'>";
		echo "<input type='hidden' name='b11' value='$NewDate1[10]'>";
		echo "<input type='hidden' name='b12' value='$NewDate1[11]'>";
		?>
        </td>
        </tr>
       
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[5]; ?></td>
        <td>
		
		<?php 
		
		$amc2 = $row[12];
		$reminder_interval2 = 12/$amc2;
		$a2 = $reminder_interval2 * 30;
		for($i=0; $i<$amc2; $i++)
		{
		   $c2 = $c2 + $a2;
		   $NewDate2[$i]=date('d-m-Y', strtotime("+$c2 days"));
		   echo "&nbsp;";
		   echo "<span class='n'>$NewDate2[$i]</span>";
		}
		echo "<input type='submit' name='add2' value='add'>";
		echo "<input type='hidden' name='c1' value='$NewDate2[0]'>";
		echo "<input type='hidden' name='c2' value='$NewDate2[1]'>";
		echo "<input type='hidden' name='C3' value='$NewDate2[2]'>";
		echo "<input type='hidden' name='C4' value='$NewDate2[3]'>";
		echo "<input type='hidden' name='C5' value='$NewDate2[4]'>";
		echo "<input type='hidden' name='c6' value='$NewDate2[5]'>";
		echo "<input type='hidden' name='c7' value='$NewDate2[6]'>";
		echo "<input type='hidden' name='c8' value='$NewDate2[7]'>";
		echo "<input type='hidden' name='c9' value='$NewDate2[8]'>";
		echo "<input type='hidden' name='C10' value='$NewDate2[9]'>";
		echo "<input type='hidden' name='C11' value='$NewDate2[10]'>";
		echo "<input type='hidden' name='c12' value='$NewDate2[11]'>";
		?>
        </td>
        </tr>
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[6]; ?></td>
        <td>
		
		<?php 
		
		$amc3 = $row[13];
		$reminder_interval3 = 12/$amc3;
		$a3 = $reminder_interval3 * 30;
		for($i=0; $i<$amc3; $i++)
		{
		   $c3 = $c3 + $a3;
		   $NewDate3[$i]=date('d-m-Y', strtotime("+$c3 days"));
		   echo "&nbsp;";
		   echo "<span class='n'>$NewDate3[$i]</span>";
		}
		echo "<input type='submit' name='add3' value='add'>";
		echo "<input type='hidden' name='d1' value='$NewDate3[0]'>";
		echo "<input type='hidden' name='d2' value='$NewDate3[1]'>";
		echo "<input type='hidden' name='d3' value='$NewDate3[2]'>";
		echo "<input type='hidden' name='d4' value='$NewDate3[3]'>";
		echo "<input type='hidden' name='d5' value='$NewDate3[4]'>";
		echo "<input type='hidden' name='d6' value='$NewDate3[5]'>";
		echo "<input type='hidden' name='d7' value='$NewDate3[6]'>";
		echo "<input type='hidden' name='d8' value='$NewDate3[7]'>";
		echo "<input type='hidden' name='d9' value='$NewDate3[8]'>";
		echo "<input type='hidden' name='d10' value='$NewDate3[9]'>";
		echo "<input type='hidden' name='d11' value='$NewDate3[10]'>";
		echo "<input type='hidden' name='d12' value='$NewDate3[11]'>";
		?>
        </td>
        </tr>
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[7]; ?></td>
        <td>
		
		<?php 
		
		$amc4 = $row[14];
		$reminder_interval4 = 12/$amc4;
		$a4 = $reminder_interval4 * 30;
		for($i=0; $i<$amc4; $i++)
		{
		   $c4 = $c4 + $a4;
		   $NewDate4[$i]=date('d-m-Y', strtotime("+$c4 days"));
		   echo "&nbsp;";
		   echo "<span class='n'>$NewDate4[$i]</span>";
		}
		echo "<input type='submit' name='add4' value='add'>";
		echo "<input type='hidden' name='e1' value='$NewDate4[0]'>";
		echo "<input type='hidden' name='e2' value='$NewDate4[1]'>";
		echo "<input type='hidden' name='e3' value='$NewDate4[2]'>";
		echo "<input type='hidden' name='e4' value='$NewDate4[3]'>";
		echo "<input type='hidden' name='e5' value='$NewDate4[4]'>";
		echo "<input type='hidden' name='e6' value='$NewDate4[5]'>";
		echo "<input type='hidden' name='e7' value='$NewDate4[6]'>";
		echo "<input type='hidden' name='e8' value='$NewDate4[7]'>";
		echo "<input type='hidden' name='e9' value='$NewDate4[8]'>";
		echo "<input type='hidden' name='e10' value='$NewDate4[9]'>";
		echo "<input type='hidden' name='e11' value='$NewDate4[10]'>";
		echo "<input type='hidden' name='e12' value='$NewDate4[11]'>";
		?>
        </td>
        </tr>
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[8]; ?></td>
        <td>
		
		<?php 
		
		$amc5 = $row[15];
		$reminder_interval5 = 12/$amc5;
		$a5 = $reminder_interval5 * 30;
		for($i=0; $i<$amc5; $i++)
		{
		   $c5 = $c5 + $a5;
		   $NewDate5[$i]=date('d-m-Y', strtotime("+$c5 days"));
		   echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<span class='n'>$NewDate5[$i]</span>";
		}
		echo "<input type='submit' name='add5' value='add'>";
		echo "<input type='hidden' name='f1' value='$NewDate5[0]'>";
		echo "<input type='hidden' name='f2' value='$NewDate5[1]'>";
		echo "<input type='hidden' name='f3' value='$NewDate5[2]'>";
		echo "<input type='hidden' name='f4' value='$NewDate5[3]'>";
		echo "<input type='hidden' name='f5' value='$NewDate5[4]'>";
		echo "<input type='hidden' name='f6' value='$NewDate5[5]'>";
		echo "<input type='hidden' name='f7' value='$NewDate5[6]'>";
		echo "<input type='hidden' name='f8' value='$NewDate5[7]'>";
		echo "<input type='hidden' name='f9' value='$NewDate5[8]'>";
		echo "<input type='hidden' name='f10' value='$NewDate5[9]'>";
		echo "<input type='hidden' name='f11' value='$NewDate5[10]'>";
		echo "<input type='hidden' name='f12' value='$NewDate5[11]'>";
		?>
        </td>
        </tr>
        <tr class="emp_header">
        <td width="350">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row[9]; ?></td>
        <td>
		
		<?php 
		
		$amc6 = $row[16];
		$reminder_interval6 = 12/$amc6;
		$a6 = $reminder_interval6 * 30;
		for($i=0; $i<$amc6; $i++)
		{
		   $c6 = $c6 + $a6;
		   $NewDate6[$i]=date('d-m-Y', strtotime("+$c6 days"));
		   echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		   echo "<span class='n'>$NewDate6[$i]</span>";
		}
		echo "<input type='submit' name='add6' value='add'>";
		echo "<input type='hidden' name='g1' value='$NewDate6[0]'>";
		echo "<input type='hidden' name='g2' value='$NewDate6[1]'>";
		echo "<input type='hidden' name='g3' value='$NewDate6[2]'>";
		echo "<input type='hidden' name='g4' value='$NewDate6[3]'>";
		echo "<input type='hidden' name='g5' value='$NewDate6[4]'>";
		echo "<input type='hidden' name='g6' value='$NewDate6[5]'>";
		echo "<input type='hidden' name='g7' value='$NewDate6[6]'>";
		echo "<input type='hidden' name='g8' value='$NewDate6[7]'>";
		echo "<input type='hidden' name='g9' value='$NewDate6[8]'>";
		echo "<input type='hidden' name='g10' value='$NewDate6[9]'>";
		echo "<input type='hidden' name='g11' value='$NewDate6[10]'>";
		echo "<input type='hidden' name='g12' value='$NewDate6[11]'>";
		?>
        </td>
        </tr>
         
        </table>
        </form>
        </div>
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
