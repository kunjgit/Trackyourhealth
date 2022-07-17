<?php

	$host='localhost';
	$username='root';
	$pass='';
	$db='duhacks';
	
    
    $conn = new mysqli($host,$username,$pass,$db);
    

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        // Button Clicked
        //echo "Button Clicked";

        //1. Get the Data from form
        //$full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); //Password Encryption with MD5

    $first_nm=$_POST['fname'];
    
    $mid_nm=$_POST['mname'];
    

    $last_nm=$_POST['lname'];

    $mobile=$_POST['mono'];

    
    $email=$_POST['email'];
    
    $address=$_POST['adr'];
   
    $gender;
    if($_POST['gen']=='female')
        $gender=0;
    else
        $gender=1;

    $bod=$_POST['bod'];

    $hospital_nm=$_POST['hname'];
    
    $quali=$_POST['quali'];
    

    $blood_grp=$_POST['bgroup'];
   
    $ss=$_POST['ss'];
   
    $hono=$_POST['hono'];


    $sql="INSERT INTO `tbl_admin` (`id`, `username`, `password`, `first_name`, `mid_name`, `last_name`, `mobile`, `email`, `address`, `birth_date`, `hospital_name`, `gender`, `hospital_number`, `qualification`, `specialist_subject`, `blood_group`, `joining_date`) VALUES (NULL, '$username', '$password', '$first_nm', '$mid_nm', '$last_nm', '$mobile', '$email', '$address', '$bod', '$hospital_nm', '$gender', '$hono', '$quali', '$ss', '$blood_grp', current_timestamp())";



        //2. SQL Query to Save the data into database
    $result=mysqli_query($conn,$sql);
        	
      if(!$result)
      {
      	echo "not enterted";
      }
 	}
        //3. Executing Query and Saving Data into Datbase
        


?>

<!DOCTYPE html>
<html>
<head>

	<title>Doctor_registration</title>
	<style >
		  
@import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Comfortaa&family=Fredoka+One&family=Modak&family=Nunito:wght@600&display=swap');


@font-face {
    src: url(/fonts/GarbataTrial-Extralight.ttf);
    font-family: nancy;
}

@font-face {
    src: url(fonts/Borsok\ 400.otf);
    font-family: logofont;
}

@font-face {
    src: url(fonts/Chloe-Regular.otf);
    font-family: taglinefont;
}

	</style>

<link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;600;700;900&family=Ubuntu:wght@300;400&display=swap"
      rel="stylesheet"
    />
</head>
<body>

<div class="main-content">
    <div class="wrapper">
        <h1 style="  font-family: logofont;  color:#7ed756; letter-spacing: 0.5mm; text-align:center;">Add Doctor</h1>

        <br><br>

        <div class="form">
            <style>
            	body{
            		background-color: black;
                    font-family: "Montserrat";

            	}

                .tbl-30{
                	border: 2px solid white;
                    width:50%;
                    padding:20px;
                    border-radius:10px;
                    margin-right: auto;
                    margin-left: auto;
                    color:white;
                    background-color:rgb(5,28,35);
                    font-size:20px;
                    box-shadow: 3px 2px 10px 1px white;
                    
                }
                td:hover{
                    color:lightblue;
                }
                
                .tbl-30 input:hover{
                    color:red;
                }
                .tbl-30 input{
                    width:400px;
                    padding:7px;
                    outline:0;
                    margin-bottom:4%;
                    border-radius:5px;
                    box-shadow:2px 1px 7px .5px white;
                    background-color: black;
                    
                }
                .tbl-30 input:hover{
                    background-color:lightblue;
                    color:white;
                }
                .button input{
                    background-color:white;
                    
                }
                .input-field {
                    color: white;
                }
            </style>
        <form action="" method="POST">

            <table class="tbl-30">
                
                
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" class="input-field" placeholder="Your Username" required>
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" class="input-field" placeholder="Your Password" required>
                    </td>
                </tr>
                <tr>
                    <td>First Name: </td>
                    <td>
                        <input type="text" name="fname" class="input-field" placeholder="Your First Name" required>
                    </td>
                </tr>
                <tr>
                    <td>Middel Name: </td>
                    <td>
                        <input type="text" name="mname" class="input-field" placeholder="Your Middel Name" required>
                    </td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td>
                        <input type="text" name="lname" class="input-field" placeholder="Your last Name"   required>
                    </td>
                </tr>
                <tr>
                    <td>Mobile: </td>
                    <td>
                        <input type="number" name="mono" class="input-field" placeholder="Your Mobile"   required>
                    </td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td>
                        <input type="text" name="gen" class="input-field" placeholder="Your Gender"   required>
                    </td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td>
                        <input type="email" name="email" class="input-field" placeholder="Your Email"  required>
                    </td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td>
                        <input type="text" name="adr" class="input-field" placeholder="Your Address"   required>
                    </td>
                </tr>
                <tr>
                    <td>Qualification: </td>
                    <td>
                        <input type="text" name="quali" class="input-field" placeholder="Your Qualification" required>
                    </td>
                </tr>
                <tr>
                    <td>Blood Group: </td>
                    <td>
                        <input type="text" name="bgroup" class="input-field" placeholder="Your Blood Group"  required>
                    </td>
                </tr>
                <tr>
                    <td>Hospital Name: </td>
                    <td>
                        <input type="text" name="hname" class="input-field" placeholder="Your Hospital Name" required>
                    </td>
                </tr>
                <tr>
                    <td>Hospital No: </td>
                    <td>
                        <input type="number" name="hono" class="input-field" placeholder="Your Hospital No"  required>
                    </td>
                </tr>
                <tr>
                    <td>Birth Date: </td>
                    <td>
                        <input type="date" name="bod" class="input-field" placeholder="Your Birth Date" style="color:gray;"   required>
                    </td>
                </tr>
                <tr>
                    <td>Specialist-Subject: </td>
                    <td>
                        <input type="text" name="ss" class="input-field" placeholder="Your Specialist-Subject" required>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <input type="submit"  name="submit" class="input-field" value="Add Admin" class="btn-secondary"  style="font-family:taglinefont; background-color:lightblue; font-size:18px; margin-top:20px; width:100%">
                    </td>
                </tr>

            </table>

        </form>
        </div>


    </div>
</div>



</body>
</html>