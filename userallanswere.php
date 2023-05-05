<?php
include 'userheader.php';
$query = "SELECT * FROM tbl_answere ORDER BY answered_id DESC";
$result = mysqli_query($connect, $query);
$query6 = "SELECT count(answered_id) AS `totalanswere` FROM tbl_answere";
$result6 = mysqli_query($connect, $query6);
$row6 = mysqli_fetch_array($result6);
?>
<section class="py-5">
	<div class="container mt-4">
	</div>
</section>
<!-- start ask question page -->
<section id="allanswere" style="margin-top: -87px" class="bg-secondary text-dark">
	<div class="container py-5 mt-4">
		<div class="py-3 bg-white shadow border-0 card">
			<div class="row">
				<div class="col-md-6 col-8 ">
					<h1 class="text-dark ml-2">Latest Answer(<?php echo $row6['totalanswere']; ?>)</h1>
				</div>
				<div class="col-md-6 col-4">
					<a href="useraskquestion.php">
						<button class="btn btn-success float-right mr-3 btn-sm mt-2">Ask a question</button>
					</a>
				</div>
			</div>
		</div>
		<div class="row mt-3 justify-content-center">
			<div class="col-xl-11">
				<?php
				while ($row = mysqli_fetch_array($result)) {
					// Find Answere Update Time In ago
					$date = $row['date'];
					$time = $row['time'];
					$date_time = $date . " " . $time;
					date_default_timezone_set('Asia/Kolkata');
					$updateagomsg = get_time_ago($date_time);
					$lawyer_email = $row['lawyer_email'];
					$question_id = $row['question_id'];
					$query2 = "SELECT * FROM tbl_question WHERE question_id='$question_id'";
					$result2 = mysqli_query($connect, $query2);
					if ($row2 = mysqli_fetch_array($result2)) {
						$title = $row2['title'];
						$description = $row2['description'];
					}
					$query3 = "SELECT * FROM tbl_lawyer WHERE email='$lawyer_email'";
					$result3 = mysqli_query($connect, $query3);
					if ($row3 = mysqli_fetch_array($result3)) {
						$lawyer_name = $row3['name'];
						$laweyr_id = $row3['lawyer_id'];
						$filename = $row3['filename'];
					}
				?>
					<div class="card mb-2 shadow border-0">
						<div class="card-body">
							<div class="row justify-content-center">
								<div class="col-md-2  d-flex justify-content-center col-12"><!-- 
					     <img style="width: 80px;height: 80px;padding: 6px" src="code/profileUpload/<?php echo $filename; ?>" class="rounded-circle ml-1 mt-3 mb-4 shadow"> -->
									<div class="img-fluid shadow float-left rounded-circle ml-1 mt-3 mb-4" style="padding: 6px; height: 80px;width: 80px; background-image:url(code/profileUpload/<?php echo $filename; ?>); background-size: cover; background-position: center;cursor:context-menu;">
									</div>
								</div>
								<div class="col-md-10 col-12 bg-white content">
									<h4><a href="userviewquestion.php?qt_id=<?php echo $question_id; ?>" class="nav-link"><?php echo $title; ?></a></h4>
									<p style="margin-left: 13px"><?php echo $description ?>..</p>
									<p style="margin-left: 13px;margin-bottom: -10px">Answered by <a href="userlawyerprofile.php?la_id=<?php echo $laweyr_id ?>" class="text-success"> <?php echo $lawyer_name ?></a> <span class="text-muted"><?php echo $updateagomsg ?></span></p>
								</div>
							</div>
						</div>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</section>
<!-- end ask question page -->

<?php
include 'userfooter.php';
?>