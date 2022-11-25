<?php
//This section processes submissions from the login form
//Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //connect to database
    try {
        require ('mysqli_connect.php');
        //validate email address
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if ((empty($email)) || (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))) {
            $errors[] = 'You forgot to enter your email address';
            $errors[] = ' or the email format is incorrect.';
        }
        //validate password
        $password = filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($password)) {
            $errors[] = 'You forgot to enter your password.';
        }
        if (empty($errors)) {
            //If everythings ok.
            //Retrieve the user_id, password, first_name, user_level for that email/password combination
            $query = "SELECT userid, password, first_name, user_level FROM users WHERE email=?";
            $q = mysqli_stmt_init($dbcon);
            mysqli_stmt_prepare($q, $query);

            //bind $id to SQL statement
            mysqli_stmt_bind_param($q, "s", $email);
            //execute query
            mysqli_stmt_execute($q);
            $result = mysqli_stmt_get_result($q);
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
            if (mysqli_num_rows($result) == 1) {
                //if one database row matches the input: Start the session,
                // fetch the record and insert the values in the array
                if (password_verify($password, $row[1])) {
                    session_start();
                    //Ensure that the user level is an integer.
                    $_SESSION['user_level'] = (int) $row[3];
                    //Use a ternary operator to set the URL
                    $url = ($_SESSION['user_level'] ===1) ? 'admin-page.php' : 'members-page.php';
                    header('Location: ' .$url);
                    //Make the browser load either the members or the admin page
                } else {
                    //No password match was made.
                    $errors[] = 'E-mail/Password entered does not match our records. ';
                    $errors[] = 'Perhaps you need to register, just click the Register ';
                    $errors[] = 'button on the header menu';
                }
            } else {
                //No email match was made
                $errors[] = 'E-mail/Password entered does not match our records. ';
                $errors[] = 'Perhaps you need to register, just click the Register ';
                $errors[] = 'button on the header menu';
            }
        }
        if (!empty($errors)) {
            $errorstring = "Error! <br /> The following error(s) occured:<br>";
            foreach ($errors as $msg) {
                //Print each error.
                $errorstring .= "$msg<br>\n";
            }
            $errorstring .= "Please try again.<br>";
            echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
        } //End of if (!empty($errors)) IF.
        mysqli_stmt_free_result($q);
        mysqli_stmt_close($q);
    }
    catch (Exception $e) {
        //We finally handle problems here
        print "an Exception occurred. Message: " . $e->getMessage();
    }
    catch (Error $e) {
        print "An Error occurred. Message: " . $e->getMessage();
    }
} //no else to allow user to enter values
?>