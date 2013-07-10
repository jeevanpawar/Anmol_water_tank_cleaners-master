<?php
include("include/database.php");
error_reporting(0);
if(isset($_REQUEST['submit']))
{	
	$a=$_POST['ut'];
	$b = count($a);
	for($i=0; $i<$b; $i++)
	{
		$id1=$_REQUEST['id_a'];
		$q_d=$_POST['ut'][$i];
		$qry="insert into ut(ut,c_id) values('".$q_d."','".$id1."')";
		$res=mysql_query($qry);
		
	}
	$c=$_POST['ot'];
	$d = count($c);
	for($j=0; $j<$d; $j++)
	{
		$id2=$_REQUEST['id_a'];	
		$q_d2=$_POST['ot'][$j];
		$qry1="insert into ot(ot,c_id) values('".$q_d2."','".$id2."')";
		$res1=mysql_query($qry1);
		
	}

	$c=$_REQUEST['id_a'];
	$d=date('d-m-Y');
	$c1=$_POST['c1'];
	$c2=$_POST['c2'];
	$c3=$_POST['c3'];
	$c4=$_POST['c4'];
	$c5=$_POST['c5'];
	$c6=$_POST['c6'];
	$c7=$_POST['c7'];
	$c8=$_POST['c8'];
	$c9=$_POST['c9'];
	$c10=$_POST['c10'];
	$c11=$_POST['c11'];
	$c12=$_POST['c12'];
	$c13=$_POST['c13'];
	$c14=$_POST['c14'];	
	$r1=$_POST['r1'];
	$r2=$_POST['r2'];
	$r3=$_POST['r3'];
	$r4=$_POST['r4'];
	$r5=$_POST['r5'];
	$r6=$_POST['r6'];
	$r7=$_POST['r7'];
	$r8=$_POST['r8'];
	$r9=$_POST['r9'];
	$r10=$_POST['r10'];
	$r11=$_POST['r11'];
	$r12=$_POST['r12'];
	
	$c_qry="insert into checklist(c_id,c_date,elec,h2o,ot,ut,pipesize,tanksizeut,tanksizeot,loads,schedule,lift,floors,site,note,representative,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12) values('".$c."','".$d."','".$c1."','".$c2."','".$c3."','".$c4."','".$c5."','".$c6."','".$c7."','".$c8."','".$c9."','".$c10."','".$c11."','".$c12."','".$c13."','".$c14."','".$r1."','".$r2."','".$r3."','".$r4."','".$r5."','".$r6."','".$r7."','".$r8."','".$r9."','".$r10."','".$r11."','".$r12."')";
	$c_res=mysql_query($c_qry);
	if($c_res)
	{
		header("location:clients.php");
	}
	else
	{
		echo "error";
	}
}
if(isset($_REQUEST['can']))
{
	header("location:clients.php");
}

?>
<?php
	$qry_emp="select * from emp";
	$res_emp=mysql_query($qry_emp);
?>
<html>
<head>
<title>Anmol Water Tank Cleners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<script>
 var counter = 1;
 function add_phone_field()
 {
  var obj = document.getElementById("phone");
  var data = obj.innerHTML;
  data += "<input class='c_a' type='text' name='ut["+counter+"]' id='person_phone"+counter+"' />";
  obj.innerHTML = data;
  counter++;
  }
 </script>

<script>
 var counter1 = 1;
 function add_phone_field1()
 {
  var obj1 = document.getElementById("phone1");
  var data1 = obj1.innerHTML;
  data1 += "<input class='c_a' type='text' name='ot["+counter1+"]' id='person_phone"+counter1+"' />";
  obj1.innerHTML = data1;
  counter1++;
  }
 </script>
			
</head>

<body>
<div id="container">
    <?php
		include("header.php");
	?>
    
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
        <td class="l_form" align="left">ELEC PT</td><td><input type="checkbox" name="c1" value="Yes" /></td><td><input type="text" class="c_in" name="r1" /></td>
        </tr>
        <tr>
        <td class="l_form" align="left">H2O PT</td><td><input type="checkbox" name="c2" value="Yes"/></td><td><input type="text" class="c_in" name="r2" /></td>
        </tr>
        <tr>
        <td class="l_form" align="left">OT LADDER</td><td><input type="checkbox" name="c3" value="Yes"/></td><td><input type="text" class="c_in" name="r3" /></td>
        </tr>
        <tr>
        <td class="l_form" align="left">UT LADDER</td><td><input type="checkbox" name="c4" value="Yes"/></td><td><input type="text" class="c_in" name="r4"/></td>
        </tr>
        <tr>
        <td class="l_form" align="left">H2O PIPE SIZE</td><td><input type="checkbox" name="c5" value="Yes"/></td><td><input type="text" class="c_in" name="r5" /></td>
        </tr>
        <tr>
        <td class="l_form" align="left">TANK SIZE UT<span style="color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>
</td><td><input type="checkbox" name="c6" value="Yes"/></td><td><input type="text" class="c_in" name="ut[]" id="0"/></td>
        </tr>
        <tr><td>&nbsp;</td><td>&nbsp;</td><td><div id="phone">
    	</div></td>
        </tr>
        <tr>
        <td class="l_form" align="left">TANK SIZE OT<span style="color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field1()">[+]</span>
</td><td><input type="checkbox" name="c7" value="Yes"/></td><td><input type="text" class="c_in" name="ot[]" id="0"/></td>
        </tr>
 		<tr><td>&nbsp;</td><td>&nbsp;</td><td><div id="phone1">
    	</div></td>
        </tr>     
        <tr>
        <td class="l_form" align="left">LOAD SHEDDING</td><td><input type="checkbox" name="c8" value="Yes"/></td><td><input type="text" class="c_in" name="r8"/></td>
        </tr>
        <tr>
        <td class="l_form" align="left">H2O SCHEDULE</td><td><input type="checkbox" name="c9" value="Yes"/></td><td><input type="text" class="c_in" name="r9"/></td>
        </tr>
        <tr>
        <td class="l_form" align="left">LIFT</td><td><input type="checkbox" name="c10" value="Yes"/></td><td><input type="text" class="c_in" name="r10"/></td>
        </tr>
        <tr>
        <td class="l_form" align="left">FLOORS</td><td><input type="checkbox" name="c11" value="Yes"/></td><td><input type="text" class="c_in" name="r11"/></td>
        </tr>
        <tr>
        <td class="l_form" align="left">SITE</td><td ><input type="checkbox" name="c12" value="Yes"/></td><td><input type="text" class="c_in" name="r12"/></td>
        </tr>
        </table>
        <table class="c_last">
        <tr>
        <td class="l_form">Note:</td><td class="l_form">Representative</td>
        </tr>
        <tr>
        <td><textarea class="c_add" name="c13"></textarea></td>
        <td valign="top">
        <select class="a" name="c14">
        <?php
		while($row_emp=mysql_fetch_array($res_emp))
		{
		echo "<option>";
		echo $row_emp[1];
		echo "</option>";
		}
		?>
        </select>
        </td>
        </tr>
        </table>
        
        <div class="addclients_c">
         <input name="submit" class="formbutton" value=" Add " type="submit" />
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
