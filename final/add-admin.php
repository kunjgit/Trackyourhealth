<?php 
    
   // session_start();
    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/track_your_health/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'zayka');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database


?>
<link rel="stylesheet" href="admin.css">

<style>
  
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


<div class="main-content">
    <div class="wrapper">
        <h1 style="  font-family: logofont;  color:#7ed756; letter-spacing: 0.5mm; text-align:center;">Add Admin</h1>

        <br><br>

       <!--  <?php 
            if(isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
            {
                echo $_SESSION['add']; //Display the SEssion Message if SEt
                unset($_SESSION['add']); //Remove Session Message
            }
        ?> -->

        <form action="" method="POST">

            <table class="tbl-30" style="background-color:black; color:white; margin-left: auto; margin-right: auto; ">
                

                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Your Username" style="background-color:black; color:white;" required>
                    </td>
                </tr>

                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="password" name="password" placeholder="Your Password"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>First Name: </td>
                    <td>
                        <input type="text" name="fname" placeholder="Your First Name"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>Middel Name: </td>
                    <td>
                        <input type="text" name="mname" placeholder="Your Middel Name"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td>
                        <input type="text" name="lname" placeholder="Your last Name"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>Mobile: </td>
                    <td>
                        <input type="number" name="mono" placeholder="Your Mobile"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td>
                        <input type="text" name="gen" placeholder="Your Gender"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td>
                        <input type="email" name="email" placeholder="Your Email"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td>
                        <input type="text" name="adr" placeholder="Your Address"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>Qualification: </td>
                    <td>
                        <input type="text" name="quali" placeholder="Your Qualification"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>Blood Group: </td>
                    <td>
                        <input type="text" name="bgroup" placeholder="Your Blood Group"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>Hospital Name: </td>
                    <td>
                        <input type="text" name="hname" placeholder="Your Hospital Name"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>Hospital No: </td>
                    <td>
                        <input type="number" name="hono" placeholder="Your Hospital No"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>Birth Date: </td>
                    <td>
                        <input type="date" name="bod" placeholder="Your Birth Date"  style="background-color:black; color:white;" required>
                    </td>
                </tr>
                <tr>
                    <td>Specialist-Subject: </td>
                    <td>
                        <input type="text" name="ss" placeholder="Your Specialist-Subject"  style="background-color:black; color:white;" required>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary"  style="font-family:taglinefont">
                    </td>
                </tr>

            </table>

        </form>


    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- <?php include('partials/footer.php'); ?> -->


<?php 
    //Process the Value from Form and Save it in Database

    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
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
        
 
        //3. Executing Query and Saving Data into Datbase
        $res = mysqli_query($conn, $sql) or die(mysqli_error());  

        //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
    //     if($res==TRUE)
    //     {
    //         //Data Inserted
    //         //echo "Data Inserted";
    //         //Create a Session Variable to Display Message
    //         $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
    //         //Redirect Page to Manage Admin
    //         header("location:".SITEURL.'admin/manage-admin.php');
    //     }
    //     else
    //     {
    //         //FAiled to Insert DAta
    //         //echo "Faile to Insert Data";
    //         //Create a Session Variable to Display Message
    //         $_SESSION['add'] = "<div class='error'>Failed to Add Admin.</div>";
    //         //Redirect Page to Add Admin
    //         header("location:".SITEURL.'admin/add-admin.php');
    //     }

    // }
 ?>