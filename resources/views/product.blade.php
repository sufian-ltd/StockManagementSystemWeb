<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('admin-header')
<div class="container">
    <div align="center">
        <br/><br/>
        <form action="{{ route('searchProduct') }}" method="get">
            <table style="width: 450px;">
                <tr>
                    <td><input style="width: 440px;" class="form-control" name="key" type="text"
                               placeholder="Enter Keyword..."></td>
                    <td><button class="btn btn-danger" type="submit" name="search"><span class="glyphicon glyphicon-search"></span> Search Product</button></td>
                </tr>
            </table>
        </form>
    </div>
    <a class="btn btn-primary" href="{{ route('addProductView') }}">Add New Product</a><br/><br/>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Brand</th>
            <th>Category</th>
            <th>Product Name</th>
            <th>Status</th>
            <th>Unit</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Row No</th>
            <th>Shelf No</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
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
                <td>{{ $res->created_at}}</td>
                <td>{{ $res->updated_at}}</td>
                <td><a href="{{ route('editProduct',$res->id) }}" class="btn btn-primary">Update</a></td>
                <td><a href="{{ route('deleteProduct',$res->id) }}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
    </table>
</div>
<br/>
@include('footer')
</body>
</html>