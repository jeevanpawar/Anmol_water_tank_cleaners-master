<?php
error_reporting(0);
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

$per_page = 20; 

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
color:#6F0;
margin-left:10px;
margin-top:0px;
}
#pagination li {	
list-style: none; 
float: left; 
margin-right: 16px; 
padding:5px; 
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
	
    <?php
	include("header.php");
	?>    
    <div id="sub-header">
	<div class="quo">
    <br />
	<div class="quotation"><center>Sites Details</center></div>
    <div>
        
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
</div>

 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
