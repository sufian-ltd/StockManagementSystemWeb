<!DOCTYPE html>
<html>
<head>

    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('super-admin-header')
<div class="container" align="center">
    <h2 style="color: red;border-bottom: 1px solid red;padding-bottom: 12px;margin-bottom: 15px;font-weight: 600;">Product Maintenance Report</h2>
    <table class="table table-bordered" style="font-size: 18px;font-weight: bold;color: red;">
        <tr>
            <th>Discussion</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>Total Number Of Sells Product</td>
            <td>{{ $products }} </td>
        </tr>
        <tr>
            <td>Amount of Product</td>
            <td>{{ $qtn }} </td>
        </tr>
        <tr>
            <td>Monthly Total Sells Revenue</td>
            <td>{{ $cost }} TK</td>
        </tr>
        <tr>
            <td>Number of Customer</td>
            <td>{{ $customer }} Person</td>
        </tr>
    </table>
    <h2 style="color: red;border-bottom: 1px solid red;padding-bottom: 12px;margin-bottom: 15px;font-weight: 600;">Suppliers Maintenance Report</h2>
    <table class="table table-bordered" style="font-size: 18px;font-weight: bold;color: red;">
        <tr>
            <th>Discussion</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>Total Supplier Working</td>
            <td>{{ $supplier }} Person</td>
        </tr>
        <tr>
            <td>Total Amount of Salary</td>
            <td>{{ $salary }} TK</td>
        </tr>
    </table>
</div>
</body>
</html>