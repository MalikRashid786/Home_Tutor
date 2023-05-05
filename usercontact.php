<?php
include("userheader.php");
?>
<section id="contact" id="top" class="py-5 mt-2" >
  <div class="container" style="overflow: hidden;">
    <div class="row mt-5 justify-content-center">
        <div class="mt-3">
          <h1>« Contact Us »</h1>
          <p class="text-center h6"> Get In Touch</p>
        </div>
    </div>
       <div class="row justify-content-center">
         <ol class="breadcrumb bg-transparent">
        <li class="breadcrumb-item">
            <a href="userindex.php" class="text-white">Home</a>
        </li>
        <li class="breadcrumb-item active text-light">Contact Us</li>
       </ol>
       </div>
  </div>
</section>
 <section class="bg-secondary text-dark">
    <div class="container border-0 contactform" >
        <div class="row justify-content-center">
        <div class="col-md-5 col-xl-5 col-sm-11 mt-5">
          <h1 class="ml-2 mt-4 text-green">Contact with Us </h1>
          <p class="mt-3 ml-2">Join Our Pool of 1000+ Expert Teachers serving students through great customer ecperience</p>
          <div>
            <img src="img/undraw_Newsletter_re_wrob.png" class="img-fluid shadow mt-5 mb-5">
          </div>
        </div>
        <div class="col-md-1 col-xl-2"></div>
        <div class="col-lg-5 col-md-6 mb-5 mt-3">
          <div class="card border-0 shadow mt-5" style="padding: 25px">
               <h2 class="text-center text-uppercase mb-2 text-dark">Say Hello!</h2>
          <p class="text-center mb-1">Feel free to drop us a line to contact us</p>
          <form class="form-group" id="validate_form">
            <div class="form-group">
                 <input class="form-control mt-1" placeholder="Name"data-parsley-pattern="^[a-z A-Z]+$" data-parsley-trigger="keyup"  name="name" type="text" required>
            </div>
            <div class="form-group">
                <input class="form-control mt-1" data-parsley-type="email" data-parsley-trigger="keyup" placeholder="E-Mail"  name="email" type="email" required>
            </div>
            <div class="form-group">
               <input class="form-control mt-1" placeholder="Subject" data-parsley-pattern="^[a-z A-Z1-9 0@$*_''?=+{}(),.]+$" data-parsley-trigger="keyup"  name="subject" type="text" required>
            </div>
            <div class="form-group">
             <textarea class="form-control mt-1" data-parsley-pattern="^[a-z A-Z1-90@$*_''?=+{}(),
                .]+$" data-parsley-trigger="keyup" placeholder="Description Here.." name="description" required></textarea>
            </div>
                <div class="text-center">
                  <input type="submit"class="btn btn-success col-md-4 col-10 col-xl-6 mr-1 ml-1 " id="submit" value="Continue" name="submit">
              </div>
          </form>
          </div>
        </div>
      </div>
  </div>
 </section>
<section class="OurLocation bg-secondary text-dark">
     <div class="container">
       <div class="row text-center">
         <div class="col-sm-4 mb-4 mt-5" data-aos="fade-up">
          <div class="card shadow border-0 mt-5">
            <div class="web-info">
             <i class="fa fa-phone mb-3 text-green"></i>
             <h1 class="mb-4 text-dark">Phone</h1>
             <p>(+91) 7458847451</p>
             <p>(+91) 7458847451</p>
          </div>
          </div>
         </div>
         <div class="col-sm-4 mb-4 mt-5" data-aos="fade-down">
          <div class="card shadow border-0 mt-5 mb-5">
            <div class="web-info">
             <i class="fa fa-map-signs mb-3 text-green"></i>
             <h1 class="mb-4 text-dark">Our Address</h1>
             <p>123 Frist Avenue</p>
             <p>Lucknow City,Hazratganj</p>
          </div>
          </div>
         </div>
         <div class="col-sm-4 mb-4 mt-5" data-aos="fade-right">
          <div class="card shadow border-0 mt-5">
            <div class="web-info">
             <i class="ni ni-send mb-3 text-green"></i>
             <h1 class="mb-4 text-dark">E-Mail</h1>
             <p>rashidff611@gmail.com</p>
             <p>rashidmalik312001@gmail.com</p>
          </div>
          </div>
         </div>
       </div>
     </div>
</section>
<section class="map bg-secondary py-5">
<div class="container">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56916.270097936875!2d81.89449308699953!3d26.926752556026397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399a1fe84d591931%3A0x1f4c6fa5ec9ef2a6!2sGovernment%20Polytechnic%20Adampur%2C%20Tarabganj!5e0!3m2!1sen!2sin!4v1582731845198!5m2!1sen!2sin" width="1100" height="500" frameborder="0" style="border:0;" allowfullscreen="" class="shadow"></iframe>
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
            url:"code/contactcode.php",
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
                swal("Good job!", "Thank You For Contact Us","success");
                // alert(data);
              }
              else{
                swal("Opps..!", "Try Again","error");
              }

            }
        });
      }
     });
  });
</script>
<?php
include("userfooter.php")
?>