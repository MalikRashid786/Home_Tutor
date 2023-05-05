<?php 
function get_time_ago($timestamp)
{
  $time_ago = strtotime($timestamp);
  $current_time=time();
  $time_difference= $current_time - $time_ago;
  $seconds= $time_difference;
  $minuts= round($seconds/60);
  $hours= round($seconds/ 3600);
  $days= round($seconds/  86400);
  $weeks= round($seconds/ 604800);
  $months= round($seconds/2629440);
  $years= round($seconds/ 31553280);
  if($seconds <= 60){
    return "just Now";}
  else if($minuts <=60){
     if($minuts==1){
      return "One Minute ago";}
     else{
      return "$minuts Minutes ago";}
  }
  else if($hours <=24){
     if($hours==1){
      return "An Hours ago";}
     else{
      return "$hours Hours ago";}
  }
  else if($days <=7){
     if($days==1){
      return "Yesterday";}
     else{
      return "$days Days ago";}
  }
  else if($weeks <= 4.3)
  {
     if($weeks==1){
      return "A Week ago";}
     else{
      return "$weeks Weeks ago";}
  }
  else if($months <= 12){
     if($months==1){
      return "A Month ago";}
     else{
      return "$months Months ago";}
  }
  else{
     if($years==1){
      return "One Year ago";}
     else{
      return "$years Years ago";}
  }
}







function get_time($timestamp)
{
  $time_ago = strtotime($timestamp);
  $current_time=time();
  $time_difference= $current_time - $time_ago;
  $seconds= $time_difference;
  $minuts= round($seconds/60);
  $hours= round($seconds/ 3600);
  $days= round($seconds/  86400);
  $weeks= round($seconds/ 604800);
  $months= round($seconds/2629440);
  $years= round($seconds/ 31553280);
  if($seconds <= 60){
    return "just Now";}
  else if($minuts <=60){
     if($minuts==1){
      return "One Minute ";}
     else{
      return "$minuts Minutes ";}
  }
  else if($hours <=24){
     if($hours==1){
      return "An Hours ";}
     else{
      return "$hours Hours ";}
  }
  else if($days <=7){
     if($days==1){
      return "Yesterday";}
     else{
      return "$days Days +";}
  }
  else if($weeks <= 4.3)
  {
     if($weeks==1){
      return "A Week +";}
     else{
      return "$weeks Week +";}
  }
  else if($months <= 12){
     if($months==1){
      return "A Month +";}
     else{
      return "$months Month +";}
  }
  else{
     if($years==1){
      return "One Year +";}
     else{
      return "$years Year +";}
  }
}
?>