<?php
include("include/database.php");

if(isset($_REQUEST['id_d']))
	{
		$s_d=$_REQUEST['id_d'];
		$s_del="delete from site where s_id=".$s_d;
		$s_dres=mysql_query($s_del);
		if($s_dres)
		{
			header("location:site.php");
		}
		else
		{
			echo "error";
		}
	}
?>

<?php

error_reporting(0);

$per_page = 2; 

//getting number of rows and calculating no of pages
$sql = "select * from site";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page)
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function(){
		
	//Display Loading Image
	function Display_Load()
	{
	    $("#loading").fadeIn(900,0);
		$("#loading").html("<img src='bigLoader.gif' />");
	}
	//Hide Loading Image
	function Hide_Load()
	{
		$("#loading").fadeOut('slow');
	};
	

   //Default Starting Page Results
   
	$("#pagination li:first").css({'color' : '#FF0084'}).css({'border' : 'none'});
	
	Display_Load();
	
	$("#content").load("sitepagination.php?page=1", Hide_Load());



	//Pagination Click
	$("#pagination li").click(function(){
			
		Display_Load();
		
		//CSS Styles
		$("#pagination li")
		.css({'border' : 'solid #dddddd 1px'})
		.css({'color' : '#0063DC'});
		
		$(this)
		.css({'color' : '#FF0084'})
		.css({'border' : 'none'});

		//Loading Data
		var pageNum = this.id;
		
		$("#content").load("pagination_data.php?page=" + pageNum, Hide_Load());
	});
	
	
});
	</script>
	
<style>

a
{
text-decoration:none;
color:#B2b2b2;

}

a:hover
{

color:#DF3D82;
text-decoration:underline;

}
#loading { 
width: 100%; 
position: absolute;
}

#pagination
{
text-align:center;
margin-left:120px;
margin-top:200px;
position:fixed;
}
li page{	
list-style: none; 
float: left; 
margin-right: 16px; 
padding:5px; 
border:solid 1px #dddddd;
color:#FFF; 
}
li:hover
{ 
color:#FF0084; 
cursor: pointer; 
}


</style>
</head>

<body>
<div id="container">
	
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	
        	<li><a href="index.php">Home</a></li>
            
            <li class="selected"><a class="has_submenu" href="site.php">Sites</a>
            	<ul>
                	<li><a href="siteassgn.php">Assign To</a></li>
                </ul>
            </li>
            <li ><a class="has_submenu" href="amcreport.php">AMC</a>
            	<ul>
                    <li><a href="amcreport.php">Amc Details</a></li>
                </ul>

            </li>
            

            <li><a class="has_submenu" href="clients.php">Clients</a>
            	<ul>
                	<li><a href="addclients.php">Add Clients</a></li>
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
	<div class="quotation"><center>Sites Details</center></div>
    <div>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="150">Date</td>
        <td width="300">Emp Assign</td>
        <td>Site Address</td>
        <td width="120">Action</td>
        </tr>
        </table>
        
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
