<?php
include('lib.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subjects in Electrical Engineering</title>
<meta name="description" content="list of subjects in Electrical Engineering" />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
<link href="css/istyle.css" rel="stylesheet" type="text/css" />
</head>

<body >
<?php 
include('header.php');
?>

<div class="head">
</div>

<div class="lside">
<table class="options" cellpadding="20px" cellspacing="10px" border="5px">
<tr><td><a class="ls" href="computer_science.php">Computer Science</a></td></tr>
<tr><td><a class="ls" href="mechanical.php">Mechanical</a></td></tr>
<tr><td><a class="ls" href="ece.php">Electronics And Communication</a></td></tr>
<tr><td><a class="ls" href="civil.php">Civil</a></td></tr>
<tr><td><a class="ls" href="electrical.php">Electrical</a></td></tr>
</table>
</div>

<div class="mid" >
<ul type="disc">
<?php 
$data="select * from subject where b_code='ee'";
$rs=mysqli_query($con,$data);
while($row1=mysqli_fetch_array($rs))
{ 
   echo '<li>'.'<a href="notes.php?scode='.$row1['s_code'].'" >'.$row1['s_name'].'</a></br><br>';
}
?>
</ul>
</div>

<?php
include('footer.php');
?>

</body>
</html>