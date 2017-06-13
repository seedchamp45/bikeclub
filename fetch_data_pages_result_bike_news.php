<?php
include_once("db_config.php");




  $db_check = $db->query("SELECT * FROM bike_new ORDER BY RAND() LIMIT 3;");
  



  while($rowdata = mysqli_fetch_assoc($db_check)){ //fetch values
    
    $id = $rowdata['id'];
  $pic = $rowdata['image_name'];
  $description = $rowdata['description'];
  $promotion_time = $rowdata['dates'];

    echo '<div class="grid-item" style = "height: 15em;"  value = ' .$id .'>

         
                <a href="news.php?id='.$id.'" rel="external">                                                
                <img src="upload_new/'. $pic .'" alt="Image" class="img-fluid tm-img" >                                              
                </a>

                   <p>'. $promotion_time .'<br>'. $description .'</p>
          </div>';
  }



?>
