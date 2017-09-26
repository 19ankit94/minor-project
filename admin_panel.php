<?php
include('lib.php');
session_start();
  if(isset($_SESSION['login']))
{ $id=$_SESSION['id'];
  $data="select * from admin_data where admin_id='$id'";
  $rs=mysqli_query($con,$data);
  $row=mysqli_fetch_array($rs);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
<script src="css/apstyle.css" type="text/javascript"></script>
</head>

<body>
<?php 
include('header.php');
?>
<div class="templatemo-line-header head_contact">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey"><?php echo "Hello&nbsp;".$row['admin_name']."</br>";?></span>
                            <hr class="team_hr team_hr_right hr_gray"/>
                        </div>
                    </div>
<?php
if($row['admin_image']=="")
{ echo '<img src="images/blank_face.jpeg" width="200px" height="250px" align="left" border="2px" hspace="10px"  alt=" upload photo "/>';
	} 
else
{ echo '<img src="images/'.$row['admin_image'].'" width="200px" height="250px" border="2px" align="left" hspace="10px" alt=" upload photo "/>';
}
?>





<p>ADD an BRANCH to the system</p>
<form action="admin_handle.php" method="post" name="form1">
<p>BRANCH CODE&nbsp;
<input type="text" name="bcode" placeholder=" Branch Code"/>
BRANCH NAME&nbsp;
<input type="text" name="bname" placeholder=" Branch Name"/>
<input type="submit" value="ADD"  /></p>
</form>






<p>ADD an SUBJECT to a BRANCH in the system</p>
<p>SELECT the BRANCH to ADD a SUBJECT</p>
<form action="admin_handle.php" method="post" name="form2">
<?php 
$data2="select * from branch where b_id<=100";
$rs2=mysqli_query($con,$data2);

echo '<select  name="branch">';
while($row2=mysqli_fetch_array($rs2))
{echo '<option>'.$row2['b_code'].'</option>';

}
echo '</select>';

?>
<p>SUBJECT CODE&nbsp;
<input type="text" name="scode" placeholder=" Subject code"/>
SUBJECT NAME&nbsp;
<input type="text" name="sname" placeholder=" Subject Name"/>
<input type="submit" value="ADD" /></p>
</form>





<p>ADD Files to a SUBJECT of a BRANCH in the system</p>
<form action="admin_handle.php" method="post" name="form3" enctype="multipart/form-data">
<?php 
$data2="select * from branch where b_id<=100";
$rs2=mysqli_query($con,$data2);

echo '<select  name="branch">';
while($row2=mysqli_fetch_array($rs2))
{echo '<option>'.$row2['b_code'].'</option>';

}
echo '</select>';

?>
<?php 
$data3="select * from subject where s_id<=100";
$rs3=mysqli_query($con,$data3);

echo '<select  name="subject">';
while($row3=mysqli_fetch_array($rs3))
{echo '<option>'.$row3['s_code'].'</option>';

}
echo '</select>';

?>

<input type="file" name="file"  />
<input type="submit" value="ADD" />
</form>



<?php
$data4="select * from message";
  $rs4=mysqli_query($con,$data4);

  ?><table border="2px" align="" cellpadding="10px" cellspacing="">
 <center> <th>MESSAGES</th></center>
  <?php
  while($row4=mysqli_fetch_array($rs4))
  {  
	  echo '<tr><td>'.$row4['cname'].'</td><td>'.$row4['cemail'].'</td><td>'.$row4['msg'].'</td></tr>';
	  }
	 ?></table><?php
echo "<center>".'<a href="logout.php" class="lo">log out</a>'."</center>";
?>

<?php 
include('footer.php');
?>
</body>
</html>

<?php
}
else
{
  header('location:admin_login.php');	
}
?>
