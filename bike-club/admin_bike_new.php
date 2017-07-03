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

<form action="upload_bike_news" method="post" enctype="multipart/form-data" style="margin-left: 2em;">
    Select image to upload big pic (ภาพข่าว):
    <input type="file" name="fileToUpload1" id="fileToUpload1">
    	<br>
        <br>

   

    <input type="text" name="heading" id="heading" placeholder="heading" onkeypress="this.style.width = ((this.value.length + 5) * 5) + 'px';">
    หัวข้อข่าว
    	<br>
        <br>


    <input type="text" name="description" id="description" placeholder="description" onkeypress="this.style.width = ((this.value.length + 5) * 5) + 'px';">
    เนื้อหาข่าว
    	<br>
        <br>

    <input type="text" name="date" id="date" placeholder="วัน-เดือน-ปี dd/mm/yy">
    วันที่
    	<br>
        <br>


    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>