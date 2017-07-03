<?php
include_once("db_config.php");




  $db_check = $db->query("SELECT * FROM promotion");
  



  while($rowdata = mysqli_fetch_assoc($db_check)){ //fetch values
    

    $image_name = $rowdata['image_name'];
    $description = $rowdata['description'];
   



    echo '<div class="item col-md-3 col-sm-3 wow fadeInUp" data-wow-delay="0.9s">
                         <a href= upload_promotion/'. $image_name .' class="image-popup">
                              <img src="images/'. $image_name .' class="img-responsive" alt='. $description .'>
                         </a>
                    </div>';
  }



?>
