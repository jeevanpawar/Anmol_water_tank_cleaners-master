<?php
	
	error_reporting(0);
	include("include/database.php");
	$c_up=$_REQUEST['v_id'];
	$c_qry_f="select * from partial_payment where i_id=".$c_up;
	$c_res_f=mysql_query($c_qry_f);
	
	$qry_i="select * from invoice where i_id=".$c_up;
	$res_i=mysql_query($qry_i);
	$row_i=mysql_fetch_array($res_i);
?>
<?php
	if(isset($_REQUEST['can']))
	{
		header("location:payment.php");
	}
?>
<html>
<head>
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
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

<body>
<div id="container">
    <div id="sub-header">
	
    <?php
	include("header.php");
	?>
<br />
		
        <div>
        <?php
			$up=$_REQUEST['v_id'];
			$c_qry="select * from partial_payment where i_id=".$up;
			$c_res=mysql_query($c_qry);
			$c_row=mysql_fetch_array($c_res);
	
			$to_qry="select SUM(p_amt) from partial_payment where i_id=".$up;
			$to_res=mysql_query($to_qry);
			$to_row=mysql_fetch_array($to_res);
			
			$a=$c_row[7];
			$b=$to_row[0];
			$c=$a-$b;
		?>
        
        <div class="quotation"><center>Balance Details</center></div>
        <table class="emp_tab">
        <tr class="pagi">
        <td>Invoice No:</td><td><?php echo $c_row[1]; ?></td>
        <td>Invoice Total:</td><td><?php echo $c_row[7]; ?></td>
        </tr>
        <tr class="pagi">
        <td>Contact Details:</td>
		<?php echo "<td class='print2'>";
        echo '<a href=# alt=Image Tooltip rel=tooltip content="<table class=tool><tr><td id=con>Kind Attn I:</td><td>'.$row_i[3].'</td></tr><tr><td id=con>Contact No:</td><td>'.$row_i[6].'</td></tr><tr><td id=con>Kind Attn II:</td><td>'.$row_i[8].'</td></tr><tr><td id=con>Contact No:</td><td>'.$row_i[10].'</td></tr><tr><td id=con>Company Name:</td><td>'.$row_i[9].'</td></tr><tr><td id=con>Phone No:</td><td>'.$row_i[11].'</td></tr></table>">'.ContactDetails.'</a>'.'<br>';
        echo "</td>";
		?>
        
        <td>Paid By Client:</td><td><?php echo $to_row[0]; ?></td>
        </tr>
        <tr class="pagi">
        <td>Address</td><td><?php echo $row_i[4]; ?></td>
        <td>Balance:</td><td><?php echo $c; ?></td>
        </tr>
        </table>
        <br>
        
        <div class="quotation"><center>Payment Details</center></div>
        <table class="emp_tab">
        <tr class="menu_header">
        <td width="350">Payment Mode</td>
        <td width="400">Cheque No.</td>
        <td width="220">Pay Date</td>
        <td>Amount</td>
        </tr>

        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td>";
		echo $c_row[4];
		echo "</td>";
		echo "<td>";
		echo $c_row[5];
		echo "</td>";
		echo "<td>";
		echo date('d-m-Y', strtotime($c_row[6]));
		echo "</td>";
		echo "<td>";
		echo $c_row[8];
		echo "</td>";
        echo "</tr>";
		}
		?>
        </table>
        
        
        
        </div>
        <div class="quotation"><center></center></div>
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
