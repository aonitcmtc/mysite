<?php

    switch ($_GET['status']) {
        case "add":
            add();
        break;
        case "update":
            update();
        break;
        case "remove":
            remove();
        break;
        default:
            getcontent();
    }

    function getcontent() {  
        print("getcontent");
    }

    function add() {    
        include 'connect.php';

        $title = $_POST['title'];
        $text = $_POST['text'];
        $datetime_now = date('Y-m-d H:i:s');

        $sql = "INSERT INTO admin_texteditor (title, detail, update_at)
                VALUES ('$title', '$text', '$datetime_now')";

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

    function update() {  
        print("update");
    }

    function remove() {  
        print("remove");
    }
    
    
    
?>