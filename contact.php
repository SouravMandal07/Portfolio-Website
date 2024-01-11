<?php
    require "db.php";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        // Process the form data here...
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
                            
        $sql = "INSERT INTO `contacts` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
        $result = mysqli_query($conn, $sql);
        // Display a success message using JavaScript alert
        echo '<script>alert("Contact message sent successfully!");</script>';
        echo '<script>window.location.href = "/";</script>';
    }
    else{
        echo "Error!";
    }
                           
?>

