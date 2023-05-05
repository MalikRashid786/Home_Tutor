<?php
include("header.php");
include("../config.php");
$query="SELECT * FROM tbl_law ORDER BY law_id DESC";
$result=mysqli_query($connect,$query);
$query1="SELECT * FROM tbl_inlawtype ORDER BY lawtype_id DESC";
$result1=mysqli_query($connect,$query1);
?>
<div class="container-fluid"style="min-height: 100vh;">
      <div class="row">
        <div class="col mb-5" style="margin-top: 54px;">
          <div class="card shadow">
            <div class="card-header border-0">
               <div class="row">
                  <div class="col-6"><p class="mb-0 h4  text-dark"data-aos="fade-up">Manage <span class=" display-4">Law Type </span></p></div>
                  <div class=" col-6">
                  <button type="button" class="btn btn-dark btn-sm float-right mt-2"data-aos="fade-down" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><img src="../images/baseline_add_circle_outline_white_18dp.png" class="img-fluid"> Add Law Type</button>
                  </div>
               </div>
            </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                  <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Area Of Law</th>
                    <th scope="col">Law Type </th>
                    <th scope="col">Font-Awesome Code</th>
                    <th scope="col">Delete</th>
                  </tr>
              </thead>
              <tbody>
                    <?php
                     $a=0;
                     while($row1=mysqli_fetch_array($result1)){
                      $a++;
                     $lawareaid=$row1['lawarea_id'];
                     $query2="SELECT * FROM tbl_law WHERE law_id='$lawareaid'";
                     $result2=mysqli_query($connect,$query2);
                     $row2=mysqli_fetch_array($result2);
                  ?>
                  <tr>
                    <td>
                    <?php echo $a,("."); ?>
                    </td>
                    <th><span class="mb-0 text-sm text-wrap"><?php echo $row1['areaname'];?></span></th>
                    <td><span><?php echo $row2['lawname'];?></span></td>
                    <td><span><?php echo $row1['areafontcode'];?></span></td>
                    <td >
                     <a href="code/deletelawtype.php?ltid=<?php echo$row1['lawtype_id'];?>"><button class="btn  text-danger btn-sm "><i class="fa fa-trash-o"style="font-size: 19px"></i></button></a>
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
        <h1 class="modal-title" id="exampleModalLabel text-dark">Add Law Type</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="needs-validation" novalidate action="code/addlawtypecode.php" method="post">
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationCustom01">Area Of Law</label>
      <select class="custom-select" name="lawarea_id" id="validationCustom01" required>
        <option value="">Choose Are Of Law</option>
        <?php 
          while($row=mysqli_fetch_array($result)){
        ?>
        <option value="<?php echo $row['law_id'];?>"><?php echo $row['lawname'];?></option>
    <?php
     }
     ?>
      </select>
      <div class="invalid-feedback">
        Please Select A Area Of Law.
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationCustom02">Law Type Name</label>
      <input type="text" class="form-control" placeholder="Law Type Name" name="lawtypename" id="validationCustom04" required>
      <div class="invalid-feedback">
        Please Fill Law Type Name.
      </div>
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationCustom02">Font-Awesome Class</label>
      <input type="text" class="form-control" placeholder="Font-Awesome Class" name="fontcode" id="validationCustom05" required>
      <div class="invalid-feedback">
        Please Fill Class Name.
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
