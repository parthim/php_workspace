
$.ajax({
    type:"GET", 
    url: "http://localhost/php_workspace/customerQuery.php", 
    success: function(data) {
            // $("#customerData").html("<tr><td>"+data.customerNumber+"</td><td>"+data.customerName+"</td><td>"+data.totalAmount+"</td></tr>");
            console.log(data);                
        }, 
    error: function(jqXHR, textStatus, errorThrown) {
            alert(jqXHR.status);
        },
dataType: "jsonp"
})​​​​​​​​​​​
