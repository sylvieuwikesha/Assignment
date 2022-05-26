<?php
include 'configuration.php';
if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['Email'];
    $password = $_POST['password'];
    if (mysqli_query($con, "INSERT INTO student VALUES('','$fname','$lname','$email','$password')")){
        echo "the records inserted successfully!";
    }else {
        echo "error";
    }
}

?>