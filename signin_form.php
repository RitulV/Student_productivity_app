<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Your email ' . $email.' and password '. $password.' have been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      // Submit these to a database
    }
?>