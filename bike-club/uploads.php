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

$target_dir = "upload/";
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
    if ($result = $conn->query("SELECT * FROM bike")) 
    {
        $row_cnt = $result->num_rows;
        printf("Result set has %d rows.\n", $row_cnt);
        echo "The file ". basename( $_FILES["fileToUpload1"]["name"]). "has been uploaded.";

        echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). "has been uploaded.";

        echo "The file ". basename( $_FILES["fileToUpload3"]["name"]). "has been uploaded.";

        echo "The file ". basename( $_FILES["fileToUpload4"]["name"]). "has been uploaded.";

        $tempname1 = $_FILES['fileToUpload1']['name'];
        $tempname2 = $_FILES['fileToUpload2']['name'];
        $tempname3 = $_FILES['fileToUpload3']['name'];
        $tempname4 = $_FILES['fileToUpload4']['name'];

        $brand = $_POST['brand'];
        $spec = $_POST['spec'];
        $category = $_POST['category'];
        $color = $_POST['color'];
        $frame_sizes = $_POST['frame_sizes']; 
        $frame = $_POST['frame'];     
        $fork = $_POST['fork'];
        $derailleur_front = $_POST['derailleur_front'];
        $derailleur_rear = $_POST['derailleur_rear'];
        $shifters = $_POST['shifters'];
        $break_lever = $_POST['break_lever'];
        $brakes = $_POST['brakes'];
        $gender = $_POST['gender'];
        $body_height = $_POST['body_height'];
        $body_weight = $_POST['body_weight'];
        $min_torso_length = $_POST['min_torso_length'];
        $max_torso_length = $_POST['max_torso_length'];
        $min_arm_length = $_POST['min_arm_length'];
        $max_arm_length = $_POST['max_arm_length'];
        $min_shoulder_length = $_POST['min_shoulder_length'];
        $max_shoulder_length = $_POST['max_shoulder_length'];
        $price = $_POST['price'];

        
          
        $temp1 = explode(".", $_FILES["fileToUpload1"]["name"]);
        $newfilename1 = round(microtime(true)) .'_'.$category. '1.' . end($temp1);

        $temp2 = explode(".", $_FILES["fileToUpload2"]["name"]);
        $newfilename2 = round(microtime(true)) .'_'.$category. '2.' . end($temp2);

        $temp3 = explode(".", $_FILES["fileToUpload3"]["name"]);
        $newfilename3 = round(microtime(true)) .'_'.$category. '3.' . end($temp3);

        $temp4 = explode(".", $_FILES["fileToUpload4"]["name"]);
        $newfilename4 = round(microtime(true)) .'_'.$category. '4.' . end($temp4);

        $sql = "INSERT INTO bike (id, brand, spec, category, color, frame_sizes, frame, fork, derailleur_front ,derailleur_rear , shifters, break_lever, brakes, pic_bike_1, pic_bike_2, pic_bike_3, pic_bike_4, gender, body_height, body_weight, min_torso_length, max_torso_length, min_arm_length, max_arm_length, min_shoulder_length, max_shoulder_length, price)
        VALUES ('$row_cnt', '$brand', '$spec' ,'$category', '$color','$frame_sizes', '$frame', '$fork', '$derailleur_front', '$derailleur_rear', '$shifters', '$break_lever', '$brakes','$newfilename1', '$newfilename2', '$newfilename3', '$newfilename4', '$gender' ,'$body_height', '$body_weight','$min_torso_length', '$max_torso_length', '$min_arm_length', '$max_arm_length', '$min_shoulder_length', '$max_shoulder_length','$price')";
        if (mysqli_query($conn, $sql)) {
            for($i = 0; $i < 4; $i++) 
            {
                
                if ($i == 0)
                {
                    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"],"upload/" . $newfilename1)) {
                        echo "files  1,".$newfilename1. ".";
                    }
                }
                elseif ($i == 1)
                {
                    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"],"upload/" . $newfilename2)) {
                        echo "files  2,".$newfilename2. ".";
                    }
                }
                elseif ($i == 2)
                {
                    if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"],"upload/" . $newfilename3)) {
                        echo "files  3,".$newfilename3. ".";
                    }
                }
                else
                {
                    if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"],"upload/" . $newfilename4)) {
                        echo "files  4,".$newfilename4. ".";
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