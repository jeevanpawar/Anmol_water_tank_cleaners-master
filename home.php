<?php
error_reporting(0);
include("include/database.php");
$a=date('Y-m-d');
$b=date('Y-m-d', strtotime("+1 days"));
$c=date('Y-m-d', strtotime("+4 days"));
$d=date('Y-m-d', strtotime("+8 days"));
$qry_1="select * from reminder where r_date='$a'";
$res_1=mysql_query($qry_1);
$qry_2="select * from reminder where r_date='$b'";
$res_2=mysql_query($qry_2);
$qry_4="select * from reminder where r_date='$c'";
$res_4=mysql_query($qry_4);
$qry_8="select * from reminder where r_date='$d'";
$res_8=mysql_query($qry_8);
?>
<html>
<head>
<title>Anmol Water Tank Cleners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="styles2.css" type="text/css" />

<link rel="stylesheet" href="styles2.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
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
</head>
<body onLoad="setInterval('window.location.reload()', 10000);">
<div id="container">
    <div id="sub-header">
	
    <?php
	include("header.php");
	?>
    
    	<br />
		<div class="quotation"><center>Anmol Water Tank : Reminders</center></div>
        <table class="emp_tab">
        <tr class="menu_header">
        <td width="70">In.No.</td>
        <td width="350">Contact Details</td>
        <td>Description</td>
        <td width="150">Actual Date</td>
        <td width="80">After</td>
        <td width="80">Update</td>
        </tr>
        <?php
		while($row_1=mysql_fetch_array($res_1))
		{
				echo"<tr class='pagi'>";
				echo "<td>";
				echo $row_1[1];
				echo "</td>";
				echo "<td class='print2'>";
        		echo '<a href=# alt=Image Tooltip rel=tooltip content="<table class=tool><tr><td id=con>Kind Attn I:</td><td>'.$row_1[2].'</td></tr><tr><td id=con>Contact No:</td><td>'.$row_1[8].'</td></tr><tr><td id=con>Kind Attn II:</td><td>'.$row_1[6].'</td></tr><tr><td id=con>Contact No:</td><td>'.$row_1[9].'</td></tr><tr><td id=con>Company Name:</td><td>'.$row_1[7].'</td></tr><tr><td id=con>Phone No:</td><td>'.$row_1[10].'</td></tr></table>">'.ContactDetails.'</a>'.'<br>';
        		echo "</td>";
				echo "<td>";
				echo $row_1[3];
				echo "</td>";
				echo "<td>";
				echo date('d-m-Y', strtotime($row_1[4]));
				echo "</td>";
				echo "<td class='today'>";
				echo "<a href=''> &nbsp;Today&nbsp; </a>";
				echo "</td>";
				echo "<td class='print'>";
				echo "<a href='r_update.php?id=$row_1[0]'>Update</a>";
				echo "</td>";
				echo"</tr>";
			}
		?>
        <?php
			while($row_2=mysql_fetch_array($res_2))
			{
				echo"<tr class='pagi'>";
				echo "<td>";
				echo $row_2[1];
				echo "</td>";
				echo "<td class='print2'>";
        		echo '<a href=# alt=Image Tooltip rel=tooltip content="<table class=tool><tr><td id=con>Kind Attn I:</td><td>'.$row_2[2].'</td></tr><tr><td id=con>Contact No:</td><td>'.$row_2[8].'</td></tr><tr><td id=con>Kind Attn II:</td><td>'.$row_2[6].'</td></tr><tr><td id=con>Contact No:</td><td>'.$row_2[9].'</td></tr><tr><td id=con>Company Name:</td><td>'.$row_2[7].'</td></tr><tr><td id=con>Phone No:</td><td>'.$row_2[10].'</td></tr></table>">'.ContactDetails.'</a>'.'<br>';
        		echo "</td>";
				echo "<td>";
				echo $row_2[3];
				echo "</td>";
				echo "<td>";
				echo date('d-m-Y', strtotime($row_2[4]));
				echo "</td>";
				echo "<td class='tomarrow'>";
				echo "<a href=''>1 Day's</a>";
				echo "</td>";
				echo "<td class='print'>";
				echo "<a href='r_update.php?id=$row_2[0]'>Update</a>";
				echo "</td>";
				echo"</tr>";
			}
		?>
		<?php
			while($row_4=mysql_fetch_array($res_4))
			{
				echo"<tr class='pagi'>";
				echo "<td>";
				echo $row_4[1];
				echo "</td>";
				echo "<td class='print2'>";
        		echo '<a href=# alt=Image Tooltip rel=tooltip content="<table class=tool><tr><td id=con>Kind Attn I:</td><td>'.$row_4[2].'</td></tr><tr><td id=con>Contact No:</td><td>'.$row_4[8].'</td></tr><tr><td id=con>Kind Attn II:</td><td>'.$row_4[6].'</td></tr><tr><td id=con>Contact No:</td><td>'.$row_4[9].'</td></tr><tr><td id=con>Company Name:</td><td>'.$row_4[7].'</td></tr><tr><td id=con>Phone No:</td><td>'.$row_4[10].'</td></tr></table>">'.ContactDetails.'</a>'.'<br>';
        		echo "</td>";
				echo "<td>";
				echo $row_4[3];
				echo "</td>";
				echo "<td>";
				echo date('d-m-Y', strtotime($row_4[4]));
				echo "</td>";
				echo "<td class='fourth'>";
				echo "<a href=''>4 Day's</a>";
				echo "</td>";
				echo "<td class='print'>";
				echo "<a href='r_update.php?id=$row_4[0]'>Update</a>";
				echo "</td>";
				echo"</tr>";
			}
		?>
        <?php
			while($row_8=mysql_fetch_array($res_8))
			{
				echo"<tr class='pagi'>";
				echo "<td>";
				echo $row_8[1];
				echo "</td>";
				echo "<td class='print2'>";
        		echo '<a href=# alt=Image Tooltip rel=tooltip content="<table class=tool><tr><td id=con>Kind Attn I:</td><td>'.$row_8[2].'</td></tr><tr><td id=con>Contact No:</td><td>'.$row_8[8].'</td></tr><tr><td id=con>Kind Attn II:</td><td>'.$row_8[6].'</td></tr><tr><td id=con>Contact No:</td><td>'.$row_8[9].'</td></tr><tr><td id=con>Company Name:</td><td>'.$row_8[7].'</td></tr><tr><td id=con>Phone No:</td><td>'.$row_8[10].'</td></tr></table>">'.ContactDetails.'</a>'.'<br>';
        		echo "</td>";
				echo "<td>";
				echo $row_8[3];
				echo "</td>";
				echo "<td>";
				echo date('d-m-Y', strtotime($row_8[4]));
				echo "</td>";
				echo "<td class='eight'>";
				echo "<a href=''>8 Day's</a>";
				echo "</td>";
				echo "<td class='print'>";
				echo "<a href='r_update.php?id=$row_8[0]'>Update</a>";
				echo "</td>";
				echo"</tr>";
			}
		?>
        </table>
        
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
