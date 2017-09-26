<?php
include('lib.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CONTACT US</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'>
<link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
<link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
<script src="js/cvalid.js" type="text/javascript" ></script>
</head>
<body>
<?php 
include('header.php');?>
<div id="templatemo-contact">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header head_contact">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">CONTACT US</span>
                            <hr class="team_hr team_hr_right hr_gray"/>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="templatemo-contact-map" id="map-canvas"> </div>  
                        <div class="clearfix"></div>
                        <i>You can find us on #13,Lakshmiah Reddy Building,Challaghatta,560037,Bangalore,INDIA, <span class="txt_orange">Digital Estate</span> in Yangon.</i>
                    </div>
                    <div class="col-md-4 contact_right">
                        <p>If you have any problem about the working of site or any suggestion for the improvement of the site, please leave
                        us a message.</p>
                        <p><img src="images/location.png" alt="icon 1" />#13,Lakshmiah Reddy Building,Challaghatta,560037,Bangalore,INDIA</p>
                        <p><img src="images/phone1.png"  alt="icon 2" /> 989-649-9082</p>
                        <p><img src="images/globe.png" alt="icon 3" /><a class="link_orange" href="index.php"><span class="txt_orange">www.btechnotes.comxa.com</span></a></p>
                        <form class="form-horizontal" action="" method="post" onsubmit="return myf()" name="cform">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name..." maxlength="40" name="cname" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email..." maxlength="40" name="cemail"/>
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" name="msg" style="height: 130px;" placeholder="Write down your message..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-orange pull-right">SEND</button>
                        </form>
                        	
                    </div>
                </div>
            </div>
        </div>
        <?php 
		include('footer.php');
		?>
</body>
</html>
<?php
if(isset($_POST['cname'])&&isset($_POST['cemail'])&&isset($_POST['msg']))
{
$cname=$_POST['cname'];
$cemail=$_POST['cemail'];
$msg=$_POST['msg'];
$query="insert into message(cname,cemail,msg)values('$cname','$cemail','$msg')";
   if(mysqli_query($con,$query))
   {?>
		    <script>
	        alert("message was successfully sent");
	        window.location="contact.php";
	        </script> 
            <?php
    }
   else
   { ?>
		    <script>
	        alert("message was not sent ");
	        window.location="contact.php";
	        </script> 
            <?php
            }
}




?>