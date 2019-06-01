<?php
    session_start();
    $username = "";
    $email = ""; 
    $errors = array();

    // connect to database in xampp
    $db = mysqli_connect('localhost', 'root', '', 'major');

    // if Register button is clicked
     if(isset($_POST['register'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];

        //checking if all the filed are fill
        if(empty($username)){
            array_push($errors, "username is required");
        }
        if(empty($email)){
            array_push($errors, "email is required");
        }
        if(empty($password_1)){
            array_push($errors, "password is required");
        }

        if($password_1 != $password_2){
            array_push($errors, "The two passwords must match");
        }
        // if no errors i.e all fields are filled
        if(count($errors) == 0){
            $password = md5($password_1); // encrpting password
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

            mysqli_query($db, $sql);
            $_SESSION['username']= $username;
            $_SESSION['success'] = "";
            header('location: index.php');
        }
     }
     

     // login user from login page
     if (isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //checking if all the filed are fill
        if(empty($username)){
            array_push($errors, "username is required");
        }
        if(empty($password)){
            array_push($errors, "password is required");
        }
        if(count($errors)== 0){
            $password = md5($password);//encrypt password
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($db, $query);

            if(mysqli_num_rows($result)== 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "";
                header('location: index.php');// redirect to home page
            }else{
                array_push($errors, "username or password is wrong");
                header('location: login.php');
            }
        }
     }



     //Log out user from index page
     if(isset($_GET['logout'])){
         session_destroy();
         unset($_SESSION['username']);
         header('location: login.php');
     }
?>