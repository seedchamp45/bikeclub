<?php
include_once("db_config.php");




  $db_check = $db->query("SELECT * FROM bike where category = 'Mountain_Bike'");
  



  while($rowdata = mysqli_fetch_assoc($db_check)){ //fetch values
    

    $pic = $rowdata['pic_bike_1'];
    $brand = $rowdata['brand'];
    $spec = $rowdata['spec'];
    $id = $rowdata['id'];

    echo '<div class="grid-item hidden-xs hidden-sm" style = "height: 21em; padding-top:0em;" value = ' .$id .'>

            <p style="color: black;">'. $brand .'<br>'. $spec .'</p>
                <a href="result?id='.$id.'" rel="external">                                                
                <img src="upload/'. $pic .'" alt="Image" class="img-fluid tm-img" style="height: 15em;">                                              
                </a>
          </div>
          <div class="grid-item visible-xs visible-sm" style = "height: 9em; width: 48%; margin-top: 80px;" value = ' .$id .'>

            <p style="color: black; font-size: 0.5em; line-height:10px;">'. $brand .'<br>'. $spec .'</p>
                <a href="result?id='.$id.'" rel="external">                                                
                <img src="upload/'. $pic .'" alt="Image" class="img-fluid tm-img" style="height: 5em;">                                              
                </a>
          </div>';
  }



?>
