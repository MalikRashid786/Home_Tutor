<?php
include("header.php");
include("../config.php");
$query="SELECT * FROM tbl_state ORDER BY state_id DESC";
$result=mysqli_query($connect,$query);
$query1="SELECT * FROM tbl_district ORDER BY district_id DESC";
$result1=mysqli_query($connect,$query1);
?>
<div class="container-fluid"style="min-height: 100vh;">
      <div class="row">
        <div class="col mb-5" style="margin-top: 54px;">
          <div class="card shadow">
            <div class="card-header border-0">
               <div class="row">
                  <div class="col-6"><p class="mb-0 h4  text-dark"data-aos="fade-up">Manage <span class=" display-4">District </span></p></div>
                  <div class=" col-6">
                  <button type="button" class="btn btn-dark btn-sm float-right mt-2"data-aos="fade-down" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><img src="../images/baseline_add_circle_outline_white_18dp.png" class="img-fluid"> Add District</button>
                  </div>
               </div>
            </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">SN</th>
                    <th scope="col">District Name</th>
                    <th scope="col">State Name </th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                  $a=0;
                     while($row1=mysqli_fetch_array($result1))
                     {
                      $a++;
                      $state_id=$row1['state_id'];
                     $query2="SELECT * FROM tbl_state WHERE state_id='$state_id'";
                     $result2=mysqli_query($connect,$query2);
                     $row2=mysqli_fetch_array($result2);
                  ?>
                  <tr>
                    <td>
                    <?php echo $a,("."); ?>
                    </td>
                    <td scope="row">
                          <span class="mb-0 text-sm text-wrap"><?php echo $row1['name'];?></span>
                    </td>
                    <td>
                      <span><?php echo $row2['name'];?></span>
                    </td>
                    <td >
                     <a href="code/deletedistrict.php?dtid=<?php echo$row1['district_id'];?>"><button class="btn  text-danger btn-sm "><i class="fa fa-trash-o"style="font-size: 19px"></i></button></a>
                    </td>
                  </tr>
                    <?php
                      }
                    ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
 </div>
</section>
<!-----------Modal Here---------->
<div class="modal fade text-dark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title text-dark" id="exampleModalLabel">Add District</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form class="needs-validation" novalidate action="code/adddistrictcode.php" method="post">
    <div class="form-row">
     <div class="col-md-12 mb-3">
      <label for="validationCustom01">State Name</label>
      <select class="custom-select" name="state_id" id="validationCustom01" required>
        <option value="">Choose State</option>
        <?php 
          while($row=mysqli_fetch_array($result))
         {
        ?>
        <option value="<?php echo $row['state_id'];?>"><?php echo $row['name'];?></option>
    <?php
     }
     ?>
      </select>
      <div class="invalid-feedback">
        Please select a state.
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationCustom02">District Name</label>
      <input type="text" placeholder="District Name" class="form-control" name="districtname" id="validationCustom04" required>
      <div class="invalid-feedback">
        Please fill district name.
      </div>
    </div>
  </div>
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-dark" type="submit">Save</button>
      </div>
    </form>
      </div>
    </div>
  </div>
</div>
