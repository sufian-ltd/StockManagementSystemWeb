<!DOCTYPE html>
<html>
<head>

    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('admin-header')
{{--<img style="width: 100%" src="{{ asset('images/a3.jpg') }}">--}}

<div class="container">
    <div align="center">
        <br/><br/><br><br>
        <div class="row">
            <div class="col-md-4">
                <div align="center" style="height: 40px;background-color: #8c1818;color: #fff">
                    <label style="margin-top: 10px;font-size: 18px;">Total Brand</label>
                </div>
                <div align="center" style="height: 50px;background-color: #bb6666;color: #fff">
                    <label style="margin-top: 10px;font-size: 20px;">{{ $brand }}</label>
                </div>
            </div>
            <div class="col-md-4">
                <div align="center" style="height: 40px;background-color: #8c1818;color: #fff">
                    <label style="margin-top: 10px;font-size: 18px;">Total Category</label>
                </div>
                <div align="center" style="height: 50px;background-color: #bb6666;color: #fff">
                    <label style="margin-top: 10px;font-size: 20px;">{{ $category }}</label>
                </div>
            </div>
            <div class="col-md-4">
                <div align="center" style="height: 40px;background-color: #8c1818;color: #fff">
                    <label style="margin-top: 10px;font-size: 18px;">Total Product</label>
                </div>
                <div align="center" style="height: 50px;background-color: #bb6666;color: #fff">
                    <label style="margin-top: 10px;font-size: 20px;">{{ $product }}</label>
                </div>
            </div>
        </div>
        <br/><br/>
        <div class="row">
            <div class="col-md-4">
                <div align="center" style="height: 40px;background-color: #8c1818;color: #fff">
                    <label style="margin-top: 10px;font-size: 18px;">Total Customer</label>
                </div>
                <div align="center" style="height: 50px;background-color: #bb6666;color: #fff">
                    <label style="margin-top: 10px;font-size: 20px;">{{ $customer }}</label>
                </div>
            </div>
            <div class="col-md-4">
                <div align="center" style="height: 40px;background-color: #8c1818;color: #fff">
                    <label style="margin-top: 10px;font-size: 18px;">Total Supplier</label>
                </div>
                <div align="center" style="height: 50px;background-color: #bb6666;color: #fff">
                    <label style="margin-top: 10px;font-size: 20px;">{{ $supplier }}</label>
                </div>
            </div>
            <div class="col-md-4">
                <div align="center" style="height: 40px;background-color: #8c1818;color: #fff">
                    <label style="margin-top: 10px;font-size: 18px;">Total Pending Order</label>
                </div>
                <div align="center" style="height: 50px;background-color: #bb6666;color: #fff">
                    <label style="margin-top: 10px;font-size: 20px;">{{ $pendingOrder }}</label>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-4">
                <div align="center" style="height: 40px;background-color: #8c1818;color: #fff">
                    <label style="margin-top: 10px;font-size: 18px;">Total Transaction</label>
                </div>
                <div align="center" style="height: 50px;background-color: #bb6666;color: #fff">
                    <label style="margin-top: 10px;font-size: 20px;">{{ $transaction }}</label>
                </div>
            </div>
            <div class="col-md-4">
                <div align="center" style="height: 40px;background-color: #8c1818;color: #fff">
                    <label style="margin-top: 10px;font-size: 18px;">Total Types of Product</label>
                </div>
                <div align="center" style="height: 50px;background-color: #bb6666;color: #fff">
                    <label style="margin-top: 10px;font-size: 20px;">{{ $productType }}</label>
                </div>
            </div>
            <div class="col-md-4">
                <div align="center" style="height: 40px;background-color: #8c1818;color: #fff">
                    <label style="margin-top: 10px;font-size: 18px;">Total Archived Product</label>
                </div>
                <div align="center" style="height: 50px;background-color: #bb6666;color: #fff">
                    <label style="margin-top: 10px;font-size: 20px;">{{ $archived }}</label>
                </div>
            </div>
        </div>
    </div>
</div>
<br/><br/><br/><br/>
{{--@include('footer')--}}
</body>
</html>