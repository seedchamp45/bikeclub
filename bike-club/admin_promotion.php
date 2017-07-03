
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

<form action="upload_promotions" method="post" enctype="multipart/form-data" style="margin-top: 2em; margin-left: 2em;">
    Select image to upload big pic (ภาพ promotion):
    <input type="file" name="fileToUpload1" id="fileToUpload1">
    	<br>
        <br>

    <input type="text" name="description" id="description" placeholder="description" onkeypress="this.style.width = ((this.value.length + 5) * 5) + 'px';">
    เนื้อหา promotion
    	<br>
        <br>

    <input type="text" name="promotion_time" id="promotion_time" placeholder="promotion duration" onkeypress="this.style.width = ((this.value.length + 5) * 5) + 'px';">
    ระยะเวลา promotion
    	<br>
        <br>


        


    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>