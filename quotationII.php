<?php
if(isset($_REQUEST['cancel']))
{
	header("location:quotation.php");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>


</head>

<body>
<div id="container">
	  
    
    <div id="sub-header">
    			
                <div class="quo">
                
                
                <form action="" method="post">
                <br />
                
                <div class="quotationI"><center>AMC QUOTATION</center></div>
                <br />
                <table class="q_info">
                <tr><td class="l_form">Date:</td><td><input class="q_in" type="text" value="<?php  echo date("d-m-Y"); ?>"/></td></tr>
                <tr><td class="l_form">Name:</td><td><input class="q_in" type="text" /></td></tr>
                <tr><td class="l_form" valign="top">Address:</td><td><textarea class="q_add"></textarea></td></tr>
                </table>
                <table class="q_info2">
                <tr><td class="l_form">Quo No:</td><td><label>1</label></td></tr>
                <tr><td class="l_form">Kind Attn:</td><td><input class="q_in" type="text" /></td></tr>
                <tr><td class="l_form">Mo No:</td><td><input class="q_in" type="text" /></td>
                </table>
                <br />
                <table class="des">
                <tr>
                <td class="heading" width="300">Description</td>
                <td class="heading" width="80">Capacity</td>
                <td class="heading" width="80">Quantity</td>
                <td class="heading" width="60">Rate</td>
                <td class="heading" width="140">Service in Year</td>
                <td class="heading" width="100">Amount</td>
                </tr>
                <tr class="data"><td><input type="text" class="des_in" /> </td><td><input type="text" class="des_cap" /></td><td><input type="text" class="des_q" /></td><td><input type="text" class="des_r" /></td><td><input type="text" class="des_ser" /></td><td><input type="text" class="des_amt" /></td></tr>
                <tr class="data"><td><input type="text" class="des_in" /></td><td><input type="text" class="des_cap" /></td><td><input type="text" class="des_q" /></td><td><input type="text" class="des_r" /></td><td><input type="text" class="des_ser" /></td><td><input type="text" class="des_amt" /></td></tr>
                <tr class="data"><td><input type="text" class="des_in" /></td><td><input type="text" class="des_cap" /></td><td><input type="text" class="des_q" /></td><td><input type="text" class="des_r" /></td><td><input type="text" class="des_ser" /></td><td><input type="text" class="des_amt" /></td></tr>
                <tr class="data"><td><input type="text" class="des_in" /></td><td><input type="text" class="des_cap" /></td><td><input type="text" class="des_q" /></td><td><input type="text" class="des_r" /></td><td><input type="text" class="des_ser" /></td><td><input type="text" class="des_amt" /></td></tr>
                <tr class="data"><td><input type="text" class="des_in" /></td><td><input type="text" class="des_cap" /></td><td><input type="text" class="des_q" /></td><td><input type="text" class="des_r" /></td><td><input type="text" class="des_ser" /></td><td><input type="text" class="des_amt" /></td></tr>
                <tr class="data"><td><input type="text" class="des_in" /></td><td><input type="text" class="des_cap" /></td><td><input type="text" class="des_q" /></td><td><input type="text" class="des_r" /></td><td><input type="text" class="des_ser" /></td><td><input type="text" class="des_amt" /></td></tr>
                <tr class="data"><td><input type="text" class="des_in" /></td><td><input type="text" class="des_cap" /></td><td><input type="text" class="des_q" /></td><td><input type="text" class="des_r" /></td><td><input type="text" class="des_ser" /></td><td><input type="text" class="des_amt" /></td></tr>
                <tr class="data"><td></td><td></td><td></td><td></td><td>&nbsp;</td><td><input type="text" class="des_amt" /></td></tr>
                </table>
                
                <div class="q_button">
                <input name="send" class="formbutton" value=" Calculate " type="submit" />
                <input name="send" class="formbutton" value=" Submit " type="submit" />
                <input name="cancel" class="formbutton" value="Cancel" type="submit" />
                </div>
                
                </form>
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
