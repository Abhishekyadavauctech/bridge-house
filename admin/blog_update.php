<?php
include '../db_con.php';

if (isset($_POST['submit']))
{
    $id = intval($_POST['id']);
    $blog_url_first = $_POST['blog_url'];
    $blog_url = str_replace(' ', '-', $blog_url_first);
    $blog_heading = $_POST['blog_heading'];

    $blog_desc_first = $_POST['blog_desc_first'];
    $blog_desc_second = $_POST['blog_desc_second'];
    $blog_point_one = $_POST['blog_point_one'];
    $blog_point_two = $_POST['blog_point_two'];

    $blog_desc_two = $_POST['blog_desc_two'];


    $query = "UPDATE blogs SET blog_url = ?, blog_heading = ?, blog_desc_first = ?, blog_desc_second = ?, blog_point_one = ?, blog_point_two = ?, blog_desc_two = ? WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ssssssss", $blog_url, $blog_heading, $blog_desc_first, $blog_desc_second, $blog_point_one, $blog_point_two, $blog_desc_two, $id);


    $stmt->execute();
    $upload_dir = "../blog/blog_uploads/";

  
    if (!empty($_FILES['logos']['name'][0]))
    {
        // Delete old logos
        $delete_logos_query = "DELETE FROM blogs_images WHERE blog_id = '$id' AND logos IS NOT NULL";
        mysqli_query($con, $delete_logos_query);

        foreach ($_FILES['logos']['tmp_name'] as $key => $tmp_name)
        {
            $original_name = $_FILES['logos']['name'][$key];
            $ext = pathinfo($original_name, PATHINFO_EXTENSION);
            $unique_logo_name = uniqid('logo_', true) . '.' . $ext;

            if (move_uploaded_file($tmp_name, $upload_dir . $unique_logo_name))
            {
                $insert_logo_query = "INSERT INTO blogs_images (blog_id, logos) VALUES ('$id', '$unique_logo_name')";
                mysqli_query($con, $insert_logo_query);
            }
        }
    }

    
    if (!empty($_FILES['images']['name'][0]))
    {
        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name)
        {
            $original_name = $_FILES['images']['name'][$key];
            $ext = pathinfo($original_name, PATHINFO_EXTENSION);
            $unique_image_name = uniqid('img_', true) . '.' . $ext;

            if (move_uploaded_file($tmp_name, $upload_dir . $unique_image_name))
            {
                // Check if image already exists for blog
                $check_image_query = "SELECT id FROM blogs_images WHERE blog_id = '$id' AND image IS NOT NULL LIMIT 1";
                $result = mysqli_query($con, $check_image_query);

                if (mysqli_num_rows($result) > 0)
                {
                    // Update first existing image entry
                    $update_image_query = "UPDATE blogs_images SET image = '$unique_image_name' WHERE blog_id = '$id' AND image IS NOT NULL LIMIT 1";
                    mysqli_query($con, $update_image_query);
                } else
                {
                    // Insert new image
                    $insert_image_query = "INSERT INTO blogs_images (blog_id, image) VALUES ('$id', '$unique_image_name')";
                    mysqli_query($con, $insert_image_query);
                }
            }
        }
    }

    header("Location: blog_list.php");
    exit();
}
?>