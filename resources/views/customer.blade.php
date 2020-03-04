<!DOCTYPE html>
<html>
<head>
    <title>Customers</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('supplier-header')
<div class="container">
    <br/><br/>
    <div align="center">
        <form action="{{ route('customer') }}" method="get" style="width: 500px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" class="form-control" name="name" id="name1" placeholder="Enter New Supplier Name : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="tel" class="form-control" name="contact" id="contact1" placeholder="Enter Supplier's Contact : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" class="form-control" name="address" id="address1" placeholder="Enter Supplier's Address : "/>
            </div>
            <br/>
            <button type="submit" style="width: 500px" class="btn btn-primary">Save Customer</button><br/>
        </form>
    </div>
    <br/><br/>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>SL No</th>
            <th>Customer Name</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach($customer as $res)
        @php $i++; @endphp
        <tr>

            <td>{{ $i }}</td>
            <td>{{ $res->name }}</td>
            <td>{{ $res->contact }}</td>
            <td>{{ $res->address }}</td>
            <td>
                <a href="{{ route('product',$res->id) }}" class="btn btn-danger">Make Order</a>
            </td>
        </tr>
        @endforeach

    </table>
</div>
<br/>
@include('footer')
</body>
</html>