<!DOCTYPE html>
<html>
<head>
    <title>Update Brand</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('admin-header')
<div class="container">
    <div align="center">
        <br/><br/>
        <form action="{{ route('updateCategory',$category->id) }}" method="get" style="width: 500px;border: ridge;padding: 30px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" class="form-control" name="name" id="name1" placeholder="Enter New Category Name : " value="{{ $category->name }}"/>
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
            <button type="submit" style="width: 435px" class="btn btn-primary">Save Changes</button><br/>
        </form>
        <br/><br/>
    </div>
</div>
<br/>
@include('footer')
</body>
</html>