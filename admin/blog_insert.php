<?php
// Include your database connection file
include('../db_con.php');

if (isset($_POST['submit']))
{
    // Start transaction
    $con->begin_transaction();

    try
    {
        // Retrieve form data
        $blog_url_first = $_POST['blog_url'];
        $blog_url = str_replace(' ', '-', $blog_url_first);
        $blog_heading = $_POST['blog_heading'];

        $blog_desc_first = $_POST['blog_desc_first'];
        $blog_desc_second = $_POST['blog_desc_second'];
        $blog_point_one = $_POST['blog_point_one'];
        $blog_point_two = $_POST['blog_point_two'];
        $blog_desc_two = $_POST['blog_desc_two'];


        $sql = "INSERT INTO blogs (blog_url, blog_heading, blog_desc_first, blog_desc_second, blog_point_one, blog_point_two, blog_desc_two)
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = $con->prepare($sql);
        $stmt->bind_param("sssssss", $blog_url, $blog_heading, $blog_desc_first, $blog_desc_second, $blog_point_one, $blog_point_two, $blog_desc_two);

        if (!$stmt->execute())
        {
            throw new Exception("Error inserting product: " . $stmt->error);
        }


        $product_id = $stmt->insert_id;

        $target_dir = "../blog/blog_uploads/";

       
        foreach ($_FILES['images']['name'] as $key => $image_name)
        {
            $image_tmp = $_FILES['images']['tmp_name'][$key];
            $image_ext = pathinfo($image_name, PATHINFO_EXTENSION);
            $unique_image_name = uniqid('img_', true) . '.' . $image_ext;
            $target_file = $target_dir . $unique_image_name;

            if (move_uploaded_file($image_tmp, $target_file))
            {
                $sql = "INSERT INTO blogs_images (blog_id, image) VALUES (?, ?)";
                $stmt = $con->prepare($sql);
                $stmt->bind_param("is", $product_id, $unique_image_name);

                if (!$stmt->execute())
                {
                    throw new Exception("Error inserting image: " . $stmt->error);
                }
            } else
            {
                throw new Exception("Error uploading image: $image_name");
            }
        }

        if (isset($_FILES['logos']))
        {
            foreach ($_FILES['logos']['name'] as $key => $logo_name)
            {
                if ($_FILES['logos']['error'][$key] == 0)
                {
                    $logo_tmp = $_FILES['logos']['tmp_name'][$key];
                    $logo_ext = pathinfo($logo_name, PATHINFO_EXTENSION);
                    $unique_logo_name = uniqid('logo_', true) . '.' . $logo_ext;
                    $logo_target_file = $target_dir . $unique_logo_name;

                    if (move_uploaded_file($logo_tmp, $logo_target_file))
                    {
                        $sql = "INSERT INTO blogs_images (blog_id, logos) VALUES (?, ?)";
                        $stmt = $con->prepare($sql);
                        $stmt->bind_param("is", $product_id, $unique_logo_name);

                        if (!$stmt->execute())
                        {
                            throw new Exception("Error inserting logo: " . $stmt->error);
                        }
                    } else
                    {
                        throw new Exception("Error uploading logo: $logo_name");
                    }
                } else
                {
                    throw new Exception("Error uploading logo: " . $_FILES['logos']['error'][$key]);
                }
            }
        }

        // Commit transaction
        $con->commit();
        header('location:blog_list.php');
    } catch (Exception $e)
    {

        $con->rollback();
        echo "Failed to insert product and images: " . $e->getMessage();
    }
    $stmt->close();
    $con->close();
}
?>