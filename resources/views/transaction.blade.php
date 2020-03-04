{{--@php--}}
{{--function fetch_data()--}}
{{--{--}}
    {{--$output = '';--}}
    {{--$orderRes=\App\Order::all();--}}
    {{--foreach ($orderRes as $values)--}}
    {{--{--}}
        {{--$output .= '--}}
        {{--<tr>--}}
            {{--<td>'.$values['id'].'</td>--}}
            {{--<td>'.$values['supplier_name'].'</td>--}}
            {{--<td>'.$values['customer_name'].'</td>--}}
            {{--<td>'.$values['product_name'].'</td>--}}
            {{--<td>'.$values['qtn'].'</td>--}}
            {{--<td>'.$values['cost'].'</td>--}}
            {{--<td>'.$values['updated_at'].'</td>--}}
            {{--<td>'.$values['payment'].'</td>--}}
            {{--<td>'.$values['status'].'</td>--}}
        {{--</tr>--}}
                          {{--';--}}
    {{--}--}}
    {{--return $output;--}}
{{--}--}}
{{--@endphp--}}
{{--@php--}}
    {{--if (isset($_GET['action']) && $_GET['action'] == 'showPdf')  {--}}

        {{--require_once('tcpdf/tcpdf.php');--}}
        {{--$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);--}}
        {{--$obj_pdf->SetCreator(PDF_CREATOR);--}}
        {{--$obj_pdf->SetTitle("Customer Order Transaction Report");--}}
        {{--$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);--}}
        {{--$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));--}}
        {{--$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));--}}
        {{--$obj_pdf->SetDefaultMonospacedFont('helvetica');--}}
        {{--$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);--}}
        {{--$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);--}}
        {{--$obj_pdf->setPrintHeader(false);--}}
        {{--$obj_pdf->setPrintFooter(false);--}}
        {{--$obj_pdf->SetAutoPageBreak(TRUE, 10);--}}
        {{--$obj_pdf->SetFont('helvetica', '', 11);--}}
        {{--$obj_pdf->AddPage();--}}
        {{--$content = '';--}}
        {{--$content .= '--}}
        {{--<h4 align="center">Customer Order Transaction Report</h4><br />--}}
        {{--<table border="1" cellspacing="0" cellpadding="3">--}}
           {{--<tr>--}}
            {{--<th>ID</th>--}}
            {{--<th>Supplier Name</th>--}}
            {{--<th>Customer Name</th>--}}
            {{--<th>Product Name</th>--}}
            {{--<th>Product Quantity</th>--}}
            {{--<th>Total cost</th>--}}
            {{--<th>Delivery Date</th>--}}
            {{--<th>Payment Method</th>--}}
            {{--<th>Admin Status</th>--}}
        {{--</tr>--}}
        {{--';--}}
        {{--$content .= fetch_data();--}}
        {{--$content .= '</table>';--}}
        {{--$obj_pdf->writeHTML($content);--}}
        {{--$obj_pdf->Output('file.pdf', 'I');--}}
 {{--}--}}
{{--@endphp--}}
<!DOCTYPE html>
<html>
<head>
    <title>Transaction</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')  }}"></script>

</head>
<body style="font-family: serif">
@include('admin-header')
<div class="container">
    <br/><br/>
    <a class="btn btn-danger" href="{{ route('viewReport')}}"><span class="glyphicon glyphicon-book"></span> Generate Report</a><br/><br>
    <table class="table table-hover table-striped table-bordered">
        <tr>
            <th>SL No</th>
            <th>Supplier Name</th>
            <th>Customer Name</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Cost</th>
            <th>Payment</th>
            <th>Date</th>
        </tr>
        @php $i=0; @endphp
        @foreach($order as $res)
            @php $i++; @endphp
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $res->supplier_name }}</td>
            <td>{{ $res->customer_name }}</td>
            <td>{{ $res->product_name }}</td>
            <td>{{ $res->qtn }}</td>
            <td>{{ $res->cost }}</td>
            <td>{{ $res->payment }}</td>
            <td>{{ $res->date }}</td>
        </tr>
        @endforeach
    </table>
</div>
<br/>
@include('footer')
</body>
</html>