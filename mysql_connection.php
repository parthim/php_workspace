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
reportTo.employeeNumber,
  reportTo.firstName,
  reportTo.lastName,
  reportTo.jobTitle,
  reportTo.extension,
  reportTo.email,
  emp.firstName AS reportToFirstName,
  emp.lastName AS reportToLastName,
  O.city,
  O.phone
FROM employees reportTo JOIN employees emp
ON reportTo.reportsTo = emp.employeeNumber
JOIN offices O
ON reportTo.officeCode = O.officeCode LIMIT 10";

$result = mysqli_query($conn,$query);
$data=[];
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
}
 echo json_encode($data);
?>