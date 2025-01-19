<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Form</title>
</head>
<body>
    <form action="filesUploading/file-upload-manager.php" method="post" enctype="multipart/form-data">
        <!--multipart/form-data ensures that form data is going to be encoded as MIME data-->
        <h2>Upload File</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Only .jpg, .jpeg, .png formats allowed to a max size of 2MB.</p>
    </form>
</body>
</html>