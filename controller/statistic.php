<?php

    checkLogin();

    function checkLogin() {    
        include 'connect.php';

        $email = $_POST['uname'];
        $password = $_POST['pswd'];
        $hash_base = base64_encode($password);
        $hash_password = md5($hash_base);

        $sql = "SELECT first_name, last_name, email, member_group FROM member WHERE email ='$email' and hash_password = '$hash_password'";
        // print_r($sql); die();
        $result = mysqli_query($conn, $sql) or die ("Error in sql : $query".mysqli_error($query));
        $row_arr = mysqli_fetch_array($result);

        if ($row_arr !== false) {
            // echo "logging in as '{$row_arr[2]}' <br/>";
            // echo "logging in as '{$row_arr[3]}' <br/>"; 
            // die();

            $first_name = $row_arr[0];
            $last_name = $row_arr[1];
            $fetch_email = $row_arr[2];
            $group = $row_arr[3];

            // echo "F<br>";
            // echo $first_name;
            // echo "L<br>";
            // echo $last_name;
            // echo "E<br>";
            // echo $email;
            // echo "<br>";
            // die();

            $vis_ip = getVisIPAddr();
            if($email == $fetch_email) {               
                create_log_login($email,1,$vis_ip);
                createCookie($email, $group);

                session_start();
                $_SESSION["user"] = $email;
                $_SESSION["group"] = $group;

                // print_r($_SESSION); die();
                header('Location: ../index.php');
                exit;
            } else {
                create_log_login($email,0,$vis_ip);
                header('Location: ../login.php?status=false');
                exit;
            }
        } else {
            header('Location: ../login.php?status=false');
            exit;
        }
    }

    function create_log_login($email = 'email@mail.com',$status = 1, $vis_ip = 'localhost') {
        include 'connect.php';

        $date_now = date("Y/m/d H:i:s");
        $details = ip_details($vis_ip);
        $location_info = 'hostname::'.$details->hostname.'city::'.$details->city.'region::'.$details->region.'country::'.$details->country.'org::'.$details->org.'postal::'.$details->postal.'timezone::'.$details->timezone.'readme::'.$details->readme;
        // echo $data_info."<br>";

        // column :: 	user	datetime	ip	location	status	details	
        $insert = "INSERT INTO log_login (user, datetime, ip, location, status, details)
            VALUES ('$email', '$date_now', '$vis_ip', '$details->loc', '$status', '$location_info')";

        // print_r($conn->query($insert)); die();
        // print_r($insert); die();
        
        if ($conn->query($insert) === TRUE) {
            echo "<p>Update log_login successfully</p>";
            // echo "<a href='index.php'>Back</a>";

            $conn->close();
        } else {
            // echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<p>Update log_login Error</p>";
            $conn->close();
        }
    }

    function createCookie($user, $group) {
        $cookie_name = "member";
        $cookie_value = md5(rand(999,99999));
        // $cookie_value = "user:$user,group:$group";
        // setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        // setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 1D
        setcookie($cookie_name, $cookie_value, time() + (3600), "/"); // 1H
    }

    function getVisIpAddr() { 
      
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
            return $_SERVER['HTTP_CLIENT_IP']; 
        } 
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
            return $_SERVER['HTTP_X_FORWARDED_FOR']; 
        } 
        else { 
            return $_SERVER['REMOTE_ADDR']; 
        } 
    } 

    function ip_details($ip) {
        $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
        $details = json_decode($json);
        return $details;
    }
      
    
    
    
?>