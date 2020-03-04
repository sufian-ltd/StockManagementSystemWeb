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
<div class="container" align="center">
    <br/><br/>
    <div style="width: 450px;">
        <form action="{{ route('savePayment') }}" method="get">
            <input type="hidden" name="cusId" value="{{ $cusId }}">
            <input type="hidden" name="proId" value="{{ $proId }}">
            <input type="hidden" name="qtn" value="{{ $qtn }}">
            <input type="hidden" name="cost" value="{{ $cost }}">
    <input style="margin-bottom: 10px;" type="text" readonly class="form-control" value="Customer Name : {{ $customer->name }}"/>
    <input style="margin-bottom: 10px;" type="text" readonly class="form-control" value="Product Name : {{ $product->name }}"/>
    <input style="margin-bottom: 10px;" type="text" readonly class="form-control" value="Product Quantity: {{ $qtn }}"/>
    <input style="margin-bottom: 10px;" type="text" readonly class="form-control" value="Total Cost: {{ $cost}}"/>
    </div>
    <div style="width: 450px;">
        <div>
            <img style="width: 100%;height: 90px;" src="{{ asset('images/bkash2.png') }}"/>
        </div>
        <div style="background-color: #e3106e;color: #fff;">
            <p style="padding-top: 10px;">Merchant : {{ $supplier }} (Supplier)</p>
            <p>Invoice No : LDNF87DVNDFV8DFVNDFV87YVDFIV</p>
            <p style="margin-bottom: 15px;">Product Name : {{ $product->name}}</p>
            <p style="margin-bottom: 15px;">Total Number of Product : {{ $qtn}}</p>
            <p style="margin-bottom: 15px;">Amount : {{ $cost }}</p>
            <p>Your bkash account  number : </p>
            <input style="display: block;width: 250px;margin-bottom: 10px" class="form-control" type="number" placeholder="e.g 01XXXXXXXXX" value="{{ $customer->contact }}">
            <label style="margin-bottom: 10px;"><input type="checkbox"> I agree to the terms and condition</label>
        </div>
        <div style="background-color: #e3106e;color: #fff;padding-bottom: 20px;">
            <input class="btn" type="submit"  value="PROCEED" style="display:inline-block;background-color: #bf0055;width: 100px;color: #fff;">
            <input class="btn" type="button" value="CLOSE" style="display: inline-block;background-color: #bf0055;width: 100px;color: #fff">
        </div>
    </div>
    </form>
</div>
<br/>
@include('footer')
</body>
</html>