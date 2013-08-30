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
$per_page = 20; 
if($_GET)
{
$page=$_GET['page'];
}
$start = ($page-1)*$per_page;
$sql = "select * from quotation order by q_id desc limit $start,$per_page";
$rsd = mysql_query($sql);
?>
		<table class="emp_tab">
        <tr class="menu_header">
        <td width="80">Quo No</td>
        <td width="160">Date</td>
        <td width="250">Client Name</td>
        <td width="500">Site Address</td>
        <td width="70">Update</td>
        <td width="70">Print</td>
        </tr>
        <?php
		while($row=mysql_fetch_array($rsd))
		{		
        		echo "<tr class='pagi'>";
                echo "<td width='80'>";
                echo $row[0];
                echo "</td>";
                echo "<td width='160'>";
                echo $row[2];
                echo "</td>";
				echo "<td width='160'>";
                echo $row[3];
                echo "</td>";
				echo "<td width='500'>";
                echo $row[4];
				echo "</td>";
				echo "<td width='70' class='print'>";
                echo "<a href='updatequo.php?id=$row[0]'>Update</a>";
                echo "</td>";
                echo "</td>";
				echo "<td width='70' class='print'>";
                echo "<a href='qreport.php?id=$row[0]'>Print</a>";
                echo "</td>";
                echo "</tr>";
                
		}
		?>
        </table>
