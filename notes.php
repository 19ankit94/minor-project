<?php
include('lib.php');
$s_code=$_GET['scode'];
$data2="select * from notes where s_code='$s_code'";
$rs2=mysqli_query($con,$data2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $s_code; ?></title>
<meta name="description" content="list of subjects in computer science" />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
<link href="css/istyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
include('header.php');
?>

<div class="head">
</div>

<div class="lside">
<table class="options" cellpadding="20px" cellspacing="10px" border="5px">
<tr><td><a class="ls" href="computer_science.php">Computer Science</a></td></tr>
<tr><td><a class="ls" href="mechanical.php">Mechanical</a></td></tr>
<tr><td><a class="ls" href="">Electronics And Communication</a></td></tr>
<tr><td><a class="ls" href="">Civil</a></td></tr>
<tr><td><a class="ls" href="">Electrical</a></td></tr>
</table>
</div>

<div class="mid" >
<?php
echo "<table>";
  while($row2=mysqli_fetch_array($rs2))
{ echo '<tr><td><img src="images/logo-adobe-pdf.jpg" height="50" width="50"></td>';
  echo '<td>'.$row2['f_name'].'</td>';
  echo '<td><a href="data/CSE/'.$row2['s_code'].'/'.$row2['f_name'].'"><img src="images/18246-download-pdf-design.png" height="50" width="100"></a></td></tr>';
}
echo "</table>";

?>
</div>
<?php
include('footer.php');
?>

</body>
</html>