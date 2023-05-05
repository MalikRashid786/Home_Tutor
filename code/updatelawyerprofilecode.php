<?php 
include '../config.php';
$section=$_POST['section'];
$lawyer_id=$_POST['lawyer_id'];
if($section==1)
{
  // section on query
	$select_prac_state=$_POST['select_prac_state'];
  $select_prac_district=$_POST['select_prac_district'];
	$bar_enroll_date=$_POST['bar_enroll_date'];
	if($casehandled=$_POST['casehandled']==""){
    $casehandled="--";
  }else{
    $casehandled=$_POST['casehandled'];
  }

  if($select_prac_district=$_POST['select_prac_district']==""){
    $select_prac_district="--";
  }else{
    $select_prac_district=$_POST['select_prac_district'];
  }

  if($select_prac_state=$_POST['select_prac_state']==""){
    $select_prac_state="--";
  }else{
    $select_prac_state=$_POST['select_prac_state'];
  }
	$query="UPDATE tbl_lawyer SET practicingstate='$select_prac_state',practicingdistrict='$select_prac_district',bar_enroll_date='$bar_enroll_date',casehandled='$casehandled',date_time=now() WHERE lawyer_id='$lawyer_id'";
    mysqli_query($connect,$query);
    header('location:../lawyerindex.php');
}
else if($section==2)
{
	// section two query
   $newcourtname=$_POST['current_college']; 
   
   $query="UPDATE tbl_lawyer SET practicingcourt='$newcourtname',date_time=now() WHERE lawyer_id='$lawyer_id'";
   mysqli_query($connect,$query);
   header('location:../lawyerindex.php');
}
else if($section==3)
{
 $lawname=$_POST['lawname'];
 $query="DELETE FROM tbl_lawyer_lawtype WHERE lawyer_id='$lawyer_id'";
 mysqli_query($connect, $query);
 foreach ($lawname as $key => $type) {
  $query1="INSERT INTO tbl_lawyer_lawtype(name,lawyer_id,date_time)VALUES('$type','$lawyer_id',now())";
  mysqli_query($connect, $query1);
  $query1="UPDATE tbl_lawyer SET practicingarea=1,date_time=now() WHERE lawyer_id='$lawyer_id'";
   mysqli_query($connect,$query1);
  header('location:../lawyerindex.php');
 }
}
else if($section==4)
{
  $languagename=$_POST['language']; 
   $newlanguagename=implode(", ",$languagename);
   
   $query="UPDATE tbl_lawyer SET language='$newlanguagename',date_time=now() WHERE lawyer_id='$lawyer_id'";
   mysqli_query($connect,$query);
   header('location:../lawyerindex.php');
}
else if($section==5)
{
   $account=$_POST['account']; 
   $ifsc=$_POST['ifsc']; 
   
   $query="UPDATE tbl_lawyer SET account_number='$account', ifsc='$ifsc' WHERE lawyer_id='$lawyer_id'";
   mysqli_query($connect,$query);
   header('location:../lawyerindex.php');
}
else if($section==9)
{
$filename=$_FILES['file']['name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="profileUpload/";
$query="UPDATE tbl_lawyer SET filename='$filename',date_time=now() WHERE lawyer_id='$lawyer_id'";
   mysqli_query($connect,$query);
   move_uploaded_file($tmp_name, $location.$filename);
   header('location:../lawyerindex.php');
}
else if($section==10)
{
   $lawyername=$_POST['lawyername'];    
   $query="UPDATE tbl_lawyer SET name='$lawyername',date_time=now() WHERE lawyer_id='$lawyer_id'";
   mysqli_query($connect,$query);
   header('location:../lawyerindex.php');
}
else
{
	// Section Three query
	if($number=$_POST['number']=="")
    {
	$number="--";
    }
    else
{
	$number=$_POST['number'];
}
if($altnumber=$_POST['altnumber']=="")
{
	$altnumber="--";
}
else
{
	$altnumber=$_POST['altnumber'];
}
if($selectstate=$_POST['selectstate']=="")
{
	$selectstate="--";
}
else
{
	$selectstate=$_POST['selectstate'];
}
if($selectdistrict=$_POST['selectdistrict']=="")
{
	$selectdistrict="--";
}
else
{
	$selectdistrict=$_POST['selectdistrict'];
}
if($locality=$_POST['locality']=="")
{
	$locality="--";
}
else
{
	$locality=$_POST['locality'];
}
if($pincode=$_POST['pincode']=="")
{
	$pincode="--";
}
else
{
	$pincode=$_POST['pincode'];
}
if($website=$_POST['website']=="")
{
	$pincode="--";
}
else
{
	$website=$_POST['website'];
}
$query="UPDATE tbl_lawyer SET number='$number',alt_number='$altnumber',state='$selectstate',district='$selectdistrict',locality='$locality',pincode='$pincode',website='$website',date_time=now() WHERE lawyer_id='$lawyer_id'";
mysqli_query($connect,$query);
header("location:../lawyerindex.php");
}
?>
