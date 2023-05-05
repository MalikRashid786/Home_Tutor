<?php
$msg="";
$css_class="";
if(isset($_POST['save_user']))
{
	echo "<h1>", print_r($_FILES['profileImage']['name']), "</h1>";
	$profileImageName= time() . '_' . $_FILES['profileImage']['name'];

	$target= 'profileUpload/' .$profileImageName;
	if(move_uploaded_file($_FILES['profileImage']['tmp_name'], $target))
	{
		$msg="sucesfull upload profileImage";
		$css_class="alert-success";
	}
	else{
		$msg="Failed to file upload";
		$css_class="alert-danger";
	}
}
?>