<?php 
include'header.php';
include 'config.php';
$query6="SELECT count(answered_id) AS `totalanswere` FROM tbl_answere";
$result6=mysqli_query($connect,$query6);
$row6=mysqli_fetch_array($result6);
?>
<!-- start ask question page -->
<section id="allanswere" class="bg-secondary">
	<div class="container py-5">
		<div class="py-3 bg-white shadow card border-0  px-2">
			<div class="row">
				<div class="col-md-6 col-8">
				<h1 class="text-dark">Latest Answer(<?php echo $row6['totalanswere'];?>)</h1>
				</div>
				<div class="col-md-6 col-4">
				<a href="genaskquestion.php">
				<button class="btn btn-success float-right mr-1 mt-2 btn-sm">Ask a question</button>
				</a>
				</div>
			</div>
		</div>
			<div class="row mt-3 justify-content-center">
				<div class="col-xl-11 text-dark">
				  <div id="load_data"></div>
                  <div id="load_data_message" class="text-center mt-4"></div>
			   </div>
			</div>
		</div>
</section>
<!-- end ask question page -->

<script type="text/javascript">
  $(document).ready(function() {
    var url="fetch_answere.php"
     load_data(url);
    });
</script>
<?php 
include'footer.php';
?>