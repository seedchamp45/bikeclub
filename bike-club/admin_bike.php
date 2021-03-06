<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>

<form action="uploads" method="post" enctype="multipart/form-data" style="margin-left: 2em;">
    <br>
    Select image to upload big pic 1 (ภาพขนาด 1680 x 900 px):
    <input type="file" name="fileToUpload1" id="fileToUpload1">
    	<br>

    Select image to upload big pic 2 (ภาพขนาด 1680 x 900 px):
    <input type="file" name="fileToUpload2" id="fileToUpload2">
    	<br>

    Select image to upload big pic 3 (ภาพขนาด 1680 x 900 px):
    <input type="file" name="fileToUpload3" id="fileToUpload3">
    	<br>

    Select image to upload big pic 4 (ภาพขนาด 1680 x 900 px):
    <input type="file" name="fileToUpload4" id="fileToUpload4">
    	<br>

    <div class="dropdown" style="margin-top: 15px;">
              <select  name="brand" id="brand">
                <option value="1">Brand</option>
                  <?php 
                    include_once("db_config.php");
                      $db_check = $db->query("SELECT * FROM brand");
                      while($rowdata = mysqli_fetch_assoc($db_check)){ 
                      $description = $rowdata['description'];
                      echo'<option value="'.$description.'">'.$description.'</option>';}
                  ?>
              </select>
            </div>

    	<br>
    <input type="text" name="spec" id="spec" placeholder="spec"> ระบุ spec ของ จักรยาน ตัวอย่าง: BIG NINE TFS500
    	<br>

    <select  name="category" id="category"> ระบุประเภทของจักรยาน
      	<option value="Mountain_Bike">Mountain Bike</option>
        <option value="Road_Bike">Road Bike</option>
        <option value="Lifestyle_Bike">Lifestyle Bike</option>
		<option value="Touring_Bike">Touring Bike</option>
        <option value="Folding_Bike">Folding Bike</option>
        <option value="accessories">Accessories</option>
    </select>
    	<br>

    <input type="text" name="color" id="color" placeholder="color"> ระบุสีของจักรยาน ตัวอย่าง: 15"17"19"21"
    	<br>

    <input type="text" name="frame_sizes" id="frame_sizes" placeholder="frame sizes"> ระบุขนาดของ frame ตัวอย่าง: Big Nine TFS-D
    	<br>


    <input type="text" name="frame" id="frame" placeholder="frame">
    	<br>

    <input type="text" name="fork" id="fork" placeholder="fork">
    	<br>

    <input type="text" name="derailleur_front" id="derailleur_front" placeholder="derailleur front">
    ระบุชนิดของ derailleur front ตัวอย่าง: Shimano Deore H35 triple
    	<br>

    <input type="text" name="derailleur_rear" id="derailleur_rear" placeholder="derailleur rear">
    ระบุชนิดของ derailleur rear ตัวอย่าง: Shimano Deore XT Shadow
    	<br>

    <input type="text" name="shifters" id="shifters" placeholder="shifters">
     ระบุชนิดของ shifters ตัวอย่าง: Shimano Deore
    	<br>

    <input type="text" name="break_lever" id="break_lever" placeholder="break lever">
    ระบุชนิดของ break lever ตัวอย่าง: attached
    	<br>

    <input type="text" name="brakes" id="brakes" placeholder="brakes">
    ระบุชนิดของ break lever ตัวอย่าง: Shimano M445 180mm Cen/ Shimano M445 160mm Cen
    	<br>

    <input type="text" name="gender" id="gender" placeholder="gender">
    ระบุเพศที่เหมาะกับ spec จักรยาน ตัวอย่าง: male
    	<br>

    <input type="text" name="body_height" id="body_height" placeholder="body height">
    ระบุส่วนสูงของผู้ขับขี่จักรยานหน่วย cm ตัวอย่าง: 180
    	<br>

    <input type="text" name="body_weight" id="body_weight" placeholder="body weight">
    ระบุน้ำหนักของผู้ขับขี่จักรยานหน่วย kg ตัวอย่าง: 80
    	<br>

    <input type="text" name="min_torso_length" id="min_torso_length" placeholder="min torso length">
    ระบุ min torso length ของผู้ขับขี่จักรยานหน่วย cm ตัวอย่าง: 80
    	<br>

    <input type="text" name="max_torso_length" id="max_torso_length" placeholder="max torso length">
    ระบุ max torso length ของผู้ขับขี่จักรยานหน่วย cm ตัวอย่าง: 180
    	<br>

    <input type="text" name="min_arm_length" id="min_arm_length" placeholder="min arm length">
    ระบุ min arm length ของผู้ขับขี่จักรยานหน่วย cm ตัวอย่าง: 40
    	<br>

    <input type="text" name="max_arm_length" id="max_arm_length" placeholder="max arm length">
    ระบุ max arm length ของผู้ขับขี่จักรยานหน่วย cm ตัวอย่าง: 80
    	<br>

    <input type="text" name="min_shoulder_length" id="min_shoulder_length" placeholder="min shoulder length">
    ระบุ min shoulder length ของผู้ขับขี่จักรยานหน่วย cm ตัวอย่าง: 80
    	<br>

    <input type="text" name="max_shoulder_length" id="max_shoulder_length" placeholder="max shoulder length">
    ระบุ max shoulder length ของผู้ขับขี่จักรยานหน่วย cm ตัวอย่าง: 80
    	<br>

    <input type="text" name="price" id="price" placeholder="price (บาท)">
    ระบุ ราคาของจักรยาน ตัวอย่าง: 18000
        <br>

    	<br>

    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>