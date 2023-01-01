<?php
// require_once 'vendor/autoload.php';

// use Spipu\Html2Pdf\Exception\ExceptionFormatter;
// use Spipu\Html2Pdf\Exception\Html2PdfException;
// use Spipu\Html2Pdf\Html2Pdf;

// try {
//     ob_start();
    // include 'v1-html-form-pdf/แบบฟอร์ม_คำสั่ง/index.html';

    // $content = ob_get_clean();
    // $html2pdf = new Html2Pdf('P', 'A4', 'en', true, 'UTF-8');
    // $html2pdf->pdf->SetDisplayMode('fullpage');
    // // $html2pdf->setDefaultFont("freeserif");
    // $html2pdf->setDefaultFont("THSarabunNew001");

//     if (@file_exists('lang/eng.php')) {
//         require_once 'lang/eng.php';
//         $html2pdf->pdf->setLanguageArray($l);
//     }

//     // สร้างเนื้อหาจาก  HTML code

//     $html2pdf->writeHTML('<></>');
//     $html2pdf->pdf->setAuthor('Nicola Asuni');
//     $html2pdf->pdf->setTitle('TCPDF Example 004');
//     $html2pdf->pdf->setSubject('TCPDF Tutorial');
//     $html2pdf->pdf->setKeywords('TCPDF, PDF, example, test, guide');
//     $html2pdf->pdf->setPrintHeader(false);
//     $html2pdf->pdf->setPrintFooter(false);


//     $html2pdf->output('test.pdf');

// } catch (Html2PdfException $e) {
//     $html2pdf->clean();

//     $formatter = new ExceptionFormatter($e);
//     echo $formatter->getHtmlMessage();
// }


// Include the main TCPDF library (search for installation path).
require_once('./vendor/tecnickcom/tcpdf/examples/tcpdf_include.php');
include('./v1-html-form/แบบฟอร์ม_คำสั่ง/index.php');

$content = ob_get_clean();
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor('Nicola Asuni');
$pdf->setTitle('TCPDF Example 002');
$pdf->setSubject('TCPDF Tutorial');
$pdf->setKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(30, 0, 20);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->setFont('THSarabunNew001', 'B', 20);
// $pdf->setFont('THSarabunNew001');
// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);
$pdf->AddPage();

// Set some content to print


// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
