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
$query = "SELECT a.employeeNumber,a.firstName,a.lastName,a.jobTitle,offices.city,offices.phone,a.email,a.extension,a.reportToFirstName,a.reportToLastName
FROM offices INNER JOIN(SELECT emp.firstName AS reportToFirstName,
                        emp.lastName AS reportToLastName,
       				        	reportTo.employeeNumber,
                        reportTo.firstName,
                        reportTo.lastName,
                        reportTo.jobTitle,
                        reportTo.extension,
                        reportTo.email,
                        reportTo.officeCode
                        FROM employees AS emp
                        JOIN employees AS reportTo 
                        ON reportTo.reportsTo = emp.employeeNumber) AS a
WHERE offices.officeCode = a.officeCode LIMIT 10";

$result = mysqli_query($conn,$query);
$data=[];
if($result){
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
}
 echo json_encode($data);
?>