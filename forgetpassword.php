<?php
include("header.php");
?>
<section class="py-5 mt-4 bg-secondary">
  <div id="container" class="mt-5">
    <div class="container-fluid">
      <div class="section-heading mb-5 text-center">
        <h1>Forget Pssaword</h1>
      </div>
    </div>
    <div class="container mb-5" style="margin-top: 80px">
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-9 col-11 col-sm-11 mb-5">
          <div class="card shadow border-0 py-2">
            <div class="card-body px-lg-5 py-lg-4">
            <p class="text-center mb-3" style="font-size: 16px">Enter Your Registered Email</p>
              <form id="validate_form" action="forgetsendotp.php" method="POST">
               <div class="form-group mb-4">
                  <input class="form-control" data-parsley-email="email" data-parsley-trigger="keyup" placeholder="Enter Your Registered Email Here" name="email" type="email" required>
                </div>
                <div class="row justify-content-center">
                  <div class="ml-1 mr-1 mt-2 mb-2 col-12"><input  id="submit" type="submit" name="submit" value="Next" class="btn btn-success col-12" readonly  /></div>
                  <div class=" ml-1 mr-1 mt-2 col-12"> <a href="signin.php"><button type="button" class="btn btn-secondary col-12" >Cancel</button></a></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

include("footer.php");
?>

<script type="text/javascript">
  $(document).ready(function() {
     $('#validate_form').parsley();

     $('#validate_form').on('submit',function(event){
      event.preventDefault();
      if($('#validate_form').parsley().isValid())
      {
        // alert($(this).serialize());
        $.ajax({
            url:"code/forgetpasswordcode.php",
            method:"POST",
            data:$(this).serialize(),
            beforeSend:function(){
              $('#submit').attr('disabled','disabled');
              $('#submit').val('Processing...');
            },
            success:function(data)
            {
              // alert(data);
              if(data=="1")
              {
                window.location.href="forgetsendotp.php";
              }
              else{
                swal("Opps..!", "invalid Email","error");
              }
              $('#validate_form')[0].reset();
              $('#validate_form').parsley().reset();
              $('#submit').attr('disabled',false);
              $('#submit').val('Next');
            }
        });
      }
     });
  });
</script>
