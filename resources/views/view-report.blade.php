@php
function fetch_data()
{
$output = '';
$orderRes=\App\Order::all();
foreach ($orderRes as $values)
{
$output .= '
<tr>
    <td>'.$values['id'].'</td>
    <td>'.$values['supplier_name'].'</td>
    <td>'.$values['customer_name'].'</td>
    <td>'.$values['product_name'].'</td>
    <td>'.$values['qtn'].'</td>
    <td>'.$values['cost'].'</td>
    <td>'.$values['updated_at'].'</td>
    <td>'.$values['payment'].'</td>
    <td>'.$values['status'].'</td>
</tr>
';
}
return $output;
}
@endphp
@php

require_once('tcpdf/tcpdf.php');
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$obj_pdf->SetTitle("Customer Order Transaction Report");
$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
$obj_pdf->setPrintHeader(false);
$obj_pdf->setPrintFooter(false);
$obj_pdf->SetAutoPageBreak(TRUE, 10);
$obj_pdf->SetFont('helvetica', '', 11);
$obj_pdf->AddPage();
$content = '';
$content .= '
<h4 align="center">Customer Order Transaction Report</h4><br />
<table border="1" cellspacing="0" cellpadding="3">
    <tr>
        <th>ID</th>
        <th>Supplier Name</th>
        <th>Customer Name</th>
        <th>Product Name</th>
        <th>Product Quantity</th>
        <th>Total cost</th>
        <th>Delivery Date</th>
        <th>Payment Method</th>
        <th>Admin Status</th>
    </tr>
    ';
    $content .= fetch_data();
    $content .= '</table>';
    $obj_pdf->writeHTML($content);
    $obj_pdf->Output('file.pdf', 'I');

@endphp