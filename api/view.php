<!DOCTYPE html>
<html>
<head>
<style>
table, th, td{
    border: 1px solid black;
}
</style>
</head>
<body>
<table width="1000" border="2" align="center">

	<tr>
	<td>Index </td>
        <td>MQ5 </td>
        <td>MQ9 </td>
        <td>MQ135 </td>
        <td>Temperature </td>
        <td>Humidity </td>
        <td>Time </td>
	</tr>

    <?php

    $filepath = realpath (dirname(__FILE__));
    require_once($filepath."/dbConnect.php");
    $conn = connect();

    $sql = "SELECT *FROM IoTweatherData ORDER BY id desc";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
                $mq5 = $row['mq5'];
                $mq9 = $row['mq9'];
                $mq135 = $row['mq135'];
                $temp = $row['temp'];
                $hume = $row['hume'];
                $time = $row['time'];
		
	?>

	<tr>
	<td><?php echo  $id ;?> </td>
        <td><?php echo  $mq5 ;?> </td>
        <td><?php echo  $mq9 ;?> </td>
        <td><?php echo  $mq135 ;?> </td>
        <td><?php echo  $temp ;?> </td>
        <td><?php echo  $hume ;?> </td>
        <td><?php echo  $time ;?> </td>
        
	</tr>
<?php 
}
	}
?>
</table>
</body>
</html>
