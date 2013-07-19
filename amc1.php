<?php
	
	include("include/database.php");
	error_reporting(0);
	$a=$_REQUEST['id'];
	$c_qry_f="select * from amc where i_id='$a'";
	$c_res_f=mysql_query($c_qry_f);

	if(isset($_REQUEST['can']))
	{
		header("location:amcreport.php");
	}
?>

<?php
	
	$w=$_REQUEST['id'];
	$qry_f="select * from amc where i_id='$w'";
	$res_f=mysql_query($qry_f);
	
	if(isset($_REQUEST['add']))
	{	
		
		
		while($rows=mysql_fetch_array($res_f))
		{
			$amc = $rows[5];
			$am=$amc+1;
			$reminder_interval = 12/$am;
			$a = number_format($reminder_interval * 30);
			$c=0;
						
			$NewDate = '';
				for($i=1; $i<$am; $i++)
				{
					$day=$rows[3];
					$arr = explode("-", $day);
					list($day, $month, $year) = $arr;
					$date = $day."-".$month."-".$year;
					$c = $c + $a;
					
					$NewDate[$i]=date('Y-m-d', strtotime("$date +$c days"));
					
				}
				foreach($NewDate as $x)
				{
					$i=$_REQUEST['id'];
					$des=$rows[4];
					$name=$rows[2];
					$qry="insert into reminder(i_id,r_name,r_des,r_date) values('".$i."','".$name."','".$des."','".$x."')";
					$res=mysql_query($qry);
				}
			
				
		}
	
	
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
        
		<form action="" method="post">
        <table>
        <tr class="emp_header5">
        <td width="99">1st Amc</td>
        <td width="99">2nd Amc</td>
        <td width="99">3rd Amc</td>
        <td width="97">4th Amc</td>
        <td width="97">5th Amc</td>
        <td width="97">6th Amc</td>
        <td width="97">7th Amc</td>
        <td width="97">8th Amc</td>
        <td width="97">9th Amc</td>
        <td width="98">10th Amc</td>
        <td width="98">11th Amc</td>	
        <td width="99">12th Amc</td>
        </tr>
        </table>
        <table class="emp_tab">
      	
		<?php
		
		while($row=mysql_fetch_array($c_res_f))
		{
			
			echo "<tr class='emp_header3'>";
			echo "<td colspan='2'>";
			echo $row[4];
			echo "</td>";
			echo "</tr>";
			echo "<tr class='emp_header4'>";
			echo "<td>";
			
			
			$amc = $row[5];
			
			$reminder_interval = 12/$amc;
			$a = ($reminder_interval * 30)+2;
			echo $a;
			$c=0;
			
			for($i=0; $i<$amc; $i++)
			{
				$day=$row[3];
				$arr = explode("-", $day);
				list($day, $month, $year) = $arr;
				$date = $day."-".$month."-".$year;
				$c = $c + $a;
				$NewDate=date('d-m-Y', strtotime("$date +$c days"));
		   		echo "&nbsp;";
		   		echo "<span class='n'>$NewDate</span>";
				
			}
			
			echo "</td>";
			echo "</tr>";
			
		}
		?> 
        </table>
        <br>
                <table>
        
        <tr class="menu_header">
        <td>
        <input class="formbutton" name="add" type="submit" value="Add">
        </td>
        <td>
        <input class="formbutton" name="can" type="submit" value="Cancel">
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
