<?php
include 'config.php';
$lw_id=$_POST['lw_id'];
$output='';
if($lw_id!="")
{
$query="SELECT * FROM tbl_inlawtype WHERE lawarea_id = '".$lw_id."' order by lawtype_id";
$res=mysqli_query($connect,$query);
$output='';
while($row = mysqli_fetch_array($res))
{
  $output .= '<input type="checkbox"class="mr-2" name="lawtype[]" value="'.$row['areaname'].'" />'.$row['areaname'].'<br/>';
}
echo $output;
}

?>