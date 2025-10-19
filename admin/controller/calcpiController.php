<?php


    calcPi ();

    function calcPi() {

        

        if($_SERVER["REQUEST_METHOD"] == "GET") {
            if($_GET["calcpi"] == 1) {
                // print_r($_COOKIE); die();

                $data = [];
                $master = 7;
                $slave = 22;
                // $floting = 0.0;
                for($round = 0; $round <= 1000; $round++){

                    // 3.14159265359

                    // $data[$round] = 22 / 7;
                    // ______3.142___
                    // 7 / 2 2 _
                    //     2 1
                    //       1 0
                    //         7
                    //         3 0
                    //         2 8
                    //           2 0
                    //           1 4
                    //             6 0 
                    
                    $ans = 0;
                    for($position = 1; $position <= 100; $position++){
                        // $ans = $position;
                        $master_cal = $master * $position;

                        if($master == $slave) {
                            $data["END"] = "ANS";
                            break;
                        }

                        if($master_cal < $slave) {
                            // $floting = $slave - $master_cal;
                            // $slave = $floting;

                            // $data[$round] = $position;
                            
                            // 7 * 1 = 7
                            // 7 * 2 = 14
                            // 7 * 3 = 21

                            // 7 * 3 + 7 > 22
                            if(($master * $position) + $master >= $slave) {
                                $data[$round] = $position;

                                $slave = $slave - $master_cal;
                                if($slave < $master){
                                    $slave = $slave * 10;
                                    break;
                                }
                            }

                            // if($slave < 7){
                                // $slave = $slave - $master_cal;
                                // $slave = $slave * 10;
                            //     break;
                            // }

                            // $data[$round] = $ans;
                            // $data["floting"] = $slave;

                        }

                        if($master_cal > $slave) {
                            // $slave = $slave - $master_cal;
                            // $slave = $slave + 10;
                            // $data["slave".$round] = $slave;
                            // break;
                        }
                    } 
                }
                echo json_encode($data);
            }
        }

    // if(!isset($_COOKIE['member'])) {
    //     echo "Cookie named 'member' is not set!";

    //     // remove all session variables
    //     session_unset();
    //     session_destroy();

    //     header('Location: ../../login.php');
    //     exit;
    // } else {
    //     // echo "Cookie 'member' is set!<br>";
    //     // echo "Value is: " . $_COOKIE['member'];
    // }  

    // print_r($_COOKIE);
    // die();        
    }






?>