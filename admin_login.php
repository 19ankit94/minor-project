<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
<link href="css/astyle.css"  rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/avalid.js"></script>
</head>
<body>
<?php 
include('header.php');
?>
<div class="main">

<hr><h2 class="head" align="center">LOG IN</h2><hr />
<form action="admin_login.php" method="post" name="login" onsubmit="return myf()">
<table align="center" cellspacing="-10">
<tr><td><p class="a">USERNAME</p></td></tr>
<tr><td><input type="text" name="usr" placeholder=" username"/></td></tr>
<tr><td><p class="a">PASSWORD</p></td></tr>
<tr><td><input type="password" name="pass" placeholder=" password"/></td></tr>
</table><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value=" LOG IN ">
</form>
</div>

<?php 
include('footer.php');
?>

</body>
</html>
 <?php
include('lib.php');
session_start();
if(isset($_POST['usr'])&&isset($_POST['pass']))
{
$user=$_POST['usr'];
$pass=$_POST['pass'];
$data="select * from admin_data where admin_name='$user'";
$rs=mysqli_query($con,$data);
$row=mysqli_fetch_array($rs);
if($row['admin_name']=="")
{  ?>
   <script type="text/javascript">
   alert('Admin does not Exist');
   window.location="admin_login.php";
   </script>
   <?php
}
else
{ if($row['admin_pass']==$pass)
  {
	  $_SESSION['login']=1;
	  $_SESSION['id']=$row['admin_id'];
	  ?>
   <script type="text/javascript">
   alert('Welcome');
   window.location="admin_panel.php";
   </script>
   <?php
  }
  else
  {
	?>
   <script type="text/javascript">
   alert('Invalid Admin');
   window.location="admin_login.php";
   </script>
   <?php 
  }	
	
}}
?>