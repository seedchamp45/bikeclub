<?php
include_once("db_config.php");




  $db_check = $db->query("SELECT * FROM bike ORDER BY RAND() LIMIT 0,3;");
  



  while($rowdata = mysqli_fetch_assoc($db_check)){ //fetch values
    

    $pic = $rowdata['pic_bike_1'];
    $brand = $rowdata['brand'];
    $spec = $rowdata['spec'];
    $id = $rowdata['id'];

    echo '<div class="grid-item hidden-xs hidden-sm" style = "height: 15em;"  value = ' .$id .'>

            <p>'. $brand .'<br>'. $spec .'</p>
                <a href="result.php?id='.$id.'" rel="external">                                                
                <img src="upload/'. $pic .'" alt="Image" class="img-fluid tm-img" >                                              
                </a>
          </div>
          <div class="grid-item visible-xs visible-sm" style = "width: 30.33%; height: 10em;"  value = ' .$id .'>

            <p style="font-size:0.5em;">'. $brand .'<br>'. $spec .'</p>
                <a href="result.php?id='.$id.'" rel="external">                                                
                <img src="upload/'. $pic .'" alt="Image" class="img-fluid tm-img" >                                              
                </a>
          </div>';
  }



?>
