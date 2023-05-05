<?php
include("header.php");
include("../config.php");
$query="SELECT * FROM tbl_user ORDER BY user_id DESC";
$result=mysqli_query($connect,$query);
?>
<section id="category">
 <div class="container-fluid"style="min-height: 100vh;">
      <!-- Table -->
      <div class="row">
        <div class="col mb-5" style="margin-top: 84px;">
          <div class="card shadow">
            <div class="card-header border-0">
                 <p class="mb-0 h4">Manage <span class="text-dark display-4">Users</span></p>
            </div>
            <div class="table-responsive ">
              <table class="table align-items-center">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">SN</th>
                    <th scope="col">User Name</th>
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
                      <a href="#" class="hover" id="<?php echo$row['user_id'];?>" ><?php echo $row['name'];?></a>
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
        url:"fetch.php",
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
