<?php

error_reporting(0);
	include("include/database.php");
	
	if(isset($_REQUEST['login']))
	{
		$sql="select * from user where u_name = '". $_POST['username'] ."' and u_pass = '".$_POST['password']."'";
		$result = mysql_query($sql);
		if($row = mysql_fetch_array($result))
		  {
			 header("Location:home.php");
		  }
		else
		{
			header("location:index.php");
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chaturang</title>

<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div style="padding: 130px 0 0 0;" align="center">

<form action="" method="post">
<div id="login-box">

<H2 align="left"><span class="main">Anmol Water Tank</span><br /><span class="tour">Cleaners</span></H2>

<div class="all">
<div id="login-box-name" style="margin-top:20px;">User:</div><div id="login-box-field" style="margin-top:20px;"><input name="username" class="form-login" title="Username" placeholder="Enter User Name" size="30" maxlength="2048" /></div>
<div id="login-box-name">Password:</div><div id="login-box-field"><input name="password" type="password" class="form-login" title="Password" placeholder="Enter Password" size="30" maxlength="2048" /></div>
<br />
<span class="login-box-options"><input type="checkbox" name="1" value="1"> Remember Me <a href="#" style="margin-left:30px;">Forgot password?</a></span>
<br />
<br />
<div><input  class="log" type="submit" value="Login" name="login" /></div>
</form>
</div>

</div>

</div>
</body>
</html>
