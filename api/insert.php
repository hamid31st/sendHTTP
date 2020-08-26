<?php
    $filepath = realpath (dirname(__FILE__));
    require_once($filepath."/dbConnect.php");
    $conn = connect();
    
    if (isset($_GET['mq5']) && isset($_GET['mq9']) && isset($_GET['mq135']) && isset($_GET['temp']) && isset($_GET['hume']) && isset($_GET['time'])) {
        
        $mq5 = $_GET['mq5'];
        $mq9 = $_GET['mq9'];
        $mq135 = $_GET['mq135'];
        $temp = $_GET['temp'];
        $hume = $_GET['hume'];
        $time = $_GET['time'];
    
        $sql = "INSERT INTO IoTweatherData(mq5,mq9,mq135,temp,hume,time) VALUES('$mq5','$mq9','$mq135','$temp','$hume','$time')";
             
        if (mysqli_query($conn, $sql)) {
            $sql = "SELECT *FROM codeTest ORDER BY ID DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
        
            if (mysqli_num_rows($result) > 0) {
            
                $row = mysqli_fetch_assoc($result);
                $id = $row['id'];
                $code = $row['code'];
                echo  $code ;
            }
        } 
        else {
            echo "0 \n";
        }
                
        //mysqli_close($conn);
        }
    else{
        $sql = "SELECT *FROM codeTest ORDER BY ID DESC LIMIT 1";
            $result = mysqli_query($conn, $sql);
        
            if (mysqli_num_rows($result) > 0) {
            
                $row = mysqli_fetch_assoc($result);
                $id = $row['id'];
                $code = $row['code'];
                echo  $code ;
            }
    }
?>