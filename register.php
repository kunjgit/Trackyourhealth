<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement

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

    $blood_grp=$_POST['blood_group'];
   

       $sql="   INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `first_name`, `mid_name`, `last_name`, `bod`, `mobile`, `address`, `email`, `gender`, `blood_group`) VALUES (NULL, ?, ?, current_timestamp(), '$first_name', '$mid_nm', '$last_nm', '$bod', '$mobile', '$address', '$email', '$gender', '$blood_grp')";


       // $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location:login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

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
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
 
 <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_jcikwtux.json"  background="#000000"  speed="1"  style="width: 300px; height: 300px; margin-left: auto; margin-right: auto;"  loop  autoplay></lottie-player>



<body style="background-color:black; color:white; margin-left: auto; margin-right: auto; ">
    <div class="wrapper" style="background-color:black; color:white; margin-left: auto; margin-right: auto; ">
        <h2  style="  font-family: logofont;  color:#7ed756; letter-spacing: 0.5mm; text-align:center;">Sign Up</h2>
        <p style="font-family:taglinefont; font-size:0.5cm;">Please fill up the details to register yourself for the website</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>First-Name</label>
                <input type="text" name="fname" required style="outline: 0 ; padding: 11px; width: 100% ;border-radius :7px;"></span>
            </div>
            <div class="form-group">
                <label>Middel-Name</label>
                <input type="text" name="mname" required style="outline: 0 ; padding: 11px; width: 100% ;border-radius :7px;">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Last-Name</label>
                <input type="text" name="lname" required style="outline: 0 ; padding: 11px; width: 100% ;border-radius :7px;">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Birth-Date</label>
                <input type="date" name="bod" required style="outline: 0 ; padding: 11px; width: 100% ;border-radius :7px;"></span>
            </div>
            <div class="form-group">
                <label>Mobile-No</label>
                <input type="number" name="mono" required style="outline: 0 ; padding: 11px; width: 100% ;border-radius :7px;"></span>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required style="outline: 0 ; padding: 11px; width: 100% ;border-radius :7px;"></span>
            </div>
            <div class="form-group">
                <label>Adress</label>
                <input type="text" name="adr" required style="outline: 0 ; padding: 11px; width: 100% ;border-radius :7px;"></span>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="text" name="gen" required style="outline: 0 ; padding: 11px; width: 100% ;border-radius :7px;"></span>
            </div>
            <div class="form-group">
                <label>Blood Group</label>
                <input type="text" name="blood_group" required style="outline: 0 ; padding: 11px; width: 100% ;border-radius :7px;"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" >
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>