<?php
/**
 * Created by IntelliJ IDEA.
 * User: ISURU UMAYANGA
 * Date: 6/17/2019
 * Time: 9:56 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="#" method="post" id="form1">

    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Customer ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword1" placeholder="Customer Id" name="CustId">
            <span>Ex:-Cxx</span>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Customer Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword2" placeholder="Customer Name" name="Custname">
            <span>Ex:-Isuru Umayanga</span>
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Customer Address</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword3" placeholder="Customer Address" name="CustAddress">

        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Customer Telephone</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword4" placeholder="CustomerTelephone" name="Custtel">
        </div>
    </div>

    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Customer Salary</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="Customer Salary" name="Custsalary">
        </div>
    </div>


    <button type="submit" class="btn btn-primary" id="btnsubmit">Submit</button>

</form>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/myjss.js"></script>
</body>
</html>
