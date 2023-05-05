<?php
include_once'header.php';
?>
<section id="cahngepassword" class="bg-secondary py-6 mt-5">
  <div class="container">
    <div class="section-heading">
      <h1 class="text-center mb-5"> <span class="text-dark">Change</span> Password </h1>
    </div>
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-10 col-sm-10">
          <div class="card shadow border-0 mb-5 mt-3">
            <div class="card-body px-4">
             <p class="text-center mb-3" style="font-size: 18px">Create a New Password </p>  
              <form role="form" id="validate_form">
                <div class="form-group mb-4">
                  <input class="form-control" placeholder="New Password" id="password" data-parsley-length="[6, 8]" data-parsley-pattern="^[a-zA-Z1-9./!@#$%^&*=-=-;:()_+{}|\?,<>0]+$" data-parsley-trigger="keyup" name="newpassword" type="text" required>
                </div>
                <div class="form-group mb-3">
                  <input class="form-control" placeholder="Confirm Password" data-parsley-equalto="#password" data-parsley-trigger="keyup" name="confpassword" type="text" required>
                </div>
                <div class="row justify-content-center">
                  <div class="ml-1 mr-1 mt-4 mb-2 col-12"><input type="submit" value="Change Password" class="btn btn-dark col-12" id="submit" readonly onClick="sendOTP();" /></div>
                  <div class=" ml-1 mr-1 mt-2 col-12"> <a href="forgetpassword.php"><button type="button" class="btn btn-secondary col-12" >Cancel</button></a></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<script type="text/javascript">
  $(document).ready(function() {
     $('#validate_form').parsley();

     $('#validate_form').on('submit',function(event){
      event.preventDefault();
      if($('#validate_form').parsley().isValid())
      {
        // alert($(this).serialize());
        $.ajax({
            url:"code/changepasswordcode.php",
            method:"POST",
            data:$(this).serialize(),
            beforeSend:function(){
              $('#submit').attr('disabled','disabled');
              $('#submit').val('Processing...');
            },
            success:function(data)
            {
              $('#validate_form')[0].reset();
              $('#validate_form').parsley().reset();
              $('#submit').attr('disabled',false);
              $('#submit').val('Continue');
              // alert(data);
              if(data=="1")
              {
                // swal("Good job!", "Your Password is Changed","success");
                window.location.href="signin.php";
              }
              else{
                swal("Opps..!", "Invalid New Password and Confirm Password. || Try Again","error");
              }
            }
        });
      }
     });
  });
</script>
<?php 
include_once 'footer.php';
?>