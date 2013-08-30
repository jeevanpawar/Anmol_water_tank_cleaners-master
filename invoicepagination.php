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
<?php
include("include/database.php");
error_reporting(0);
$per_page = 20; 
if($_GET)
{
$page=$_GET['page'];
}

$start = ($page-1)*$per_page;
$sql = "select * from invoice order by i_id desc limit $start,$per_page";
$rsd = mysql_query($sql);
?>

				<table class="emp_tab">
                <tr class="menu_header">
                <td width="70">In. No</td>
                <td width="100">Date</td>
                <td width="250">Contact Details</td>
                <td>Client Address</td>
                <td width="70">Update</td>
                <td width="70">Print</td>
                </tr>
                
        <?php
		
		while($row=mysql_fetch_array($rsd))
		{		
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
                
		}
		?>
        
        
        </table>
