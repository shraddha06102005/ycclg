<?php

  $conn=mysqli_connect("localhost","root","","yccollege");
  if($conn->connect_error)
  {
	  die("Not connected".$con->connect_error);
  }
  else
  {
	  echo "<h1>Form Submitted successfully</h1> <br><br><br><br><br><br><br>";
	  $n1=$_REQUEST['nt1'];
	  $n2=$_REQUEST['nt2'];
	   $n3=$_REQUEST['nt3'];
	  
	  
	   mysqli_query($conn,"insert into ycclg values('$n1','$n2','$n3');");
	      echo "<script>alert('SUBMITTED SUCCESSFULLY')</script>";
	  
	  
	  mysqli_close($conn);
  }

?>
