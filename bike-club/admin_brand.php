
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

<form action="upload_brands" method="post" enctype="multipart/form-data" style="margin-top: 2em; margin-left: 2em;">
    Select image to upload big pic (upload ภาพโลโก้):
    <input type="file" name="fileToUpload1" id="fileToUpload1">
    	<br>
        <br>



    <input type="text" name="description" id="description" placeholder="brand" onkeypress="this.style.width = ((this.value.length + 5) * 5) + 'px';">
    ระบุชื่อแบรนด์
    	<br>
        <br>


        


    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>