<?php
include('lib.php');


if(isset($_POST['bcode'])&&isset($_POST['bname']))
{ $bcode=$_POST['bcode'];
  $bname=$_POST['bname'];
  $query="insert into branch(b_code,b_name)values('$bcode','$bname')";
   if(mysqli_query($con,$query))
   {      if(!($a=mkdir("data/$bcode")))
          { ?>
		    <script>
	        alert("folder was nt created");
	        window.location="admin_panel.php";
	        </script> 
            <?php
           }
          else
		  { ?>     
		    <script>
	        alert("branch inserted and folder created");
	        window.location="admin_panel.php";
	        </script>
	        <?php             }
            // echo "record inserted";
	}
   else
	{  ?>
	<script>
	alert("error");
	window.location="admin_panel.php";
	</script>
       <?php
	   //echo mysqli_error($con);
	 }
}




if(isset($_POST['scode'])&&isset($_POST['sname']))
{ $scode=$_POST['scode'];
  $sname=$_POST['sname'];
  $bcode=$_POST['branch'];
  $query="insert into subject(s_code,s_name,b_code)values('$scode','$sname','$bcode')";
      if(mysqli_query($con,$query))
      {   if(!($b=mkdir("data/$bcode/$scode")))
          { ?>
		    <script>
	        alert("folder was nt created");
	        window.location="admin_panel.php";
	        </script> 
            <?php
           }
          else
		   { ?>    
            <script>
	        alert("subject inserted and folder created");
	        window.location="admin_panel.php";
	        </script> 
            <?php

   // echo "record inserted";
	       }
	  }

	  else
	{  ?>
	<script>
	alert("error");
	window.location="admin_panel.php";
	</script>
     <?php
	//echo mysqli_error($con);
    }
}

?>


<?php
if(isset($_FILES['file']))
{
    $bcode=$_POST['branch'];
    $scode=$_POST['subject'];
    $filename=$_FILES['file']['name'];
    $target_dir="data/$bcode/$scode/";
  if(is_uploaded_file($_FILES['file']['tmp_name']))
  {  $query1="insert into notes(b_code,s_code,f_name)values('$bcode','$scode','$filename')";
     mysqli_query($con,$query1);
	 move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$filename);
  
  ?>
		    <script>
	        alert("file uploaded");
	        window.location="admin_panel.php";
	        </script> 
            <?php
}
  else
  { ?>
		    <script>
	        alert("there was some error");
	        window.location="admin_panel.php";
	        </script> 
            <?php

	  }

}





?>

