<html>
    <head>
        <title>Upload the files for the patient</title>
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
    <body>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets10.lottiefiles.com/packages/lf20_umoglgxj.json"  background="#000000"  speed="1"  style="width: 300px; height: 300px; margin-left:auto; margin-right:auto;"  loop  autoplay></lottie-player>
<br>
<br>
<br>
<br>

        <form action="#" method="POST" enctype="multipart/form-data">
            <h1>Enter patient id </h1>
            <input type="text" class="input-id" name="id"><br><br>
            <input type="file" name="doc[]" multiple><br><br>

            <input type="submit" class="input-button" value="Upload file(s)" name="submit">
        </form>
    </body>
</html>

<?php
include("config.php");
if(isset($_POST['submit'])) {
    foreach ( $_FILES['doc']['name'] as $key=>$val)
    {
        $ID=$_POST['id'];
        $random = rand('11111', '99999');
        $file = $random.'_'.$val;
        move_uploaded_file($_FILES['doc']['tmp_name'][$key],'du_hacks/'.$file);

        $query = "INSERT INTO filestoring (file_source,patient_id) VALUES ('$file','$ID')";
        $data = mysqli_query($link, $query);

        if($data) {
            echo "";
        }
        else {
            echo "Failed to upload the files";
        }
    }
}
?>
