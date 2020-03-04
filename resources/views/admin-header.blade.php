<nav class="btn-lg navbar-inverse" style="background: #560000;font-size: 18px;">
    <div class="container-fluid">
        <div class="navbar-collapse">
            <h4 align="center" style="color: #ffffff;font-size: 22px;font-weight: bold">Admin Section</h4>
            <!--            <a style="color: #ffffff;font-size: 20px" class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-globe"></span> EASY Shopping</a>-->
        </div>
        <ul class="nav navbar-nav" >
            <li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
            <!-- <li><a href="{{ route('brand') }}"><span class="glyphicon glyphicon-briefcase"></span> Brand</a></li>
            <li><a href="{{ route('category') }}"><span class="glyphicon glyphicon-list"></span> Category</a></li> -->
            <li><a href="{{ route('shwProduct') }}"><span class="glyphicon glyphicon-leaf"></span> Product</a></li>
            <li><a href="{{ route('order') }}"><span class="glyphicon glyphicon-cloud-upload"></span> Order</a></li>
            <li><a href="{{ route('supplier') }}"><span class="glyphicon glyphicon-random"></span> Suppliers</a></li>
            <li><a href="{{ route('customerAdmin') }}"><span class="glyphicon glyphicon-equalizer"></span> Customers</a></li>
            <li><a href="{{ route('transaction') }}"><span class="glyphicon glyphicon-sort"></span> Transaction</a></li>
            <li><a href="{{ route('maintenance') }}"><span class="glyphicon glyphicon-cog"></span> Maintenance</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href=""><span class="glyphicon glyphicon-user"></span> Profile</a></li> -->
            <li><a href="{{ route('showDeletedProductView') }}"><span class="glyphicon glyphicon-trash"></span> Archive</a></li>
            <li><a href="{{ route('index') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>