<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
<!-- type="file" : we are using: $_FILES[][]-->
<!-- name="fileToUpload" : we can accees to $_FILES["fileToUpload"]-->
    <input type="submit" value="Upload Image" name="submit">
    <!-- name="submit"  : we can access to  : $_POST["submit"])-->
     <!-- value="Upload Image" : the value of ; $_POST["submit"]) is:"Upload Image"  -->
</form>

</body>
</html>

