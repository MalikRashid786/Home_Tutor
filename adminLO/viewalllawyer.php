
<?php
include("header.php");
include("../config.php");
$query="SELECT * FROM tbl_lawyer ORDER BY lawyer_id DESC";
$result=mysqli_query($connect,$query);
?>

<section id="category">
 <div class="container-fluid"style="min-height: 100vh;">
      <div class="row">
        <div class="col mb-5" style="margin-top: 54px;">
          <div class="card shadow">
            <div class="card-header border-0">
               <div class="row">
                  <div class="col-6"><p class="mb-0 h4  text-dark"data-aos="fade-up">Manage <span class=" display-4">Lawyers </span></p></div>
                  <div class=" col-6">
                  </div>
               </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flash">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">SN</th>
                    <th scope="col">lawyer Name</th>
                    <th scope="col">Action</th>
                   <!--  <th scope="col">Delete</th> -->
                  </tr>
                </thead>
                <tbody>
                 <?php
                  $a=0;
                     while($row=mysqli_fetch_array($result))
                     {
                      $a++;
                  ?>
                  <tr>
                    <td>
                    <?php echo $a,("."); ?>
                    </td>
                    <th scope="row">
                      <?php echo $row['name'];?>
                    </th>
                    <th scope="row">
                      <a href="#" class="hover btn text-gray-dark btn-sm" id="<?php echo$row['lawyer_id'];?>" >View</a>
                    </th>
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
<script type="text/javascript">
  $(document).ready(function(){
    $('.hover').popover({
      title:fetchData,
      html:true,
      placement:'right'
    });
    function fetchData(){
      var fetch_data= '';
      var element= $(this);

      var id= element.attr("id");
      // alert(id);
      $.ajax({
        url:"fetch_lawyer.php",
        method:"POST",
        async:false,
        data:{id:id},
        success:function(data)
        {
          fetch_data= data;
        }
      });
      return fetch_data;
    }
  });
</script>
