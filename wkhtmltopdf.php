<?php
require_once 'vendor/autoload.php';
use mikehaertl\wkhtmlto\Pdf;

// You can pass a filename, a HTML string, an URL or an options array to the constructor
// /v1-html-form/แบบฟอร์ม_คำสั่ง/index.html
$pdf = new Pdf;
$pdf->addPage('/path/to/page.html');
$pdf->addPage('<html>....</html>');
$pdf->addPage('http://www.example.com');

// Add a cover (same sources as above are possible)
$pdf->addCover('/path/to/mycover.html');

// Add a Table of contents
$pdf->addToc();

// Save the PDF
if (!$pdf->saveAs('/path/to/report.pdf')) {
    $error = $pdf->getError();
    print_r($error);
    // ... handle error here
}

// ... or send to client for inline display
if (!$pdf->send()) {
    $error = $pdf->getError();
    // ... handle error here
}

// ... or send to client as file download
if (!$pdf->send('report.pdf')) {
    $error = $pdf->getError();
    // ... handle error here
}

// ... or you can get the raw pdf as a string
$content = $pdf->toString();