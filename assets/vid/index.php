<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
        }
        input {
            font-size: 2rem;
        }
    </style>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data"> 
        <input type="file" name="nama_video">
        <input type="submit" name="kirim" value="Upload">
    </form>
</body>
</html>

<?php
    include('upload.php');
    if (isset($_FILES['nama_video'])) {
        $error = arraY();
        $file_name = $_FILES['nama_video']['name'];
        $file_tmp = $_FILES['nama_video']['tmp_name'];
        $path = $_SERVER['HTTP_REFERER']."uploads/".$file_name;

        if(empty($error) == true){
            $fileType = strtolower(pathinfo($path,PATHINFO_EXTENSION));
            $extensions = array("mp4","avi","3gp","mov","mpeg");

            if( in_array($fileType,$extensions)){
                if(move_uploaded_file($file_tmp, "uploads/" . $file_name)){
                    $sql = "INSERT INTO videos(video_url) VALUES('$path')";
                    $query = $koneksi->query($sql);
                }
            }
        }


    }
?>
