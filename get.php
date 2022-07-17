<html>
    <head>
        <title>Enter the consumer id you want to get cocuments of</title>
        <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;500;600;700;900&family=Ubuntu:wght@300;400&display=swap"
      rel="stylesheet"
    />
    <style>
            body{
                background-color: black;
                color: white;
                text-align: center;
                font-family: "Montserrat";                
            }
            .input-id {
                height: 4%;
                width: 50%;
                background-color: azure;
                border: 3px solid slateblue;
            }
            .input-button {
                background-color: yellow;
                border: 1px solid white ;
                font-size: 1rem;
                /* width: 100px;
                height: 30px; */
            }
            .input-button:hover{
                background-color: greenyellow;
                border: 2px solid white ;
            }
    </style>
    </head>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets10.lottiefiles.com/packages/lf20_dwmrnyxn.json"  background="#000000"  speed="1"  style="width: 400px; height: 400px; margin-left:auto; margin-right:auto;"  loop  autoplay></lottie-player>
    <body style="background-color:black; color:white; ">
        <form action="#" method="POST">
            <h1>Enter patient id </h1>
            <input type="text" class="input-id" name="id"><br><br>
            <input type="submit" class="input-button" value="Get documents" name="submit">
        </form>
    </body>
</html>

<?php
include("config.php");

if(isset($_POST['submit'])){
    $id=$_POST['id'];
   
    //Display Foods that are Active
    $sql = "SELECT * FROM filestoring WHERE patient_id=$id";

    //Execute the Query
    $res=mysqli_query($link, $sql);

    //Count Rows
    $count = mysqli_num_rows($res);

    //CHeck whether the foods are availalable or not
    if($count>0)
    {
        //Foods Available
        while($row=mysqli_fetch_assoc($res))
        {
           
            $id = $row['patient_id'];
            $image_name = $row['file_source'];
            ?>
            
            <div  style="background-color:black" >
                <div style="background-color:black">
                    <?php 
                        //CHeck whether image available or not
                        if($image_name=="")
                        {
                            //Image not Available
                            echo "<div class='error'>Image not Available.</div>";
                        }
                        else
                        {
                            //Image Available
                            ?>
                            <h5 style="text-align:center;" ><?php echo $image_name; ?></h5>
                            <div style="width:100%; text-align:center; ">
                            <img style="height:50%; width:50%; border-radius:1cm; border:2px solid red;" src="du_hacks/<?php echo $image_name; ?>" alt="document" class="img-responsive img-curve">
                        </div>
                            <?php
                        }
                    ?>
                    
                </div>

                

            <?php
        }
    }
    else
    {
        //Food not Available
        echo "<div class='error'>Documents not found.</div>";
    }
}

    ?>



