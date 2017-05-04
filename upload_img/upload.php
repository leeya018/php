<?php
$target_dir = "uploads/"; // the name is my choice
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);//basename return the  file name 
//$_FILES['fileToUpload'] have those key  ;name ,type ,tmp_name ,error ,size 
foreach ($_FILES["fileToUpload"] as $key => $value) {
	echo "key : " . $key;
	echo "     value : " . $value . "<br>"; 
}
echo $target_file . "<br>";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);//pathinfo return the file extension
echo "PATHINFO_EXTENSION" . $imageFileType . "<br>";
// Check if image file is a actual image or fake image
echo "submit : " . $_POST["submit"] . "<br>";
if(isset($_POST["submit"])) {//$_POST["submit"]) : if the submit button has clicked so $_POST["submit"] return  "Upload Image" according to the value in submit button
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	//$_FILES["fileToUpload"]["tmp_name"] is the file path in server with its name:C:\xampp\tmp\php50E0.tmp
		// $check is an array that contains the size vals of the img
	foreach ($check as $key => $value) {
		echo "key : " . $key;
		echo "     value : " . $value . "<br>";
	}

	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		echo "File is not an image.";
		$uploadOk = 0;
	}
}
?>