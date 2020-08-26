<?php

    function connect(){
        $servername = "fdb3.atspace.me";
        $username = "1565343_iot";
        $password = "12345free";
        $dbname = "1565343_iot";
                
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        else{
            //echo "Connection ok \n";
        }
        return $conn;
                              
    }
?>