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
        alert("Waradii yakooo")
    }
});