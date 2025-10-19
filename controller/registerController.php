<?php

    addMember();

    function addMember() {    
        include 'connect.php';

        $first_name = $_GET['firstname'];
        $last_name = $_GET['lastname'];
        $birthdate = $_GET['birthday'];
        $sex = $_GET['sex'];
        $email = $_GET['email'];
        $password = $_GET['password'];

        $hash_base = base64_encode($password);
        $hash_password = md5($hash_base);
        // $hash_password = password_hash($hash_password, PASSWORD_BCRYPT);
        
        $sql = "INSERT INTO member (first_name, last_name, birthdate, sex, email, password, hash_password, status)
                VALUES ('$first_name', '$last_name', '$birthdate', '$sex', '$email', '$password', '$hash_password', '1')";

        // print_r($conn->query($sql)); die();
        // print_r($sql); die();
        
        if ($conn->query($sql) === TRUE) {
            echo "<p>Update member successfully</p>";
            echo "<a href='index.php'>Back</a>";
            
            $conn->close();
            header('Location: ../login.php');
            exit;
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;

            $conn->close();
            header('Location: ../register.php?status=false');
            exit;
        }
    }
    
    
    
?>