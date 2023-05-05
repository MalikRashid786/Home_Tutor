<?php
include '../config.php';
if(isset($_POST["limit"], $_POST["start"]))
{
	$a=0;
	$query="SELECT * FROM tbl_lawyer ORDER BY lawyer_id DESC LIMIT ".$_POST["start"].", ".$_POST['limit']."";
	$result= mysqli_query($connect, $query);
	while($row= mysqli_fetch_array($result))
	{
		$a++;
		echo '
		        <tbody>
                  <tr>
                    <td>
                    '.$a,(".").'
                    </td>
                    <th scope="row">
                     <small style="font-size: 12px">'.$row['name'].'</small>
                    </th>
                    <th scope="row">
                      <a href="#" class="hover text-gray-dark btn" id="'.$row['lawyer_id'].'" >View</a>
                    </th>
                  </tr>
                </tbody> 
		';
	}
}
else{
	echo "string";
}
?>
                  
<!-- 

<script type="text/javascript">
  $(document).ready(function(){
    var limit=  7;
    var start =0;
    var action ='inactive';
    function load_country_data(limit, start)
    {
      $.ajax({
        url:"fetchlawyer.php",
        method:"POST",
        data:{limit:limit, start:start},
        cache:false,
        success:function(data)
        {
           $('#load_data').append(data);
           if(data == '')
           {
            $('#load_data_message').html("<button type='button' class='btn btn-danger'>No Data Found </button>") ; 
            action = 'active';          
           }
           else{
            $('#load_data_message').html("<button type='button' class='btn btn-success'>Please Wait...</button>") ; 
            action = 'inactive';  
           }
        }
      });
    }

    if(action == 'inactive')
    {
      action='active';
      load_country_data(limit, start);
    }
    $(window).scroll(function(){
      if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action=='inactive')
      {
        action='active';
        start= start +limit;
        setTimeout(function(){
          load_country_data(limit,start);
        }, 1000);
      }
    });
  });
</script> -->