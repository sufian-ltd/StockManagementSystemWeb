<nav class="btn-lg navbar-inverse" style="background: #560000;font-size: 18px;">
    <div class="container">
        <div class="navbar-collapse">
            <h4 align="center" style="color: #ffffff;font-size: 20px;font-weight: bold">Supplier Section</h4>
            <!--            <a style="color: #ffffff;font-size: 20px" class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-globe"></span> EASY Shopping</a>-->
        </div>
        <ul class="nav navbar-nav" >
            <li><a href="{{ route('supplierHome') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="{{ route('customer') }}"><span class="glyphicon glyphicon-user"></span> Customer</a></li>
{{--            <li><a  href="{{ route('product',0) }}"><span class="glyphicon glyphicon-phone-alt"></span> Product</a></li>--}}
            <li><a  href="{{ route('pendingOrder') }}"><span class="glyphicon glyphicon-oil"></span> Pending Order</a></li>
            <li><a  href="{{ route('approvedOrder') }}"><span class="glyphicon glyphicon-sunglasses"></span> Approved Order</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('index') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>