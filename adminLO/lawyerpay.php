<?php
include_once('header.php');
$appointment_id=$_REQUEST["appointment_id"];
$lawyer_id=$_REQUEST["lawyer_id"];
?>
<div class="container" style="margin-top: 120px">
  <div class="row justify-content-center">
    <div class="col-xl-9 col mb-5" >
      <div class="card shadow">
        <div class="card-header border-0 px-3">
          <div class="row">
            <p class="mb-0 h4 col-6 text-dark">Add <span class=" display-4">Payment</span></p>
              <div class=" col-6">
              <a href="lawyerpayment.php"><button type="button" class="btn btn-secondary btn-sm float-right">Back </button></a>
              </div>
          </div>
        </div>
	    <form id="validate_form" action="code/lawyerpaycode.php" method="POST">
	    	<input type="text" name="appointment_id" hidden value="<?php echo $appointment_id ?>">
	    	<input type="text" name="lawyer_id" hidden="" value="<?php echo $lawyer_id ?>">
		    <div class="mb-3 px-5">
		      <label>Txn Id</label>
		      <input type="text" name="txn_id" placeholder="Transaction Id" class="form-control" required>
		    </div>
		    <div class="mb-3 px-5">
		      <label>Amount</label>
		      <input type="number" name="amount" placeholder="Amount"class="form-control" required>
		    </div>
		  <button class="btn btn-dark btn-sm mb-3 mt-3 mr-3 float-right" type="submit">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
     $('#validate_form').parsley();
  });
</script>