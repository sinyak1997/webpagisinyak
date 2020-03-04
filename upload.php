<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action="proses/proses_upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="photo">
        <input type="submit" name="upload">
    </form>
</body>
</html>