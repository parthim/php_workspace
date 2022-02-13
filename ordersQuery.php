<?php
//DB Credentials
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


$host = "localhost";
$userName = "parthim";
$password = "Asscod0331";
$db = 'fsit_sales_database';
// Create connection
$conn = new mysqli($host, $userName, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
// Query to select the required Fields from Database
$query = "SELECT
C.customerName, O.orderNumber,O.status,sum(OD.priceEach) As totalAmount
FROM customers C JOIN orders O
on C.customerNumber=O.customerNumber
JOIN 
orderDetails OD 
on O.orderNumber=OD.orderNumber
WHERE lower(o.status) not like '%shipped%'  
GROUP BY O.orderNumber
ORDER BY `O`.`orderNumber`  ASC LIMIT 10";

$result = mysqli_query($conn,$query);
$data=[];
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
}
 echo json_encode($data);
?>