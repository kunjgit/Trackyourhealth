<?php
$host='localhost';
$user='root';
$pass='';
$db='zayka';

$conn = new mysqli($host,$user,$pass,$db);

if($_SERVER['REQUEST_METHOD']=='POST')
{
	//echo "string";    
	$id=$_POST['id'];
	$name=$_POST['name'];
	$dis=$_POST['dis'];
	$det=$_POST['det'];
	$doc=$_POST['doc'];

	$sql="INSERT INTO `vists` (`id`, `name`, `diseseas`, `details`, `tme_of_visit` ,`doctor_id`) VALUES ('$id', '$name', '$dis','$det ', current_timestamp() ,'$doc')";

	$req=mysqli_query($conn,$sql);

	if(!$req)
	{
		exit("connection failed");
	}

	header("location:hello.php");

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


<div class="main-content">
    <div class="wrapper">
        <h1 style="  font-family: logofont;  color:#7ed756; letter-spacing: 0.5mm; text-align:center;">Add Information</h1>

        <br><br>

        
        <div class="form">
            <style>
                body{
                    background-color:black;
                }
                .tbl-30{
                    width:50%;
                    padding:20px;
                    border-radius:10px;
                    margin-right: auto;
                    margin-left: auto;
                    color:white;
                    background-color:rgb(5, 28, 35);
                    font-size:20px;
                    
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
                    color:white;
                    
                }
                .tbl-30 input:hover{
                    background-color:lightblue;
                    color:black;
                }
                .btn{
                    margin-top:20px;
                    text-align:center;
                    justify-content: center;
                    cursor:pointer;
                }
                .btn button{
                    width:100px;
                    text-decoration: none;
                    height: 40px;
                    border-radius:20px;
                    background-color:lightblue;
                }
                .btn button:hover{
                    background-color:rgb(90, 187, 219);
                }
                .btn button a{
                    font-size:20px;
                    text-decoration:none;
                    color:rgb(5, 28, 35);
                }
                
            </style>
        <form action=# method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>ID NO: </td>
                    <td>
                        <input type="number" name="id" placeholder="Your ID" required>
                    </td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td>
                        <input type="text" name="name" placeholder="Your First Name" required>
                    </td>
                </tr>
                <tr>
                    <td>Diseseas: </td>
                    <td>
                        <input type="text" name="dis" placeholder="Write Your Diseseas" required>
                    </td>
                </tr>
                <tr>
                    <td>Details: </td>
                    <td>
                        <input type="text" name="det" placeholder="Write Details" required>
                    </td>
                </tr>
                <tr>
                    <td>Doctor ID: </td>
                    <td>
                        <input type="number" name="doc" placeholder="Write Doctor ID" required>
                    </td>
                </tr>
                
            </table>
                <div class="btn">
                <button>Upload</button>
                </div>
            

        </form>
        </div>


    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>