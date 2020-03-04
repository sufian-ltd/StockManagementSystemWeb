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
        <form action="{{ route('updateProduct',$product->id) }}" method="get" style="width: 500px;border: ridge;padding: 30px">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <!-- <select name="brand" class="form-control">
                    @foreach($brand as $res)
                        <option value="{{ $res->name }}">{{ $res->name }}</option>
                    @endforeach
                </select> -->
                <input type="text" class="form-control" name="brand" id="name1" placeholder="Enter New Brand Name : " required value="{{ $product->brand }}"/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-down"></i></span>
                <!-- <select name="category" class="form-control">
                    @foreach($category as $res)
                        <option value="{{ $res->name }}">{{ $res->name }}</option>
                    @endforeach
                </select> -->
                <input type="text" class="form-control" name="category" id="name1" placeholder="Enter New Category Name : " required value="{{ $product->category }}"/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="text" class="form-control" name="name" id="name1" placeholder="Enter New Product Name : " required value="{{ $product->name }}"/>
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
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" class="form-control" name="price" id="price1" placeholder="Enter Product Price : " required value="{{ $product->price }}"/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" class="form-control" name="qtn" id="qtn1" placeholder="Enter Product Quantity : " required value="{{ $product->qtn }}"/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" name="row" id="row1" placeholder="Enter Product Row : " value="{{ $product->row }}"/>
            </div>
            <br/>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-hand-right"></i></span>
                <input type="number" required class="form-control" name="shelf" id="shelf1" placeholder="Enter Product Shelf : " value="{{ $product->shelf }}"/>
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