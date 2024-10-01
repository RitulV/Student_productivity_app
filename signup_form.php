<?php

    $conn = new mysqli('localhost', 'root', '', 'webtech', 3306);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle registration form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Fname = $_POST["fname"];
        $Sname = $_POST["lname"];
        $Dob = $_POST["dob"];
        $Email = $_POST["email"];
        $Passwd = $_POST["password"];

        // Insert user data into the database
        $sql = "INSERT INTO userdetails (Fname, Sname, Dob, Email, Passwd) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $Fname, $Sname, $Dob, $Email, $Passwd);

        if ($stmt->execute()) {
            // Registration successful, you can redirect the user to a new page
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>congratulations!</strong> You account has been created successfully.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>';
            //header("Location: Front.html"); // Replace with the desired page
            exit();
        } else {
            echo "Error: " . $conn->error;
        }

        $stmt->close();
        // Submit these to a database
    }

    $conn->close();

?>