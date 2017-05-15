<?php
include_once("db_config.php");


  $brand = $_POST["brand"];
  $pricemin = $_POST["pricemin"];
  $pricemax = $_POST["pricemax"];

  echo $brand .".,,,,,".$pricemin. "......" .$pricemax;
  $db_check = $db->query("SELECT * FROM bike where category = 'Touring_Bike' AND price >= $pricemin AND price <= $pricemax AND brand = ". $brand);
  



  while($rowdata = mysqli_fetch_assoc($db_check))
  { 
    $pic = $rowdata['pic_bike_1'];
    $brand = $rowdata['brand'];
    $spec = $rowdata['spec'];
    $id = $rowdata['id'];

    echo '<div class="grid-item" style = "height: 15em;" value = ' .$id .'>
            <p>'. $brand .'<br>'. $spec .'</p>
                <a href="result.php?id='.$id.'" rel="external">                                                   
                <img src="upload/'. $pic .'" alt="Image" class="img-fluid tm-img" >                                              
                </a>
          </div>';
  }



?>
