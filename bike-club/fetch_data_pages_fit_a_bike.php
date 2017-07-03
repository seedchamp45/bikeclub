<?php
include_once("db_config.php");
  // echo "<p>eieieieieieieieiei</p>";
 // echo '<p>pppppppppppp</p>';
  $name = $_POST["name"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $height = $_POST['height'];
  $bike_type = $_POST['bike_type'];
  $gender = $_POST['gender'];

  if($_POST['gender'] == 'on')
  {
    $gender = 'Male';
  }
  else
  {
    $gender = 'Female';
  }

  //echo '<p>1 '. $name .'2 '. $email .'3 ' . $tel .'4 '. $height .'5 '. $bike_type .'6 ' .$gender. '</p>';

  $result = $db->query("SELECT * FROM user");
  $row_cnt = $result->num_rows;



  //echo '<p> 7 ' . $row_cnt .'</p>';
  $sql_insert = "INSERT INTO user (id, name, email, height, bike_type, gender)
        VALUES ('$row_cnt', '$name', '$email' ,'$height', '$bike_type', '$gender');";

  if ($db->query($sql_insert) === TRUE) {
      //echo "<p>New record created successfully</p>";
  } else {
      //echo "Error: " . $sql . "<br>" . $db->error;
  }




  $db_check = $db->query("SELECT * FROM bike ORDER BY RAND() LIMIT 1;");
  
  while($rowdata = mysqli_fetch_assoc($db_check)){ //fetch values
    

    $body_height = $rowdata['body_height'];
    $frame_sizes = $rowdata['frame_sizes'];

    //echo '1.1 ' . $body_height . ' 2.1 ' . $frame_sizes . ' 3.1 ' . $name  .' 4.2 ' . $bike_type . ' 5.4 ' . $gender . ' 5,3 ';



    echo '<section style="height: 90vh;">
  <div style="width: 55%; float:left; background-color: #fff; height: 85vh;">
    <section style="height: 70%;">
      <img src="images/fit-a-bike/fit-a-bike-city-bike.png" style="height: 80%; margin:10% 20% 10% 30%;">
    </section>
    <section style="height: 30%;">
      <div style="width: 55%; margin: 5% 25%; background: url("images/fit-a-bike/fit-a-bike-block.png") no-repeat;
        background-size: 95% 95%;
        background-position: center center;
        background-color: #fff;
        height:45%;
        ">
        <table style="width:70%; margin-left: 15%;">
        <tr>
          <td style="margin-left: 40px; padding-top: 20px; font-size: 0.8em; width: 60%">BIKER NAME : '. $name .'</td>
          <td style="margin-left: 40px; padding-top: 20px; font-size: 0.8em; width: 40%">BIKE TYPE</td> 
       
        </tr>
        <tr>
          <td style="margin-left: 40px; font-size: 0.8em; width: 60%"> GENDER:'. $gender .'</td>
          <td  style="margin-left: 40px; font-size: 0.8em; width: 40%; background: black; color: white;">'. $bike_type .'</td> 
  
        </tr>
        <tr>
          <td  style="margin-left: 40px; font-size: 0.8em; ">HEIGHT:'. $body_height .'</td>
  
        </tr>
        </table>
      </div>
    </section>

  </div>
  <div style="width: 45%; float:right;  background: url("images/fit-a-bike/fit-a-bike-background.png") no-repeat;
  background-size: 95% 95%;
  background-position: center center;
  height: 85vh;
  background-color: #fff">

    <section>
    <img src="images/fit-a-bike/fit-a-bike-logo.png" style="width: 80%; margin-top: 5em; margin-left: 10%;">
    </section>

    <section style="padding-left: 14%; padding-top: 3em;">
      <p style="font-size: 3em;">'. $frame_sizes .'</p>
    </section>

    <section style="padding-left: 30%; padding-top: 3em;">
    <button style="background: rgba(0,0,0,0); width: 50%;"><img src="images/fit-a-bike/fit-a-bike-share.png"></button>
    </section>

    <section style="padding-left: 20%; padding-top: 3em;">
      <p style="font-size: 0.5em; margin: 0;">การ Fit a bike นี้เ็นเพียงการวัดเบื้องต้นหากต้องการวัดแบบเต็มๆเชิฐที่ Bike Club สาขาชัยพฤกษ์</p>
      <p style="font-size: 0.5em; margin: 0;" lang = "th">หากต้องการข้อมูลเพิ่มเติมติดต่อ 02-029-7254</p>
    </section>

    <section style="padding-left: 35%; padding-top: 1em;">
    <img src="images/fit-a-bike-logo.png" style="width: 40%;">
    </section>

   
  </div>
</section>';


  }



?>
