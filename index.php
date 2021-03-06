<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='Assets/css/main.css'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Database operations</title>
</head>
<body>
    <div class="employeeDetails">
        <h1>Employee details:</h1>
        <table id="employeeTable">
            <thead>
                <tr>
                    <th>Employee Number</th>
                    <th>FullName</th>
                    <th>JobTitle</th>
                    <th>Email</th>
                    <th>Office City</th>
                    <th>Office Phone</th>
                    <th>Extension</th>
                    <th>Reporting Manager Name</th>
                </tr>
            </thead>
            <tbody id="employeeData">
            </tbody>
        </table>
    </div>
    <div class="customerDetails">
        <h1>Customers and their payments:</h1>
        <table class="customerTable">
            <thead>
                <tr>
                    <th>Customer Number</th>
                    <th>Customer Name</th>
                    <th>Full Amount</th>
                </tr>
            </thead>
            <tbody id="customerData">
            </tbody>

        </table>
    </div>
    <div class="ordersDetails">
        <h1>Order details and amount:</h1>
        <table class="ordersTable">
            <thead>
                <tr>
                    <th>Order Number</th>
                    <th>Customer Name</th>
                    <th>Status</th>
                    <th>Full Amount</th>
                </tr>
            </thead>
            <tbody id="ordersData">
            </tbody>

        </table>
    </div>

    <!-- JavaScript Section -->
    <script language ="javascript" src="Assets/js/main.js"></script>
    <script language ="javascript" src="Assets/js/customersAjax.js"></script>
    <script language ="javascript" src="Assets/js/ordersAjax.js"></script>
</body>
</html>