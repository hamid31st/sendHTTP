<?php  
  $servername = "fdb3.atspace.me";
        $username = "1565343_iot";
        $password = "12345free";
        $dbname = "1565343_iot";
$conn = mysqli_connect($servername, $username, $password, $dbname);
  
$setSql = "SELECT * from IoTweatherData";  
$setRec = mysqli_query($conn, $setSql);  
  
$columnHeader = '';  
$columnHeader = 'id'."\t".'mq5'."\t".'mq9'."\t".'mq135'."\t".'temp'."\t".'hume'."\t".'time'."\t";  
  
$setData = '';  
  
while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail_Reoprt.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
  
echo ucwords($columnHeader) . "\n" . $setData . "\n";  
  
?>  