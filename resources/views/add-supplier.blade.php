<!DOCTYPE html>
<html>
<head>
    <title>Add Supplier</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('admin-header')
<div class="container">
    <div align="center">
        <br/><br/>
        <form action="{{ route('saveSupplier') }}" method="get" style="width: 500px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="name" id="name1" placeholder="Enter New Supplier Name : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Supplier Email : "/>
            </div>
            <br/>

            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="password" id="password1" placeholder="Enter Password : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input type="tel" class="form-control" name="contact" id="contact1" placeholder="Enter Supplier's Contact : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" class="form-control" name="address" id="address1" placeholder="Enter Supplier's Address : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" class="form-control" name="salary" id="salary1" placeholder="Enter Supplier's Salary : "/>
            </div>
            <br/>
            <button type="submit" style="width: 500px" class="btn btn-primary">Save Supplier</button><br/>
        </form>
    </div>
</div>
<br/><br/>
@include('footer')
</body>
</html>