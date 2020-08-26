<?php  
 $servername = "fdb3.atspace.me";
        $username = "1565343_iot";
        $password = "12345free";
        $dbname = "1565343_iot";
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect($servername, $username, $password, $dbname);  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", 'w');  
      fputcsv($output, array('id','mq5','mq9','mq135','temp','hume','time'));  
      $query = "SELECT * from IoTweatherData ORDER BY emp_id DESC"; 
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?>  