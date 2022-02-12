$.get("http://localhost/php_workspace/ordersQuery.php",function(data,status){
    //  console.log(data,status);
    let row = '';
    $.each(data,function(item,value){
        row += "<tr><td>"+value.orderNumber+"</td><td>"+value.customerName+"</td><td>"+value.status+"</td><td>"+value.totalAmount+"</td></tr>"
    });
    $("#ordersData").html(row);
}) .fail(function(a,b,c){
    console.log("Invalid Url");
    console.log(a,b,c);
});