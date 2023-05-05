<?php
include_once'userheader.php';
?>
<section id="cahngepassword" class="bg-secondary py-6 mt-5">
  <div class="container">
    <div class="section-heading">
      <h1 class="text-center mb-5"> <span class="text-dark">Change</span> Password </h1>
    </div>
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-10 col-sm-10">
          <div class="card shadow border-0 mb-5 mt-3">
            <div class="card-body px-5 mt-5">              
              <form role="form" id="validate_form">
                <div class="form-group mb-4">
                  <input class="form-control" placeholder="Old Password" data-parsley-trigger="keyup" name="oldpassword" type="text" required>
                </div>
                <div class="form-group mb-4">
                  <input class="form-control" placeholder="New Password" id="password" data-parsley-length="[6, 8]" data-parsley-pattern="^[a-zA-Z1-9./!@#$%^&*=-=-;:()_+{}|\?,<>0]+$" data-parsley-trigger="keyup" name="newpassword" type="text" required>
                </div>
                <div class="form-group mb-3">
                  <input class="form-control" placeholder="Confirm Password" data-parsley-equalto="#password" data-parsley-trigger="keyup" name="confpassword" type="text" required>
                </div>
                <div class="float-right mt-4">
                 <a href="userprofile.php"> <button type="button" class="btn btn-secondary mr-2">Cancel</button></a>
                  <input type="submit" value="Change" class="btn btn-dark" name="usersubmit" id="submit">
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
              if(data=="1")
              {
                // swal("Good job!", "Your Password is Changed","success");
                window.location.href="signin.php";
              }
              else if(data=="0"){
                swal("Opps..!", "Old Password and New Password are Same. || Try Again","error");
              }
               else if(data=="00"){
                swal("Opps..!", "Invalid New Password and Confirm Password. || Try Again","error");
              }
               else{
                swal("Opps..!", "Invalid Old Password. || Try Again. ","error");
              }
            }
        });
      }
     });
  });
</script>
<?php 
include_once 'userfooter.php';
?>