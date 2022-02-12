$.get("http://localhost/php_workspace/customerQuery.php",function(data,status){
    let row ='';

$.each(data,function(item,value){
        row += "<tr><td>"+value.customerNumber+"</td><td>"+value.customerName+"</td><td>"+value.totalAmount+"</td></tr>"
    });
    $("#customerData").html(row);
}) .fail(function(a,b,c){
    console.log("Invalid Url");
    console.log(a,b,c);
});