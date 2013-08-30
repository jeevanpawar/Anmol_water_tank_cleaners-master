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
	$c_qry_f="select * from clients order by c_id desc limit $start,$per_page";
	$c_res_f=mysql_query($c_qry_f);
		
?>
<?php
	if(isset($_REQUEST['c_id1']))
	{
		$c_d=$_REQUEST['c_id1'];
		$c_del="delete from clients where c_id=".$c_d;
		$c_dres=mysql_query($c_del);
		if($c_dres)
		{
			header("location:clients.php");
		}
		else
		{
			echo "error";
		}
	}
?>

        <table class="emp_tab">
        <tr class="menu_header">
        <td width="160">Kind Attn I</td>
        <td width="160">Kind Attn I</td>
        <td width="160">Company Name</td>
        <td width="160">Contact Details</td>
        <td>Client Address</td>
        <td width="100">Action</td>
        </tr>

        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td>";
		echo $c_row[2];
		echo "</td>";
		echo "<td>";
		echo $c_row[3];
		echo "</td>";
		echo "<td>";
		echo $c_row[11];
		echo "</td>";
		echo "<td width='160' class='print2'>";
		echo '<a href=# alt=Image Tooltip rel=tooltip content="<table class=tool><tr><td id=con>Kind Attn I:</td><td>'.$c_row[2].'</td></tr><tr><td id=con>Contact No:</td><td>'.$c_row[8].'</td></tr><tr><td id=con>Kind Attn II:</td><td>'.$c_row[3].'</td></tr><tr><td id=con>Contact No:</td><td>'.$c_row[12].'</td></tr><tr><td id=con>Company Name:</td><td>'.$c_row[11].'</td></tr><tr><td id=con>Phone No:</td><td>'.$c_row[7].'</td></tr></table>">'.ContactDetails.'</a>'.'<br>';
		echo "</td>";
		echo "<td>";
		echo $c_row[4];
		echo "</td>";
        echo "<td width='100'class='print'>";
		echo "<a href='quotationI.php?c_id2=$c_row[0]'>Create</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
