<?php
include("include/database.php");
$per_page = 20; 
$sql = "select * from clients";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page)

?>

<html>
<head>
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function(){
		
	//Display Loading Image
	function Display_Load()
	{
	    $("#loading").fadeIn(900,0);
	
	}
	//Hide Loading Image
	function Hide_Load()
	{
		$("#loading").fadeOut('slow');
	};
	

    //Default Starting Page Results
   
	$("#pagination li:first").css({'color' : '#FF0084'}).css({'border' : 'none'});
	
	Display_Load();
	
	$("#content").load("addquopagination.php?page=1", Hide_Load());



	//Pagination Click
	$("#pagination li").click(function(){
			
		Display_Load();
		
		//CSS Styles
		$("#pagination li")
		.css({'color' : '#0063DC'});
		
		$(this)
		.css({'color' : '#FF0084'})
		.css({'border' : 'none'});

		//Loading Data
		var pageNum = this.id;
		
		$("#content").load("addquopagination.php?page=" + pageNum, Hide_Load());
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
color:#6F0;
margin-left:10px;
margin-top:0px;
}
#pagination li {	
list-style: none; 
float: left; 
margin-right: 16px; 
padding:5px;3 
color:#FFF;
margin-left:-10px;
background-color:#00a1d2;

}
#pagination li:hover
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
        	
        	<li ><a href="home.php">Home</a></li>
            <li ><a class="has_submenu" href="site.php">Sites</a>
            		<ul>
                	<li><a href="siteassgn.php">Assign To</a></li>
                </ul>
            </li>
            <li ><a href="amcreport.php">AMC</a>
            </li>
            
            
            <li><a class="has_submenu" href="clients.php">Clients</a>
            	<ul>
                	<li><a href="addclients.php">Add Clients</a></li>
                </ul>
            
            </li>
            <li><a class="has_submenu" href="employee.php">Employees</a>
            		<ul>
                	<li><a href="addepm.php">Add Employee</a></li>
                   
                    </ul>
            
            </li>
            <li><a href="payment.php">Payments</a>
            		
            </li>
            <li><a class="has_submenu" href="invoicedetails.php">Invoice Details</a>
            		<ul>
                    <li><a href="addinvoice.php">Invoice Add</a></li>
                
                    </ul>
            </li>
            <li class="selected"><a class="has_submenu" href="quotation.php">Quotation</a>
            		<ul>
                    <li><a href="addquo.php">Quotation Add</a></li>
                	
                    </ul>
            </li>
            <li><a class="has_submenu" href="term.php">Terms & Conditions</a>
            <ul>
              	<li><a href="addterm.php">Add Terms</a></li>
            </ul>
           </li>
       
        </ul>
    </div>
    
    <div id="sub-header">
    			
                <div class="quo">
                <br />
                <div class="quotation"><center>Invoice Detail</center></div>
                
                <div id="loading" ></div>
		<div id="content" ></div>
        <table width="800px">
	<tr><Td>
			<ul id="pagination">
				<?php
				//Show page links
				for($i=1; $i<=$pages; $i++)
				{
					echo '<li id="'.$i.'">'.$i.'</li>';
				}
				?>
	</ul>	
	</Td></tr></table>

                </div>                
               
  				</div>
                
                </div>
                
        
    
    	<div class="clear"></div>
    
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
