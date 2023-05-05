<?php
if(isset($_POST['limit'],$_POST['start']))
{
include 'config.php';
include 'get_time_ago.php';
$query="SELECT * FROM tbl_answere ORDER BY answered_id DESC LIMIT ".$_POST["start"].",".$_POST["limit"]."";
$result=mysqli_query($connect,$query);

    while($row=mysqli_fetch_array($result))

        {
    // Find Answere Update Time In ago
        $date=$row['date'];
        $time=$row['time'];
        $date_time=$date." ".$time;
        date_default_timezone_set('Asia/Kolkata');
        $updateagomsg=get_time_ago($date_time);
        $lawyer_email=$row['lawyer_email'];
        $question_id=$row['question_id'];
        $query2="SELECT * FROM tbl_question WHERE question_id='$question_id'";
        $result2=mysqli_query($connect,$query2);
        if($row2=mysqli_fetch_array($result2))
        {
          $title=$row2['title'];
          $description=$row2['description'];
        }
        $query3="SELECT * FROM tbl_lawyer WHERE email='$lawyer_email'";
        $result3=mysqli_query($connect,$query3);
        if($row3=mysqli_fetch_array($result3))
        {
          $lawyer_name=$row3['name'];
          $laweyr_id=$row3['lawyer_id'];
          $filename=$row3['filename'];
        }

  echo '<div class="card mt-2 border-0 shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2  d-flex justify-content-center col-12">
                     <div class="img-fluid shadow float-left rounded-circle ml-1 mt-3 mb-4"style="padding: 6px; height: 80px;width: 80px; background-image:url(code/profileUpload/'.$filename.'); background-size: cover; background-position: center;cursor:context-menu;">
                        </div>
                     </div>
                    <div class="col-md-10 col-12 content">
                      <a href="genviewquestion.php?qt_id='.$question_id.'" class="nav-link h4">'.$title.'</a>
                      <p class="ml-3">'.$description.'</p>
                      <p class="ml-3 mb-0">Answered by <a href="genlawyerprofile.php?la_id='.$laweyr_id.'" class="text-success"> '.$lawyer_name.'</a> <span class="text-muted">'.$updateagomsg.'</span></p>
                    </div>
                </div>
            </div>
        </div>';
}
}
?>