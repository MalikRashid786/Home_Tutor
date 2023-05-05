<?php 
include'header.php';
$query1="SELECT * FROM tbl_state ORDER BY name";
$result1=mysqli_query($connect,$query1);
$query2="SELECT * FROM tbl_district ORDER BY name";
$result2=mysqli_query($connect,$query2);
$query3="SELECT * FROM tbl_law ORDER BY lawname";
$result3=mysqli_query($connect,$query3);
?>
<!-- start ask question page -->
<section id="top">
  <div class="header pb-8 pt-5 pt-lg-6" style="min-height: 400px; background-image: url(img/faq.png); background-size: contain;background-repeat: no-repeat; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-dark opacity-8"></span>
      <!-- Header container -->
      <div class="container">
        <div class="row ">
          <div class="col-lg-8 col-md-11">
            <h1 class="display-2 text-white mt-5">Ask Question</h1>
            <p class="text-white mb-5">This is Ask Question Form page. You can Get Legal Advice from Multiple Expert Lawyers.Fisrt You Fill This Form Then You Pay Charge of Asking Question.</p>
          </div>
        </div>
      </div>
    </div>
</section>
<section style="margin-top: -200px" class="bg-secondary py-5">
  <div class="container mb-3 text-dark">
      <div class="row justify-content-center">
          <div class="col-lg-11 col-md-12 mb-5">
          <div class="card border-0 shadow" style="padding: 25px">
           <h3 class="text-center text-green text-uppercase mt-2 mb-2">Ask Multiple Tutors</h3>
          <p class="text-center mb-2">Get veryfied answere from multiple tutor!</p>
          <form role="form" id="validate_form">
            <div class="form-row">
              <div class="form-group col-xl-6 col-md-6 mb-3">
                  <select class="form-control" name="selectlaw" required>
                    <option  required value="">-- Subject --</option>
                      <?php 
                      while($row3=mysqli_fetch_array($result3))
                        {
                      ?>
                        <option  required value="<?php echo $row3['law_id'];?>"><?php echo $row3['lawname'];?></option>
                      <?php
                         }
                      ?>
                  </select>
              </div>
            <!-- <div class="form-group col-xl-6 col-md-6 mb-3">
              <select class="form-control" name="selectreligion" id="religion" required>
                  <option value="">Choose Religion</option>
                  <option value="Muslim">Muslim</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Krischian">Krischian</option>
                  <option value="Sikha">Sikha</option>
              </select>
            </div> -->
            <div class="form-group col-xl-6 col-md-6 mb-3">
                <input class="form-control" data-parsley-pattern="^[a-z A-Z.,1-9!]+$" data-parsley-trigger="keyup"  placeholder="Question title" maxlength="50" name="title[]" type="text" required>
            </div>
            </div>
            <div class="form-group">
                <textarea class="form-control mt-1" rows="3"data-parsley-pattern="^[a-z A-Z1-9@$*_''?=+{}(),
                .]+$" data-parsley-trigger="keyup" placeholder="Type you question here." name="description[]" required></textarea>
            </div>             
           <div class="form-row">
                  <div class="form-group mb-3 col-xl-6 col-md-6">
                       <select class="form-control" name="selectstate" id="state" required>
                          <option  required value="">Choose State</option>
                          <?php 
                            while($row1=mysqli_fetch_array($result1))
                            {
                              if($state==$row1['state_id'])
                              {
                          ?>
                        <option selected required value="<?php echo $row1['state_id'];?>"><?php echo $row1['name'];?></option>
                          <?php
                            } 
                           else{ 
                            ?>
                          <option value="<?php echo $row1['state_id'];?>"><?php echo $row1['name'];?></option>
                               <?php
                             }
                             }
                             ?>
                     </select>
                  </div>
                  <div class="form-group mb-3 col-xl-6 col-md-6">
                       <select class="form-control" id="district" name="selectdistrict" required>
                          <option  required value="">Choose District</option>
                          <?php 
                            while($row2=mysqli_fetch_array($result2))
                            {
                              if($district==$row2['district_id'])
                              {
                          ?>
                        <option selected required value="<?php echo $row2['district_id'];?>"><?php echo $row2['name'];?></option>
                          <?php
                            } 
                           else{ 
                            ?>
                          <option value="<?php echo $row2['district_id'];?>"><?php echo $row2['name'];?></option>
                               <?php
                             }
                             }
                             ?>
                        </select>
                  </div>
            </div>
           <div class="form-row">
              <div class="form-group col-xl-6 col-md-6">
                <input class="form-control" data-parsley-type="number" data-parsley-trigger="keyup" placeholder="Pincode" maxlength="6" name="pincode" type="text" required>
              </div>
            <div class="form-group col-xl-6 col-md-6">
                <input class="form-control" maxlength="10" data-parsley-type="number" data-parsley-trigger="keyup" placeholder="Mobile Number" name="number" type="number" required>
            </div>
          </div>
             <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" name="check_rules" id=" customCheckLogin" id="check_rules" required type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">I Accept <a href="" class="text-success">Term</a> & <a href="" class="text-success">Policy</a></span>
                  </label>
              </div>   
              <div class="form-row justify-content-center py-1"> 
                  <a href="signin.php"><button type="button" class="btn btn-success mb-3 mt-4"  >Continue</button></a>
              </div>
          </form>
          </div>
        </div>
      </div>
  </div>
</section>
<!-- end ask question page -->
<?php 
include'footer.php';
?>