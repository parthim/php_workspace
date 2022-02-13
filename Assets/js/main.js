
$.get("http://localhost/php_workspace/mysql_connection.php",function(data,status){
    // console.log(data,status);
    let row = '';
    $.each(data,function(item,value){
        row += "<tr><td>"+value.employeeNumber+"</td><td>"+value.firstName+" "+value.lastName+"</td><td>"+value.jobTitle+"</td><td>"+value.email+"</td><td>"+value.city+"</td><td>"+value.phone+"</td><td>"+value.extension+"</td><td>"+value.reportToFirstName+" "+value.reportToLastName+"</td></tr>";
    });
    $("#employeeData").html(row);
}) .fail(function(a,b,c){
    console.log("Invalid Url");
    console.log(a,b,c);
});
