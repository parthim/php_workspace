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
$query = "SELECT DISTINCT customers.customerName,b.orderNumber,b.status,b.totalAmount
FROM customers INNER JOIN (SELECT orders.orderNumber,orders.customerNumber,orders.status,SUM(orderDetails.priceEach) AS totalAmount
FROM orders INNER JOIN orderDetails
WHERE orders.orderNumber = orderDetails.orderNumber
GROUP BY orderDetails.orderNumber 
) AS b
WHERE customers.customerNumber = b.customerNumber  AND b.status NOT LIKE '%Shipped'
ORDER BY `b`.`orderNumber` ASC LIMIT 10";

$result = mysqli_query($conn,$query);
$data=[];
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
}
 echo json_encode($data);
?>