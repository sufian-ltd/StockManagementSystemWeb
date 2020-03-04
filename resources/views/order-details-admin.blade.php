<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
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
            <th>Supplier Name</th>
            <th>Customer Name</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Payment</th>
            <th>Cost</th>
            <th>Date</th>
            <th>Action</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach($order as $res)
        @php $i++; @endphp
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $res->supplier_name }}</td>
            <td>{{ $res->customer_name }}</td>
            <td>{{ $res->product_name }}</td>
            <td>{{ $res->qtn }}</td>
            <td>{{ $res->payment }}</td>
            <td>{{ $res->cost }}</td>
            <td>{{ $res->date }}</td>
            <td>
                <a href="{{ route('deliverOrder',$res->id) }}" class="btn btn-success">Deliver Order</a>
            </td>
            <td>
                <a href="{{ route('showPdf',$res->id) }}" class="btn btn-primary">Generate Memo</a>
            </td>
            <td>
                <a href="{{ route('cancelOrder',$res->id) }}" class="btn btn-danger">Cancel Order</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<br/>
@include('footer')
</body>
</html>