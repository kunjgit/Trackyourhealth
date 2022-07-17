<?php
	$host='localhost';
	$username='root';
	$pass='';
	$db='zayka';
	
    
    $conn = new mysqli($host,$username,$pass,$db);

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
    	$search=$_POST['search'];

    	$sql="SELECT * FROM `tbl_admin` WHERE `id`='$search'";

    	$result=mysqli_query($conn,$sql);

    	$num=mysqli_num_rows($result);

    	while($row=mysqli_fetch_assoc($req))
		{
			echo"<tr>".
					"<td>".$row['first_name']."</td>"
					."<td>".$row['mid_name']."</td>"
					."<td>".$row['last_name']."</td>"
					."<td>".$row['mobile']."</td>"
					."<td>".$row['email']."</td>"
					."<td>".$row['address']."</td>"
					."<td>".$row['birth_date']."</td>"
					."<td>".$row['hospital_name']."</td>"
					."<td>".$row['qualification']."</td>"
					."<td>".$row['hospital_number']."</td>"
					."<td>".$row['specialist_subject']."</td>"
					."<td>".$row['blood_group']."</td>"
					."<td>".$row['joining_date']."</td>"
				."</tr>";
		}


    }





?>