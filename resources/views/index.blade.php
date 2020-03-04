<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
<div class="container" align="center">
    <h2>Stock Management System</h2>
    <hr/>
    <form action="{{ route('index') }}" method="get" style="width: 450px;border-style: ridge;padding: 15px">
        {{ csrf_field() }}
        <img src="{{ asset('images/login.png') }}" width="100" height="100">
        <div class="input-group">
            <h3>Login Panel</h3>
        </div>
        <br/>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input type="email" class="form-control" name="email" id="email1" placeholder="Enter Valid Email Address : "/>
        </div>
        <br/>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" name="password" id="password1"
                   placeholder="Enter Valid Password : "/>
        </div>
        <br/>
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
            <select name="userType" class="form-control">
                <option value="nothing">Select User Type</option>
                <option value="superadmin">Super Admin</option>
                <option value="admin">Admin</option>
                <option value="supplier">Supplier</option>
            </select>
        </div>
        <br/>
        <div class="input-group">
            <button name="login" style="width: 415px" type="submit" class="btn btn-danger glyphicon glyphicon-log-in"> Login</button>
        </div>
        <br/>
        <!-- <div class="input-group">
            <a href="registration.php">Not register yet? Click here to register</a>
        </div> -->
    </form>
</div>
<br/><br/>
@include('footer')
</body>
</html>
