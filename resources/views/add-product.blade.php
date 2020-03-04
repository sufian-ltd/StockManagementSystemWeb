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
        <form action="{{ route('saveProduct') }}" method="get" style="width: 500px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input class="form-control" list="brandList" required name="newBrand" id="name1" placeholder="Enter Brand Name : "/>
            </div>
            <datalist id="brandList">
                @foreach($brand as $res)
                    <option value="{{ $res->brand }}">
                @endforeach
            </datalist>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input list="categoryList" class="form-control" required name="newCategory" id="name1" placeholder="Enter Category Name : "/>
            </div>
            <datalist id="categoryList">
                @foreach($category as $res)
                    <option value="{{ $res->category }}">
                @endforeach
            </datalist>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" class="form-control" required name="name" id="name1" placeholder="Enter New Product Name : "/>
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
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <select name="unit" class="form-control">
                    {{--<option value="Kilogram(KG)">Kilogram(KG)</option>--}}
                    {{--<option value="Litre(L)">Litre(L)</option>--}}
                    <option value="Unit(U)">Unit(U)</option>
                    {{--<option value="Pound(P)">Pound(P)</option>--}}
                </select>

            </div>
            {{--<input type="hidden" name="unit" value="Unit">--}}
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" name="price" id="price1" placeholder="Enter Product Price : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" name="qtn" id="qtn1" placeholder="Enter Product Quantity : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" name="row" id="row1" placeholder="Enter Product Row : "/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" name="shelf" id="shelf1" placeholder="Enter Product Shelf : "/>
            </div>
            <br/>
            <button type="submit" style="width: 500px" class="btn btn-danger">Save Product</button><br/>
        </form>
    </div>
</div>
<br/><br/>
@include('footer')
</body>
</html>