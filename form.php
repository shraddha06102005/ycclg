<?php
		$name=$_POST['nt1'];
		$name1=$_POST['nt2'];
		$name2=$_POST['nt3'];
		$dob1=$_POST['bt1'];
		$add2=$_POST['at1'];
		$s1m=$_POST['smt1'];
		$p1m=$_POST['pmt1'];
		$em=$_POST['et1'];
		
		
		require("fpdf.php");
		$pdf=new FPDF();
		$pdf->AddPage();
		
		$pdf->rect(5,5,200,287,'D');
		
		
		$pdf->image("college.jpg",5,5,199,60);
		
		$pdf->SetFont("Arial","B",20,255,255,255);
		$pdf->cell(190,10,"YASHWANTRAO CHAVAN COLLEGE OF SCIENCE, KARAD",0,1,'C');
		$pdf->cell(50,10," ",0,1,'L');
		$pdf->cell(50,10," ",0,1,'L');
		
		//$pdf->cell(190,10,"YASHWANTRAO CHAVAN COLLEGE OF SCIENCE, KARAD",0,1,'C');
		
		
		$pdf->cell(50,10," ",0,1,'L');
		$pdf->cell(50,10," ",0,1,'L');
		$pdf->cell(50,10," ",0,1,'L');
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Name :",1,0,'L');
		$pdf->SetFont("Arial","",15);
		$pdf->cell(140,10,"$name $name1 $name2",1,1,'L');
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Address",1,0,'L');
		$pdf->SetFont("Arial","",15);
		$pdf->cell(140,10,"$add2",1,1,'L');
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"DOB",1,0,'L');
		$pdf->SetFont("Arial","",15);
		$pdf->cell(140,10,"$dob1",1,1,'L');
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Gender",1,0,'L');
		$pdf->SetFont("Arial","",15);
		$pdf->cell(140,10,"19 years",1,1,'L');
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Email ID :",1,0,'L');
		$pdf->SetFont("Arial","",15);
		$pdf->cell(140,10,"$em",1,1,'L');
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Student Mobile No.",1,0,'L');
		$pdf->SetFont("Arial","",15);
		$pdf->cell(140,10,"$s1m",1,1,'L');
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Parents Mobile No.",1,0,'L');
		$pdf->SetFont("Arial","",15);
		$pdf->cell(140,10,"$p1m",1,1,'L');
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Category",1,0,'L');
		$pdf->SetFont("Arial","",15);
		if(isset($_POST["cast"]))
		{
		$pdf->cell(140,10,$_POST["cast"],1,1,'L');
		}
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"SSC Marksheet",1,0,'L');
		$pdf->SetFont("Arial","",15);
		if(file_exists($_POST["ut1"]))
		{
		$pdf->cell(140,10,"YES",1,1,'L');
		}
		else{
			$pdf->cell(140,10,"NO",1,1,'L');
		}
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"AadharCard",1,0,'L');
		$pdf->SetFont("Arial","",15);
		if(file_exists($_POST["ut6"]))
		{
		$pdf->cell(140,10,"YES",1,1,'L');
		}
		else{
			$pdf->cell(140,10,"NO",1,1,'L');
		}
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Retion Card",1,0,'L');
		$pdf->SetFont("Arial","",15);
		if(file_exists($_POST["ut3"]))
		{
		$pdf->cell(140,10,"YES",1,1,'L');
		}
		else{
			$pdf->cell(140,10,"NO",1,1,'L');
		}
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Income Certificate",1,0,'L');
		$pdf->SetFont("Arial","",15);
		if(file_exists($_POST["ut2"]))
		{
		$pdf->cell(140,10,"YES",1,1,'L');
		}
		else{
			$pdf->cell(140,10,"NO",1,1,'L');
		}
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Cast Certificate",1,0,'L');
		$pdf->SetFont("Arial","",15);
		if(isset($_POST["ut4"]))
		{
			$pdf->cell(140,10,"NO",1,1,'L');
		}
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Domicile Certificate",1,0,'L');
		$pdf->SetFont("Arial","",15);
		if(file_exists($_POST["ut5"]))
		{
		$pdf->cell(140,10,"YES",1,1,'L');
		}
		else{
			$pdf->cell(140,10,"NO",1,1,'L');
		}
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Payment SS",1,0,'L');
		$pdf->SetFont("Arial","",15);
		if(file_exists($_POST["ut6"]))
		{
		$pdf->cell(140,10,"YES",1,1,'L');
		}
		else{
			$pdf->cell(140,10,"NO",1,1,'L');
		}
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(50,10,"Total Fees :",1,0,'L');
		$pdf->SetFont("Arial","",15);
		
		$tf=10550;
		$tef=1500;
		$dep=5000;
		$af=2500;
		$total=$tf+$tef+$dep+$af;
		$pdf->cell(70,10,"Tution Fees :",1,0,'L');
		$pdf->cell(70,10,"10,550 /-",1,1,'L');
		
		$pdf->cell(50,10,"",0,0,'L');
		$pdf->cell(70,10,"Term Fees :",1,0,'L');
		$pdf->cell(70,10,"1500 /-",1,1,'L');
		
		$pdf->cell(50,10,"",0,0,'L');
		$pdf->cell(70,10,"Deposite :",1,0,'L');
		$pdf->cell(70,10,"5000 /-",1,1,'L');
		
		$pdf->cell(50,10,"",0,0,'L');
		$pdf->cell(70,10,"Annual Fees:",1,0,'L');
		$pdf->cell(70,10,"2500 /-",1,1,'L');
		
		$pdf->cell(50,10,"",0,0,'L');
		$pdf->cell(70,10,"",0,0,'L');
		
		$pdf->cell(70,10,"$total/-",1,1,'L');
		
		
		$pdf->AddPage();
		$pdf->rect(5,5,200,287,'D');
		$pdf->cell(50,10," ",0,1,'L');
		$pdf->cell(50,10," ",0,1,'L');
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(20,10,"Date  :",0,0,'L');
		$pdf->SetFont("Arial","",15);
		$pdf->cell(30,10,date("l jS \of F Y "),0,0,'L');
		
		$pdf->SetFont("Arial","B",15);
		$pdf->cell(100,10,"",0,0,'L');
		$pdf->cell(100,10,"Principal",0,1,'L');
		$pdf->cell(150,10,"",0,0,'L');
		$pdf->SetFont("Arial","",13);
		$pdf->cell(100,10,"YCCSKarad",0,1,'L');
		$pdf->Output();
?>