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
<?php
if(isset($_REQUEST['go']))
{
	$t1=$_REQUEST['result'];
	$qry="select * from site where i_id='$t1' or s_add='$t1'";
	$res=mysql_query($qry);
	$count=mysql_num_rows($res);
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        <td class="info">Site Assign To Details</td>
        
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
			$row=mysql_fetch_array($res);
			echo "<table class='emp_tab'>";
			echo "<tr class='menu_header'>";
        	echo "<td width='50'>In No.</td>";
        	echo "<td width='200'>Emp Assign</td>";
        	echo "<td width='250'>Kind Attn I</td>";
			echo "<td width='250'>Kind Attn II</td>";
			echo "<td width='250'>Company Name</td>";
        	echo "<td width='180'>Action</td>";
        	echo "</tr>";

			echo "<tr class='pagi'>";
			
			echo"<td>";
			echo $row[8];
			echo"</td>";
			
			echo"<td>";
			echo "<select >";
			echo "<option>";
			echo $row[2];
			echo "</option>";
			echo "<option>";
			echo $row[3];
			echo "</option>";
			echo "<option>";
			echo $row[4];
			echo "</option>";
			echo "<option>";
			echo $row[5];
			echo "</option>";
			echo "<option>";
			echo $row[6];
			echo "</option>";
			echo "</select>";
			echo"</td>";
			
			echo"<td>";
			echo $row[7];
			echo"</td>";
			
			echo"<td>";
			echo $row[9];
			echo"</td>";
			
			echo"<td>";
			echo $row[10];
			echo"</td>";
			
			
			echo "<td width='180' class='print'>";
			echo "<a href='?id_d=$row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='siteupdate.php?id_u=$row[0]'>Update</a>";
			echo "</td>";
			echo"</tr>";
			echo "</table>";
			echo "<br>";
        }
		}
		?>

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
