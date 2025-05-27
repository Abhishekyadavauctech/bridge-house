<?php
if (!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email'])) {

    include('db_con.php');

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'] ?? null;
    $added_date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO contact (name, phone, email, message, added_date) 
            VALUES ('$name', '$phone', '$email', '$message', '$added_date')";

    $con->query($sql);
    echo $con->affected_rows > 0 ? "success" : "error";

    $con->close();
}
?>
