<?php
include("setting.php");
session_start();
if(!isset($_SESSION['aid']))
{
	header("location:index.php");
}
$aid=$_SESSION['aid'];
$a=mysqli_query($set,"SELECT * FROM admin WHERE aid='$aid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SSMS</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">
<div align = "center">
<br />
<span class="head">Stationery Stock Management System</span><br />
</div>
<br />
<br />
<br />
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Welcome <?php echo $name;?></span>
<br />
<br />
<table border="0" class="table" cellpadding="10" cellspacing="10">
<tr><td><a href="manageItems.php" class="Command">Manage Items</a></td>
<td><a href="stationeryRequests.php" class="Command">Unavailable Stationery Requests</a></td>
<td><a href="issue.php" class="Command">Issue Approval</a></td>
<td><a href="changePasswordAdmin.php" class="Command">Change Password</a></td>
<td><a href="logout.php" class="Command">Logout (<?php echo $name;?>)</a></td></tr>
</table>
<br />
<br />

<br />
<br />

</div>
</div>
</body>
</html>