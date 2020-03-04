<!DOCTYPE html>
<html>
<head>
    <title>Category</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('admin-header')
<div class="container">
    <div align="center">
        <br/><br/>
        <form action="{{ route('category') }}" method="get" style="width: 500px;border: ridge;padding: 30px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select name="brand" class="form-control">
                    @foreach($brand as $res)
                        <option value="{{ $res->name }}">{{ $res->name }}</option>
                    @endforeach
                </select>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" class="form-control" name="name" id="name1" placeholder="Enter New Category Name : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select name="status" class="form-control">
                    <option value="Available">Available</option>
                    <option value="Not Available">Not Available</option>
                </select>
            </div>
            <br/>
            <button type="submit" style="width: 435px" class="btn btn-primary">Save Category</button><br/>
        </form>
        <br/><br/>
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Status</th>
                <th>Total Product</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            @php $i=0; @endphp
            @foreach($category as $res)
                @php $i++; @endphp
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $res->name }}</td>
                    <td>{{ $res->status }}</td>
                    <td>{{ $res->total_product }}</td>
                    <td><a href="{{ route('editCategory',$res->id) }}" class="btn btn-success">Update</a></td>
                    <td><a href="{{ route('deleteCategory',$res->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
<br/>
@include('footer')
</body>
</html>