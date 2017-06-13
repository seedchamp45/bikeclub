<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload big pic 1:
    <input type="file" name="fileToUpload1" id="fileToUpload1">
    	<br>

    Select image to upload big pic 2:
    <input type="file" name="fileToUpload2" id="fileToUpload2">
    	<br>

    Select image to upload big pic 3:
    <input type="file" name="fileToUpload3" id="fileToUpload3">
    	<br>

    Select image to upload big pic 4:
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
    <input type="text" name="spec" id="spec" placeholder="spec">
    	<br>

    <select  name="category" id="category">
      	<option value="Mountain_Bike">Mountain Bike</option>
        <option value="Road_Bike">Road Bike</option>
        <option value="Lifestyle_Bike">Lifestyle Bike</option>
		<option value="Touring_Bike">Touring Bike</option>
        <option value="Folding_Bike">Folding Bike</option>
        <option value="accessories">Accessories</option>
    </select>
    	<br>

    <input type="text" name="color" id="color" placeholder="color">
    	<br>

    <input type="text" name="frame_sizes" id="frame_sizes" placeholder="frame sizes">
    	<br>


    <input type="text" name="frame" id="frame" placeholder="frame">
    	<br>

    <input type="text" name="fork" id="fork" placeholder="fork">
    	<br>

    <input type="text" name="derailleur_front" id="derailleur_front" placeholder="derailleur front">
    	<br>

    <input type="text" name="derailleur_rear" id="derailleur_rear" placeholder="derailleur rear">
    	<br>

    <input type="text" name="shifters" id="shifters" placeholder="shifters">
    	<br>

    <input type="text" name="break_lever" id="break_lever" placeholder="break lever">
    	<br>

    <input type="text" name="brakes" id="brakes" placeholder="brakes">
    	<br>

    <input type="text" name="gender" id="gender" placeholder="gender">
    	<br>

    <input type="text" name="body_height" id="body_height" placeholder="body height">
    	<br>

    <input type="text" name="body_weight" id="body_weight" placeholder="body weight">
    	<br>

    <input type="text" name="min_torso_length" id="min_torso_length" placeholder="min torso length">
    	<br>

    <input type="text" name="max_torso_length" id="max_torso_length" placeholder="max torso length">
    	<br>

    <input type="text" name="min_arm_length" id="min_arm_length" placeholder="min arm length">
    	<br>

    <input type="text" name="max_arm_length" id="max_arm_length" placeholder="max arm length">
    	<br>

    <input type="text" name="min_shoulder_length" id="min_shoulder_length" placeholder="min shoulder length">
    	<br>

    <input type="text" name="max_shoulder_length" id="max_shoulder_length" placeholder="max shoulder length">
    	<br>

    <input type="text" name="price" id="price" placeholder="price (บาท)">
        <br>

    	<br>

    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>