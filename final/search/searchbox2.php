
<html>
<head>
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
        .reports-button {
            margin-bottom: 10%;
            padding: 3%;
            color: white;
        }
        button .reports{
            text-decoration: none;
            font-size: 1.2rem;
            background-color: black;
            color: white;
        }
        button .details {
            background-color: #051C23;
            text-decoration: none;
            font-size: 1rem;
            color: white;
        }
    </style>
</head>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets4.lottiefiles.com/packages/lf20_vPnn3K.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px; margin-left:auto; margin-right:auto;"  loop  autoplay></lottie-player>



<body style="background: #f0f3ff;">
<form action="#" method="GET">
    <div class="main">

        <div class="hero">
            <div id="searchBox">
                
                    <img src="p1.png" id="tyhIcon">
                    <input type="text" name="search_patient" placeholder="Search Information About Patient" required>
                    <div class="btn">
                    <button ><i class="fa-brands fa-searchengin"></i></button>
                </div>

                       
            </div>
            </div>
    <div class="getElementById" >
               <?php
              // error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
               error_reporting(E_ALL & ~E_NOTICE);
            

    
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

        $search=$_GET['search_patient'];

        $sql="SELECT * FROM `vists` WHERE `id`='$search'";

        
        $req=mysqli_query($conn,$sql);

        $num=mysqli_num_rows($req);
       

        if($num==0 && $_SERVER['REQUEST_METHOD']!='GET')
        {
            echo "NO Paient with this ID No";
        }

        if( $num!=0 && $_SERVER['REQUEST_METHOD']=='GET')
        {
            echo "Patient No $search's Details";
        }
        
       
        while($row=mysqli_fetch_assoc($req))
        {
            
            $name=$row['name'];
            $dis=$row['diseseas'];
            $det=$row['details'];
            $doc=$row['doctor_id'];

            ?>
            
            <div class="search2">
            <table>
                <tr>
                    <td class="one">Name:-</td>
                    <td class="one"><?php echo$name ; ?></td>
                </tr>
                <tr>
                    <td class="one">Diseseas:-</td>
                    <td class="one"><?php echo$dis ; ?></td>
                </tr>
                <tr>
                    <td class="one">Details:-</td>
                    <td class="one"><?php echo$det ; ?></td>
                </tr>
                <tr>
                    <td class="one">Doctor ID:-</td>
                    <td class="one"><?php echo$doc ; ?></td>
                </tr>
                <tr>
                  <td> 
                <button>
                    <a href="http://localhost/Trackyourhealth/final/search/searchbox1.php?search_doctor=<?php echo$doc ; ?>#" class="details">DETAILS</a>
                </button>
                </td> 
        </tr>
            </table>
        
            </div>

            
            <?php
            
        }
        
        


    }

?>

<section class="reports-button">
<button >
         <a href="../../get.php" class="reports"> See Reports</a>
            </button>
</section>
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