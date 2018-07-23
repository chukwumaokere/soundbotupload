<?php
$target_dir = "sounds/";
$target_soundbot_dir = "/home/cokere/DiscordSoundboardbeta2/sounds/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$target_file_sound = $target_soundbot_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ". <br>";
        $uploadOk = 1;
    } else {
        //echo "File is not an image. <br>";
        $uploadOk = 1;
    }
}
// Check if file already exists
if (file_exists($target_file) || file_exists($target_file_sound)) {
    echo "Sorry, file already exists. Please try a different command name <br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large. <br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "mp3") {
    echo "Sorry, only MP3 files are allowed. <br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	$commandname = str_replace("." . $imageFileType, '', $_FILES["fileToUpload"]["name"]);
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. <br> Your command is !" . $commandname .".";
    } else {
        echo "Sorry, there was an error uploading your file. <br>";
    }
}
