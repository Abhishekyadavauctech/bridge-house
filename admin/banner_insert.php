<?php
if (isset($_POST['submit'])) {
    include '../db_con.php';

    $type = $_POST['type'];
    $title = $_POST['title'];
    $details = $_POST['details'];

    $target_dir = "banner_uploads/";
    
  
    $image = $_FILES["image"]["name"];
    $unique_id = uniqid();
    $new_image_name = $unique_id . '_' . $image;
    $target_file = $target_dir . $new_image_name;

    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $sql = "INSERT INTO add_banner (type, title, details, image_path) 
            VALUES ('$type', '$title', '$details', '$target_file')";

    if (mysqli_query($con, $sql)) {
        header("Location: banner_list.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>


