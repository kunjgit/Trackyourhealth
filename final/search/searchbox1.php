
<html>
<head>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets8.lottiefiles.com/packages/lf20_42B8LS.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px; margin-left:auto; margin-right:auto;"  loop  autoplay></lottie-player>

    <link rel="stylesheet" href="searchStyle1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;600;700;900&family=Ubuntu:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <style>
        body {
            font-family: "Montserrat";
            text-align: center;
        }
        .one {
            font-size: small;
        }
    </style>
</head>

<body style="background: #f0f3ff;">
<form action="#" method="GET">
    <div class="main">

        <div class="hero">
            <div id="searchBox">
                
                    <img src="p1.png" id="tyhIcon">
                    <input type="text" name="search_doctor" placeholder="Search Information About Doctor" required>
                    <div class="btn">
                    <button ><i class="fa-brands fa-searchengin"></i></button>
                </div>

                       
            </div>
            </div>
    <div class="getElementById" >
               <?php
                error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);

    
    $host="localhost";
    $username='root';
    $pass="";
    $db='duhacks';

    $conn=new mysqli($host,$username,$pass,$db);

    if(!$conn)
    {
        exit("Connection failed");
    }

    if($_SERVER['REQUEST_METHOD']=='GET')
    {

        $search=$_GET['search_doctor'];

        $sql="SELECT * FROM `tbl_admin` WHERE `id`='$search'";

        
        $req=mysqli_query($conn,$sql);

        $num=mysqli_num_rows($req);
       

        if($num==0 && $_SERVER['REQUEST_METHOD']!='GET')
        {
            echo "NO Doctor with this ID No";
        }
       
        echo "Doctor No $search's Details";
        while($row=mysqli_fetch_assoc($req))
        {
            
            $fnm=$row['first_name'];
            $mnm=$row['mid_name'];
            $lnm=$row['last_name'];
            $mono=$row['mobile'];
            $email=$row['email'];
            $add=$row['address'];
            $quali=$row['qualification'];
            $hospnm=$row['hospital_name'];
            $hono=$row['hospital_number'];
            $bgrp=$row['blood_group'];
            $ss=$row['specialist_subject'];
            $bod=$row['birth_date'];
            ?>
            
            <div class="search1">
            <table>
                <tr>
                    <td class="one">First name:-</td>
                    <td class="one"><?php echo$fnm ; ?></td>
                </tr>
                <tr>
                    <td class="one">Middle name:-</td>
                    <td class="one"><?php echo$mnm ; ?></td>
                </tr><tr>
                    <td class="one">Last name:-</td>
                    <td class="one"><?php echo$lnm ; ?></td>
                </tr><tr>
                    <td class="one">Mobile Number:-</td>
                    <td class="one"><?php echo$mono ; ?></td>
                </tr><tr>
                    <td class="one">Email:-</td>
                    <td class="one"><?php echo$email ; ?></td>
                </tr><tr>
                    <td class="one">Address:-</td>
                    <td class="one"><?php echo$add ; ?></td>
                </tr><tr>
                    <td class="one">Qualification:-</td>
                    <td class="one"><?php echo$quali ; ?></td>
                </tr><tr>
                    <td class="one">Hospiatal Name:-</td>
                    <td class="one"><?php echo$hospnm ; ?></td>
                </tr><tr>
                    <td class="one">Hospital Number:-</td>
                    <td class="one"><?php echo$hono ; ?></td>
                </tr><tr>
                    <td class="one">Date of Birth:-</td>
                    <td class="one"><?php echo$bod ; ?></td>
                </tr><tr>
                    <td class="one">Specialist Subject:-</td>
                    <td class="one"><?php echo$ss ; ?></td>
                </tr><tr>
                    <td class="one">Blood Group:-</td>
                    <td class="one"><?php echo$bgrp ; ?></td>
                </tr>

            </table>
            </div>
            <?php
            
        }

        


    }

?>
            </div>
        
    
</div>
    <script>
        var searchBox = document.getElementById("searchBox");
        var tyhIcon = document.getElementById("tyhIcon");

        tyhIcon.onclick = function () {
            searchBox.classList.toggle("active");
        }
    </script>
</form> 
</body>


</html>