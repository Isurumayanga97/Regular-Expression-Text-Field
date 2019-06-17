$('#btnsubmit').click(function () {
    var value=$("#inputPassword1").val();
    var regEx ="/C-\d{3}/";
    var result=regEx.test(value);
    if (!result) {
        alert("Input Format Is Invalid");
    }
});
$("#inputPassword1").keyup(function () {
    if($("#inputPassword1").val().length>4){
        alert("Invalid Format")
    }
});
/*
function validate(){
    var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
    var name = document.getElementById('namefill').value;
    if(!regName.test(name)){
        alert('Please enter your full name (first & last name).');
        document.getElementById('namefill').focus();
        return false;
    }else{
        alert('Valid name given.');
        return true;
    }
}
*/

if (
    $("#btnsubmit").click(function () {
        var value = $("#namefill").val();
        var regEx = /^[a-zA-Z]*$/;
        var result = regEx.test(value);
        if (!result) {
            alert("Invalid Format");
        }
    })
) ;
if (
    $("#btnsubmit").click(function () {
        var value = $("#address").val();
        var regEx = /^[a-zA-Z]+ [a-zA-Z]+$/;
        var result = regEx.test(value);
        if (!result) {
            alert("Invalid Format");
        }
    })
) ;
if (
    $("#btnsubmit").click(function () {
        var value = $("#custtelnum").val();
        var regEx = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
        var result = regEx.test(value);
        if (!result) {
            alert("Invalid Format");
        }
    })
) ;
if (
    $("#btnsubmit").click(function () {
        var value = $("#cutsal").val();
        var regEx = /^\d{1,6}\.\d{1,6}$/;
        var result = regEx.test(value);
        if (!result) {
            alert("Invalid Format");
        }
    })
) ;








