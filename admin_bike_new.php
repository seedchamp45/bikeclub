<!DOCTYPE html>
<html>
<body>

<form action="upload_bike_new.php" method="post" enctype="multipart/form-data">
    Select image to upload big pic:
    <input type="file" name="fileToUpload1" id="fileToUpload1">
    	<br>
        <br>

   

    <input type="text" name="heading" id="heading" placeholder="heading" onkeypress="this.style.width = ((this.value.length + 1) * 5) + 'px';">
    	<br>
        <br>


    <input type="text" name="description" id="description" placeholder="description" onkeypress="this.style.width = ((this.value.length + 1) * 5) + 'px';">
    	<br>
        <br>

    <input type="text" name="date" id="date" placeholder="วัน-เดือน-ปี dd/mm/yy">
    	<br>
        <br>


    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>