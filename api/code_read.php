<?php
    $filepath = realpath (dirname(__FILE__));
    require_once($filepath."/dbConnect.php");
    $conn = connect();
    
    if (isset($_GET['code'])) {
        $code = $_GET['code'];
        $sql = "INSERT INTO codeTest(code) VALUE ('$code')";
             
        if (mysqli_query($conn, $sql)) {
            echo "1\n";
        } 
        else {
            echo "0\n";
        }
                
    }
    else{
        $sql = "SELECT *FROM codeTest ORDER BY ID DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            $code = $row['code'];
            echo $code ;
        }
    }
?>