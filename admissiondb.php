<html>
<body  style="backgroundColor:indigo; background-size:cover;background-repeat:no-repeat;">
<?php

  $conn=mysqli_connect("localhost","root","","yccollege");
  if($conn->connect_error)
  {
	  die("Not connected".$con->connect_error);
  }
  else
  {
	  echo "<h1>Form Submitted successfully </h1><br><br><br><br><br><br><br>";
	  $lnm=$_REQUEST['nt1'];
	   $fnm=$_REQUEST['nt2'];
	   $mnm=$_REQUEST['nt3'];
	   $cls1=$_REQUEST['ct1'];
	   $cls2=$_REQUEST['ct2'];
	 
	 
	     mysqli_query($conn,"insert into ycclg values('$lnm','$fnm','$mnm','$cls1','$cls2');");
	      echo "<script>alert('SUBMITTED SUCCESSFULLY')</script>";
	   mysqli_close($conn);
  }

?>
</body>
</html>