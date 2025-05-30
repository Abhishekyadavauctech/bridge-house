<?php
if (isset($_POST['submit'])) {
    include '../db_con.php';

    $type = $_POST['type'];
    $title = $_POST['title'];
    $details = $_POST['details'];

    $target_dir = "banner_uploads/";

   
    $original_name = $_FILES["image"]["name"];
    $unique_name = uniqid() . '_' . $original_name;
    $target_file = $target_dir . $unique_name;

   
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
     
        $sql = "INSERT INTO add_banner (type, title, details, image_path) 
                VALUES ('$type', '$title', '$details', '$target_file')";

        if (mysqli_query($con, $sql)) {
            header("Location: banner_list.php");
            exit;
        } else {
            echo "Database Error: " . mysqli_error($con);
        }
    } else {
        echo "Image upload failed.";
    }

    mysqli_close($con);
}
?>



