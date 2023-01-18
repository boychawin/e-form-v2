<?php
require_once '../../../vendor/autoload.php';

// require_once('../../../vendor/tecnickcom/tcpdf/examples/tcpdf_include.php');
include './pdf-form.php';

$content = ob_get_clean();
// create new PDF document
// $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$mpdf = new \Mpdf\Mpdf();

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdfConfig = array(
    'mode' => 'utf-8',
    'format' => 'A4',
    'default_font_size' => 0, 
    'margin_left' => 30,
    'margin_right' => 20,
    'margin_top' => 25,
    'margin_bottom' => 20,
    'margin_header' => 0,
    'margin_footer' => 0,
    'orientation' => 'P',
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/../../../fonts/thsarabun',
    ]),
    'fontdata' => $fontData + [
        'thsarabun' => [
            'R' => 'THSarabunNew001.ttf',
            //'I' => 'THSarabunNew Italic.ttf',
            //'B' => 'THSarabunNew Bold.ttf',
        ],
    ],
    'default_font' => 'thsarabun',
);
$mpdf = new \Mpdf\Mpdf($mpdfConfig);

$mpdf->WriteHTML($html);
$mpdf->Output();

// // set document information
// $pdf->setCreator(PDF_CREATOR);
// $pdf->setAuthor('Nicola Asuni');
// $pdf->setTitle('TCPDF Example 002');
// $pdf->setSubject('TCPDF Tutorial');
// $pdf->setKeywords('TCPDF, PDF, example, test, guide');

// // remove default header/footer
// $pdf->setPrintHeader(false);
// $pdf->setPrintFooter(false);

// // set default monospaced font
// $pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// // set margins
// $pdf->setMargins(30, 0, 20);

// // set auto page breaks
// $pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// // set image scale factor
// $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
// $pdf->setFont('THSarabunNew001', 'B', 20);
// // $pdf->setFont('THSarabunNew001');
// // ---------------------------------------------------------

// // set default font subsetting mode
// $pdf->setFontSubsetting(true);
// $pdf->AddPage();

// // Set some content to print

// // Print text using writeHTMLCell()
// $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// // ---------------------------------------------------------

// // Close and output PDF document
// // This method has several options, check the source code documentation for more information.
// $pdf->Output('example_001.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
