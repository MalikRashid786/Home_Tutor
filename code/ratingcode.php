<?php
include '../config.php';
if(isset($_POST['save']))
{
	$uID=$_POST['uID'];
	$lawyer_id=$_POST['lawyer_id'];
	$ratedIndex=$_POST['ratedIndex'];
	$ratedIndex++;
    
   $query5="SELECT * FROM tbl_star  WHERE user_id='$uID' AND lawyer_id='$lawyer_id'";
   $result5=mysqli_query($connect,$query5);
   if($row5=mysqli_fetch_array($result5))
	{
		$user_ID=$row5['user_id'];
	}
	else{
		$user_ID=0;
	}

	if($uID!=$user_ID)
	{
		$query="INSERT INTO tbl_star(user_id,ratepoint,lawyer_id,date,time)VALUES('$uID','$ratedIndex','$lawyer_id',curdate(),curtime())";
        if($result=mysqli_query($connect,$query))
        {
        	echo "1";
        }
        else{
        	echo "0";
        }
	}else{
		$query2="UPDATE tbl_star SET ratepoint='$ratedIndex' WHERE user_id='$uID' AND lawyer_id='$lawyer_id'";
		$result2=mysqli_query($connect,$query2);
		echo "2";
	}
}
 ?>