<?php
include("include/database.php");
$per_page = 20; 
$sql = "select * from invoice";
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page);
error_reporting(0);
?>
<?php
if(isset($_REQUEST['go']))
{
	$t1=$_REQUEST['result'];
	$qry="select * from invoice where i_id='$t1' or q_name='$t1' or q_mo='$t1'";
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
<script type="text/javascript" src="/js/jquery.js"></script>
<script>
$(document).ready(function(){

$('[rel=tooltip]').bind('mouseover', function(){
	  
		
	
 if ($(this).hasClass('ajax')) {
	var ajax = $(this).attr('ajax');	
			
  $.get(ajax,
  function(theMessage){
$('<div class="tooltip">'  + theMessage + '</div>').appendTo('body').fadeIn('fast');});

 
 }else{
			
	    var theMessage = $(this).attr('content');
	    $('<div class="tooltip">' + theMessage + '</div>').appendTo('body').fadeIn('fast');
		}
		
		$(this).bind('mousemove', function(e){
			$('div.tooltip').css({
				'top': e.pageY - ($('div.tooltip').height() / 2) - 5,
				'left': e.pageX + 15
			});
		});
	}).bind('mouseout', function(){
		$('div.tooltip').fadeOut('fast', function(){
			$(this).remove();
		});
	});
						   });

</script>

<style>
.tooltip{
	position:absolute;
	background-image:url(tip-bg.png);
	background-color:#09C;
	background-position:left center;
	background-repeat:no-repeat;
	color:#000;
	padding:5px 18px 5px 18px;
	font-size:12px;
	font-family:Verdana, Geneva, sans-serif;
		box-shadow: 0px 0px 0px 5px rgba(0, 0, 0, 0.3), 
             0px 20px 15px 0px rgba(0, 0, 0, 0.6); 

	}
	
.tooltip-image{
	float:left;
	margin-right:5px;
	margin-bottom:5px;
	margin-top:3px;}	
	
	
	.tooltip span{font-weight:700;
color:#ffea00;}




	#imagcon{
		overflow:hidden;
		float:left;
		height:100px;
		width:100px;
		margin-right:5px;
	}
	#imagcon img{
		max-width:100px;
	}
	#wrapper{
		margin:0 auto;
		width:500px;
		margin-top: 99px;
	}
	.tool td
	{
		height:30px;
			
	}
	.link a
	{
		color:#030303;
		text-transform:uppercase;
	}
</style>
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
	
	$("#content").load("invoicepagination.php?page=1", Hide_Load());



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
		
		$("#content").load("invoicepagination.php?page=" + pageNum, Hide_Load());
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
        <td class="info">Invoice Details</td>
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
       	echo "<td width='70'>In No.</td>";
		echo "<td width='100'>Date</td>";
		echo "<td width='250'>Contact Details</td>";
		echo "<td>Client Address</td>";
		echo "<td width='70'>Update</td>";
		echo "<td width='70'>Print</td>";
       	echo "</tr>";
		echo "<tr class='pagi'>";
                echo "<td width='70'>";
                echo $row[0];
                echo "</td>";
                echo "<td width='100'>";
                echo $row[1];
				echo "</td>";
                echo "<td class='print2'>";
        		echo '<a href=# alt=Image Tooltip rel=tooltip content="<table class=tool><tr><td id=con>Kind Attn I:</td><td>'.$row[3].'</td></tr><tr><td id=con>Contact No:</td><td>'.$row[6].'</td></tr><tr><td id=con>Kind Attn II:</td><td>'.$row[8].'</td></tr><tr><td id=con>Contact No:</td><td>'.$row[10].'</td></tr><tr><td id=con>Company Name:</td><td>'.$row[9].'</td></tr><tr><td id=con>Phone No:</td><td>'.$row[11].'</td></tr></table>">'.ContactDetails.'</a>'.'<br>';
        		echo "</td>";
                echo "</td>";
				echo "<td width='500'>";
                echo $row[4];
                echo "</td>";
				echo "<td width='70' class='print'>";
                echo "<a href='updateinv.php?id1=$row[0]'>Update</a>";
                echo "</td>";
				echo "<td width='70' class='print'>";
                echo "<a href='report.php?id=$row[0]'>Print</a>";
                echo "</td>";
                echo "</tr>";

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
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
