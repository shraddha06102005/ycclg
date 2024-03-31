<html>
<head>

</head>
<?php
$sub = $_POST['optionlist'];
$nm = $_POST['name1'];
?>
<body style="background:url('back1.jpg'); background-size:cover;background-repeat:no-repeat;">
  <img src="formlogo.png" width="200px" height="200px" >
  <h1 class="heading" style="font-size:40px;color:white;margin-top:-130px;margin-left:200px">FEEDBACK SYSTEM</h1>
  <div style="width:1040px;height:8500px;margin-left:500px;margin-top:100px;background-color:transparent;border:2px solid  #FBFCF8;border-radius:20px;
   box-shadow:5px 5px 50px white;"> 
    <div style="width:900px;height:200px;margin-left:20px;margin-top:20px;"> 
	   <img src="images.png" width="1000px" height="300px" style="border:2px solid  #FBFCF8;
   border-radius:20px;">
	</div>
	
	<form action="fycedb1.php" method="POST">
	<div style="width:1000px;height:130px;margin-top:130px;background-color: #FBFCF8;border:2px solid  #FBFCF8;
   border-radius:20px;margin-left:20px;"> 
   <br><br>
   <label style="font-size:25px;color:black;">STUDENT BRANCH</label><br><br>
   <input type="text" name="stubranch1" size="60" style="font-size:20px; border:0px; border-bottom:solid; border-bottom-width:1px;" required>
	</div>
	<div style="width:1000px;height:130px;margin-top:130px;background-color: #FBFCF8;border:2px solid  #FBFCF8;
   border-radius:20px;margin-left:20px;"> 
   <br><br>
   <label style="font-size:25px;color:black;">STUDENT NAME</label><br><br>
   <input type="text" name="stuname1" size="60" style="font-size:20px; border:0px; border-bottom:solid; border-bottom-width:1px;" required>
	</div>
	<div style="width:1000px;height:130px;margin-top:50px;background-color: #FBFCF8;border:2px solid  #FBFCF8;
   border-radius:20px;margin-left:20px;"> 
   <br><br>
   <label style="font-size:25px;color:black;">STUDENT EMAIL</label><br><br>
   <input type="email" name="stuemail" size="60" style=" font-size:20px;border:0px; border-bottom:solid; border-bottom-width:1px;" required>
	</div>
	<div style="width:1000px;height:900px;margin-top:50px;background-color: #FBFCF8;border:2px solid  #FBFCF8;
   border-radius:20px;margin-left:20px;"> 
   <br><br>
   <label style="font-size:25px;color:black;" for="n1"><?php echo $sub; ?></label><br>
 <label style="font-size:25px;color:black;" for="n2"><?php echo $nm; ?></label><br>
   <br><br>
   <label style="font-size:25px;color:black;margin-left:550px; "><b>5</b></label>
   <label style="font-size:25px;color:black;margin-left:50px; "><b>4</b></label>
   <label style="font-size:25px;color:black;margin-left:50px; "><b>3</b></label>
   <label style="font-size:25px;color:black;margin-left:50px; "><b>2</b></label>
	<label style="font-size:25px;color:black;margin-left:50px;"><b>1</b></label><br>
	<label style="font-size:25px;color:black;"><b>Has the teacher Covered entire syllabus <br>as prescribed by college/university/board</b></label>

<input type="radio" name="a1" value="5"  style="margin-left:105px;width:25px;height:20px;" required>
<input type="radio" name="a1" value="4" style="margin-left:35px;width:25px;height:20px;" >
<input type="radio" name="a1" value="3" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a1" value="2" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a1" value="1" style="margin-left:35px; width:25px;height:20px;" >

<br><br>

	<label style="font-size:25px;color:black;"><b>Has the teacher Covered relevant topics <br>beyond syllabus</b></label>

<input type="radio" name="a2" value="5"  style="margin-left:375px;width:25px;height:20px;  " required>
<input type="radio" name="a2" value="4" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a2" value="3" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a2" value="2" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a2" value="1" style="margin-left:35px; width:25px;height:20px;" >

<br><br>

	<label style="font-size:25px;color:black;"><b>Effectiveness of teacher in terms of  <br>(a)Technical content<br>(b)Communication skills<br>(c)Use of teaching aids</b></label>

<input type="radio" name="a3" value="5"  style="margin-left:305px;width:25px;height:20px;  " required>
<input type="radio" name="a3" value="4" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a3" value="3" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a3" value="2" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a3" value="1" style="margin-left:35px; width:25px;height:20px;" >

<br><br>

	<label style="font-size:25px;color:black;"><b>Pace on which contents were covered </b></label>

<input type="radio" name="a4" value="5"  style="margin-left:150px;width:25px;height:20px;  " required>
<input type="radio" name="a4" value="4" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a4" value="3" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a4" value="2" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a4" value="1" style="margin-left:35px; width:25px;height:20px;" >

<br><br>

	<label style="font-size:25px;color:black;"><b>Motivation and inspiration for students <br>to learn</b></label>

<input type="radio" name="a5" value="5"  style="margin-left:465px;width:25px;height:20px;  " required>
<input type="radio" name="a5" value="4" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a5" value="3" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a5" value="2" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a5" value="1" style="margin-left:35px; width:25px;height:20px;" >
<br><br>

	<label style="font-size:25px;color:black;"><b>Support for the development of student <br>skill (1)Practical Demonstration<br>(2)Hands on Training</b></label>

<input type="radio" name="a6" value="5"  style="margin-left:319px;width:25px;height:20px;  " required>
<input type="radio" name="a6" value="4" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a6" value="3" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a6" value="2" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a6" value="1" style="margin-left:35px; width:25px;height:20px;" >
<br><br>
	<label style="font-size:25px;color:black;"><b>Clarity of exceptions of student</b></label>

<input type="radio" name="a7" value="5"  style="margin-left:215px;width:25px;height:20px;  " required>
<input type="radio" name="a7" value="4" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a7" value="3" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a7" value="2" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a7" value="1" style="margin-left:35px; width:25px;height:20px;" >
<br><br>
	<label style="font-size:25px;color:black;"><b>Feedback provided on students progress </b></label>

<input type="radio" name="a8" value="5"  style="margin-left:115px;width:25px;height:20px;  " required>
<input type="radio" name="a8" value="4" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a8" value="3" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a8" value="2" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a8" value="1" style="margin-left:35px; width:25px;height:20px;" >
<br><br>
<label style="font-size:25px;color:black;"><b>Willingness to offer help and advice to<br>students </b></label>

<input type="radio" name="a9" value="5"  style="margin-left:455px;width:25px;height:20px;  " required >
<input type="radio" name="a9" value="4" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a9" value="3" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a9" value="2" style="margin-left:35px;width:25px;height:20px; ">
<input type="radio" name="a9" value="1" style="margin-left:35px; width:25px;height:20px;" >

</div>

<br>
<input type="submit" value="SUBMIT FORM" style="font-size:30px;color:black;border-radius:360px;background-color:gray;color:white;margin-left:360px;width:300px; ">



	

  </form>
</body>
</html>