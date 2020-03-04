<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('supplier-header')
<div class="container">
    <br/><br/>
    <form action="{{ route('product',$id) }}" method="get">
        <table align="center" class="container-fluid" style="width: 600px;">
            <tr>
                <td>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                        <input class="form-control" name="key" type="text"
                               placeholder="search anything.........">
                    </div>
                </td>
                <td>
                    <div class="input-group">
                        <button type="submit" name="search" class="btn btn-danger"><i class="glyphicon glyphicon-search"></i> Search</button>
                    </div>
                </td>
            </tr>
        </table>
    </form>
    <br/><br/>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Product Name</th>
            <th>Status</th>
            <th>Unit</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Row No</th>
            <th>Shelf No</th>
            <th>Quantity</th>
            <th>Payment</th>
            <th>Action</th>
        </tr>
        @php $i=0; @endphp
        @foreach($product as $res)
            @php $i++; @endphp
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $res->brand }}</td>
                <td>{{ $res->category }}</td>
                <td>{{ $res->name }}</td>
                <td>{{ $res->status }}</td>
                <td>{{ $res->unit }}</td>
                <td>{{ $res->price }}</td>
                <td>{{ $res->qtn }}</td>
                <td>{{ $res->row }}</td>
                <td>{{ $res->shelf }}</td>
                <form action="{{ route('addPaymentView') }}" method="get">
                    <td>
                        <input required type="number" class="form-control" name="qtn">
                    </td>
                    <td>
                       <select class="form-control" name="payment">
                           <option value="bkash">BKASH</option>
                           <option value="cash">CASH ON DELIVERY</option>
                       </select>
                    </td>
                    <input type="hidden" name="proId" value="{{ $res->id }}">
                    <input type="hidden" name="cusId" value="{{ $id }}">
                    <td>
                        <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-shopping-cart"></i> Add To Order</button>
                    </td>
                </form>
            </tr>
        @endforeach
    </table>
</div>
<br/>
@include('footer')
</body>
</html>