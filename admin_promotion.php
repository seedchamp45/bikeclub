
<!DOCTYPE html>
<html>
<body>

<form action="upload_promotion.php" method="post" enctype="multipart/form-data">
    Select image to upload big pic:
    <input type="file" name="fileToUpload1" id="fileToUpload1">
    	<br>
        <br>



    <input type="text" name="description" id="description" placeholder="description" onkeypress="this.style.width = ((this.value.length + 1) * 5) + 'px';">
    	<br>
        <br>


        


    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>