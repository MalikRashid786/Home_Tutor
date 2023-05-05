<?php 
include '../config.php';
$user_id=$_POST['user_id'];
echo$section=$_POST['section'];

if($section==0)
{


if($name=$_POST['username']=="")
{
  $name="--";
}
else{
	$name=$_POST['username'];
}
	$query="UPDATE tbl_user SET name='$name',date=curdate(),time=curtime() WHERE user_id='$user_id'";
mysqli_query($connect,$query);
header("location:../userprofile.php");
}
else{

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
	$query="UPDATE tbl_user SET mo_number='$number',alternate_number='$altnumber',state='$selectstate',	district='$selectdistrict',locality='$locality',pincode='$pincode',date=curdate(),time=curtime() WHERE user_id='$user_id'";
mysqli_query($connect,$query);
header("location:../userprofile.php");
}
?>
