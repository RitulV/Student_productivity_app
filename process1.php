<?php
//if (isset($_POST['submit'])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // If validation is successful, redirect to another HTML page

    header("Location: signupmsg.html");
    exit(); 
} else {
    echo "Form was not submitted.";
}
?>
