<?php
include("header.php");
include("../config.php");
?>
  <!-- End Navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6" data-aos="fade-right">
              <div class="card card-stats mb-4 mb-xl-0 shadow border-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Question</h5>
                      <span class="h2 font-weight-bold mb-0"></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-dark text-white rounded-circle shadow">
                        <i class="fa fa-question"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6" data-aos="fade-up">
              <div class="card card-stats mb-4 mb-xl-0 shadow border-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Students</h5>
                      <span class="h2 font-weight-bold mb-0"></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-default text-white rounded-circle shadow">
                        <i class="fa fa-users"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6" data-aos="fade-down">
              <div class="card card-stats mb-4 mb-xl-0 shadow border-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Tutor</h5>
                      <span class="h2 font-weight-bold mb-0"></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-dark text-white rounded-circle shadow">
                        <i class="fa fa-tag"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6"data-aos="fade-left">
              <div class="card card-stats mb-4 mb-xl-0 shadow border-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Appointments  </h5>
                      <span class="h2 font-weight-bold mb-0"></span>
                    </div>
                    <div class="col-auto">
                      
                      <div class="icon icon-shape bg-default text-white rounded-circle shadow">
                        
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header shadow border-0">
              <p class="mb-0"data-aos="fade-right" style="font-size:19px">Recently <span class="text-dark display-4">Appointments</span></p>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Students Name</th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Appointment Id</th>
                    <th scope="col">Date</th>                                     
                    <th scope="col">Time </th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                 <!--  <?php 
                    $a=0;
                     while ($row2=mysqli_fetch_array($result2)) {
                       $a++;
                       $categoryid=$row2["pcategory"];
                     $query3="select * from tbl_category where cate_id='$categoryid'";
                     $result3=mysqli_query($connect,$query3);
                     $row3=mysqli_fetch_array($result3);

                     $brandid=$row2["pbrand"];
                     $query4="select * from tbl_brand where brand_id='$brandid'";
                     $result4=mysqli_query($connect,$query4);
                     $row4=mysqli_fetch_array($result4);
                     if ($row2['pquantity']>=3) {
                  ?>
                  <tr>
                     <td>
                      <?php echo $a,("."); ?>
                    </td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm"> <?php echo $row2["pname"]; ?></span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <?php echo $row2["pquantity"]; ?>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i> Available
                      </span>
                    </td>
                    <td>
                      <?php echo $row4["bname"]; ?>
                    </td>
                     <td>
                      <?php echo $row3["cname"]; ?>
                    </td>
                     <td>
                      <?php echo $row2["price"]; ?>
                    </td>
                  </tr>
                   <?php } 
                    else if ($row2['pquantity']<=3 && $row2['pquantity']>=1) {
                       
                      ?>
                      <tbody class="bg-warning text-white">
                  <tr>
                     <td>
                      <?php echo $a,("."); ?>
                    </td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm"> <?php echo $row2["pname"]; ?></span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <?php echo $row2["pquantity"]; ?>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-danger"></i> Warnnig
                      </span>
                    </td>
                    <td>
                      <?php echo $row4["bname"]; ?>
                    </td>
                     <td>
                      <?php echo $row3["cname"]; ?>
                    </td>
                     <td>
                      <?php echo $row2["price"]; ?>
                    </td>
                  </tr></tbody>
                    <?php } 
                    if ($row2['pquantity']==0) {?>
                      <tbody class="bg-danger text-white">
                  <tr>
                     <td>
                      <?php echo $a,("."); ?>
                    </td>
                    <th scope="row">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="mb-0 text-sm"> <?php echo $row2["pname"]; ?></span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <?php echo $row2["pquantity"]; ?>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i> Not Available
                      </span>
                    </td>
                    <td>
                      <?php echo $row4["bname"]; ?>
                    </td>
                     <td>
                      <?php echo $row3["cname"]; ?>
                    </td>
                     <td>
                      <?php echo $row2["price"]; ?>
                    </td>
                  </tr></tbody>
                <?php }
                 }?> -->
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
                  <a href="product.php"><button class="btn text-white bg-dark btn-sm float-right">View All </button></a>
            </div>
          </div>
        </div>
      </div>
