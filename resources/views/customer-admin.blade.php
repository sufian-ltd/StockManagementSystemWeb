<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('admin-header')
<div class="container">
    <br/><br/>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>SL No</th>
            <th>Customer Name</th>
            <th>Contact</th>
            <th>Address</th>
        </tr>
        @php $i=0; @endphp
        @foreach($customer as $res)
        @php $i++; @endphp
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $res->name }}</td>
            <td>{{ $res->contact }}</td>
            <td>{{ $res->address }}</td>
        </tr>
        @endforeach
    </table>
</div>
<br/>
@include('footer')
</body>
</html>