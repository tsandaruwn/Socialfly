<?php
include_once 'confi.php';
?>
 
<?php
 function uploadFile($fileInputName, $uploadDirectory)
    {
        $uploadedFilePath = '';

        if ($_FILES[$fileInputName]['error'] === UPLOAD_ERR_OK) {
            $tempName = $_FILES[$fileInputName]['tmp_name'];
            $originalFileName = $_FILES[$fileInputName]['name'];
            $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
            $encryptedFileName = uniqid() . '.' . $fileExtension;

            $uploadedFilePath = $uploadDirectory . $encryptedFileName;

            if (move_uploaded_file($tempName, $uploadedFilePath)) {
                return $encryptedFileName;
            } else {
                return '';
            }
        } else {
            return '';
        }
    }
    
    $image_name = uploadFile('image', '../images/');

    
$title = $_POST['title'];
$description = $_POST['description'];
 
$sql = "INSERT INTO ads(title, description, image) VALUES('$title','$description', '$image_name')";
 
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Records added successfully!!')</script>";
    
        header("Location:adset.html");
        exit();
 
}
else{
    echo "<script>alert('Error: Records not added!')</script>";
}

mysqli_close($conn);
    
 
?>