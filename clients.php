<?php
error_reporting(0);
include("include/database.php");
$per_page = 20; 
$sql = "select * from clients";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page)
?>
<?php
if(isset($_REQUEST['go']))
{
	$t1=$_REQUEST['result'];
	$qry="select * from clients where c_first='$t1' or c_mo='$t1' or c_comp='$t1' or c_email='$t1'";
	$res=mysql_query($qry);
	$count=mysql_num_rows($res);
}

?>
<html>
<head>
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="styles2.css" type="text/css" />


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
	
	$("#content").load("clientspagination.php?page=1", Hide_Load());



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
		
		$("#content").load("clientspagination.php?page=" + pageNum, Hide_Load());
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
margin-left:2px;
background-color:#00a1d2;
box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.3);
   -o-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.3);
   -webkit-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.3);
   -moz-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.3);	
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
    <div id="sub-header">
    <?php
	include("header.php");
	?>
    <form action="" method="post">
       	<table class="emp_tab">
        <tr class="search_res">
        <td class="info">Clients Details</td>
        
        <td width="305">
        <input class="result" name="result" type="text">
        <input class="go" name="go" type="submit" value="Search">
        </td>
        </tr>
        </table>
        </form>
        <?php
		if($count > '0')
		{
        if(isset($_REQUEST['go']))
        {	
		$c_row=mysql_fetch_array($res);
		echo "<table class='emp_tab'>";
		echo "<tr class='menu_header'>";
       	echo "<td width='250'>Kind Attn I</td>";
		echo "<td width='160'>Kind Attn I No.</td>";
		echo "<td width='250'>Kind Attn II</td>";
		echo "<td width='160'>Kind Attn II No.</td>";
       	echo "<td width='250'>Company Name</td>";
		echo "<td width='250'>Phone No</td>";
		echo "<td width='100'>Checklist</td>";
		echo "<td width='100'>Action</td>";
       	echo "</tr>";

        echo "<tr class='pagi'>";
        echo "<td width='250'>";
		echo $c_row[2];
		echo "</td>";
        echo "<td width='160'>";
		echo $c_row[8];
		echo "</td>";
		echo "<td width='250'>";
		echo $c_row[3];
		echo "</td>";
		
		echo "<td width='160'>";
		echo $c_row[12];
		echo "</td>";
		echo "</td>";
		echo "<td width='250'>";
		echo $c_row[11];
		echo "</td>";
		echo "</td>";
		echo "<td width='250'>";
		echo $c_row[7];
		echo "</td>";
		echo "<td width='100' class='print'>";
		echo "<a href='checklist.php?id_a=$c_row[0]'>Add</a>&nbsp;<a href='viewchecklist.php?id_v=$c_row[0]'>View</a>";
		echo "</td>";
        echo "<td width='100' class='print'>";
		echo "<a href='clientspagination.php?c_id1=$c_row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='updateclients.php?c_id2=$c_row[0]'>Update</a>&nbsp;<a href='clientsview.php?c_id3=$c_row[0]'>View</a>";
		echo "</td>";
		echo "</tr>";
        echo "<table>";
		echo "<br>";
		}
		}
		?>        
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
