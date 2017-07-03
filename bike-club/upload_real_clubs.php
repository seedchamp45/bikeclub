<?php
print("start");
console.log('eiei');
$servername = "localhost";
$username = "rootBike";
$password = "Champpseedd45";
$dbname = "bikeclub";
// rootBike rootBlackmores
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    

// Check connection
if ($conn->connect_error) {
    console.log('cannot connect');
}
else
{

    console.log('eiei');
    print("showwww");
} 


mysqli_set_charset($conn,"utf8");

$target_dir = "upload_real_club/";
$target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo "filee".$_FILES["fileToUpload1"]["name"] . "show";
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image eiei - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size

// Allow certain file formats

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if ($result = $conn->query("SELECT * FROM real_club")) 
    {
        $row_cnt = $result->num_rows;
        printf("Result set has %d rows.\n", $row_cnt);
        echo "The file ". basename( $_FILES["fileToUpload1"]["name"]). "has been uploaded.";

    

        $tempname1 = $_FILES['fileToUpload1']['name'];
     

  
        $description = $_POST['description'];
    
        
          
        $temp1 = explode(".", $_FILES["fileToUpload1"]["name"]);
        $newfilename1 = round(microtime(true)) .'_'.$heading. '2.' . end($temp1);

    

        $sql = "INSERT INTO real_club (id, image_name, description)
        VALUES ('$row_cnt', '$newfilename1','$description')";
        if (mysqli_query($conn, $sql)) {
            for($i = 0; $i < 1; $i++) 
            {
                
                if ($i == 0)
                {
                
                    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"],"upload_real_club/" . $newfilename1)) 
                    {
                        echo "files  1,".$newfilename1. ".";
                    }
                
                
                 }
              
                
                echo $i;

            }
                     echo "<script>
alert('Success');
window.location.href='admin';
</script>";
      
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
            
    }
     else {
        echo "Sorry, there was an error uploading your file eiei.";
    }
}





?>