<?php
include_once("db_config.php");




  $db_check = $db->query("SELECT * FROM bike where category = 'Folding_Bike'");
  



  while($rowdata = mysqli_fetch_assoc($db_check)){ //fetch values
    

    $pic = $rowdata['pic_bike_1'];
    $brand = $rowdata['brand'];
    $spec = $rowdata['spec'];
    $id = $rowdata['id'];

    echo '<div class="grid-item" style = "height: 15em;">
            <p>'. $brand .'<br>'. $spec .'</p>
                <a href="result.php?id='.$id.'" rel="external">                                                    
                <img src="upload/'. $pic .'" alt="Image" class="img-fluid tm-img" value = ' .$id .'>                                              
                </a>
          </div>';
  }



?>