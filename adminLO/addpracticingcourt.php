<?php
include("header.php");
include("../config.php");
$query="SELECT * FROM tbl_practicingcourt ORDER BY courtname ASC";
$result=mysqli_query($connect,$query);
?>
<section id="category">
 <div class="container-fluid"style="min-height: 100vh;">
      <div class="row">
        <div class="col mb-5" style="margin-top: 54px;">
          <div class="card shadow">
            <div class="card-header border-0">
               <div class="row">
                  <div class="col-6"><p class="mb-0 h4  text-dark"data-aos="fade-up">Manage <span class=" display-4">Court</span></p></div>
                  <div class=" col-6">
                  <button type="button" class="btn btn-dark btn-sm float-right mt-2"data-aos="fade-down" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><img src="../images/baseline_add_circle_outline_white_18dp.png" class="img-fluid"> Add Court</button>
                  </div>
               </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Court Name</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                 <?php
                  $a=0;
                     while($row=mysqli_fetch_array($result)){
                      $a++;
                  ?>
                  <tr>
                    <td><?php echo $a,("."); ?></td>
                    <td><span class="mb-0 text-sm text-wrap"><?php echo $row['courtname'];?></span></td>
                    <td ><a href="code/deletecourt.php?ctid=<?php echo$row['practicingcourt_id'];?>"><button class="btn  text-danger btn-sm"><i class="fa fa-trash-o"style="font-size: 19px"></i></button></a></td>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered text-dark" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title text-dark" id="exampleModalLabel">Add Court</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="needs-validation" novalidate action="code/addpracticingcourtcode.php" method="post">
  <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationCustom01">Court Name</label>
      <input type="text" class="form-control" placeholder="Court Name" name="courtname" id="validationCustom04" required>
      <div class="invalid-feedback">
        Please fill court name.
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
