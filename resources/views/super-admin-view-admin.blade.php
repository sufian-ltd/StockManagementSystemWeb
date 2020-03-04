<!DOCTYPE html>
<html>
<head>
    <title>Super Admin</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('super-admin-header')
<div class="container">
    <br/><br/>
    <div align="center">
        <form action="{{ route('addAdmin') }}" method="get" style="width: 500px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="email" class="form-control" name="email" required id="email1" placeholder="Enter New Admin Email : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" name="contact" id="contact1" placeholder="Enter Password : "/>
            </div>
            <br/>
            <button type="submit" style="width: 500px" class="btn btn-primary">Save Admin</button><br/>
        </form>
    </div>
    <br/><br/>
    <br/><br/>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>SL No</th>
            <th>Email</th>
            <th>Password</th>
            <th>Created Date</th>
            <th>Updated Date</th>
        </tr>
        @php $i=0; @endphp
        @foreach($admin as $res)
            @php $i++; @endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $res->email }}</td>
                <td>{{ $res->password }}</td>
                <td>{{ $res->created_at }}</td>
                <td>{{ $res->updated_at }}</td>
            </tr>
        @endforeach
    </table>
</div>
<br/>
</body>
</html>