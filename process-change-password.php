<?php
// This script is a query that UPDATES the password in the users table.
// Check that form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require ('mysqli_connect.php'); // Connect to the db.
    $errors = array(); // Initialise an error array.
    // Check for an email address:
    $email = trim($_POST['email']);
    if (empty($email)) {
        $errors[] = 'You forgot to enter your email address.';
    }
    // Check for a password and match against the confirmed password:
    $password = trim(($_POST['password']));
    if (empty($password)) {
        $errors[] = 'You forgot to enter your old password.';
    }
    // Prepare and check new password
    $new_password = trim($_POST['password1']);
    $verify_password = trim($_POST['password2']);
    if (!empty($new_password)) {
        if (($new_password != $verify_password) || ($password == $new_password)) {
            $errors[] = 'Your new password did not match the confirmed password and/or ';
            $errors[] = 'Your old password is the same as your new password.';
        }
    } else {
        $errors[] = 'You did not enter a new password.';
    } if (empty($errors)) {
        // If everything's OK.
        try {
            // Check that the user has entered the right email address/password combination:
            $query = "SELECT userid, password FROM users WHERE ( email=?)";
            $q = mysqli_stmt_init($dbcon);
            mysqli_stmt_prepare($q, $query);
            // use prepared statement to ensure that only text is inserted
            // bind fields to SQL Statement
            mysqli_stmt_bind_param($q, 's', $email);
            //execute query
            mysqli_stmt_execute($q);
            $result = mysqli_stmt_get_result($q);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ((mysqli_num_rows($result) == 1) && (password_verify($password, $row['password']))) {
                // Found one record
                // Change the password in the database...
                // Hash password current 60 characters but can increase
                $hashed_passcode = password_hash($new_password, PASSWORD_DEFAULT);
                // Make the query:
                $query = "UPDATE users SET password=? WHERE email=?";
                $q = mysqli_stmt_init($dbcon);
                mysqli_stmt_prepare($q,$query);
                // use prepared statement to ensure that only text is inserted
                // bind fields to SQL Statement
                mysqli_stmt_bind_param($q, 'ss', $hashed_passcode, $email);
                // execute query
                mysqli_stmt_execute($q);
                if (mysqli_stmt_affected_rows($q) == 1) {
                    // one row updated
                    // Thank you
                    header("location: password-thanks.php");
                    exit();
                } else {
                    // If it did not run OK.
                    // Public message:
                    $errortostring = "System Error! <br /> You could not change password due ";
                    $errortostring .= "to a system error. We apologise for any inconvinience.</p>";
                    echo "<p class='text-center col-sm-2' style='color:red'>$errortostring</p>";
                    // Debugging message below do not use in production
                    // echo '<p> . mysqli_error($dbcon) . '<br><br>Query: ' . $query . '</p>;
                    // include footer then close program to stop execution
                    echo '<footer class="jumbotron text-center col-sm-12" style="padding-bottom:1px; padding-top:8px;"> include("footer.php"); <f/footer>';
                    exit();
                }
            } else {
                // Invalid email address/password combination.
                $errortostring = 'Error! <br /> ';
                $errortostring .= 'The email address and/or password do not match those on file.';
                $errortostring .= ' Please try again.';
                echo "<p class='text-center col-sm-2' style='color:red'>$errortostring</p>";
            }
        }
        catch (Exception $e) // We finally handle any problems here
        {
            // print "An Exception occured. Message: " .$e->getMessage();
            print "The system is busy please try later";
        }
        catch (Error $e) {
            // print "An Error occurred. Message: " . $e->getMessage();
            print "The system is busy please try again later.";
        }
    } else {
        // Report the errors.
        // header ("location: register-page.php);
        $errortostring = "Error! The following error(s) occured:<br>";
        foreach ($errors as $msg) {
            // Print each error.
            $errortostring .= " - $msg<br>\n";
        }
        $errortostring .= "Please try again.<br>";
        echo "<p class=' text-center col-sm-2' style='color:red'>$errortostring</p>";
    } // End of if (empty($errors)) IF.
} // End of the main Submit conditional.
?>