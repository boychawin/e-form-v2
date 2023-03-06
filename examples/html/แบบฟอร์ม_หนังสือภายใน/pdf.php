<?php
require_once '../../../vendor/autoload.php';
include('./pdf-form.php');


$footerNumber = $_POST['footerNumber'] ?? [];


$mpdf = new \Mpdf\Mpdf();

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];


$mpdfConfig = array(
    'mode' => 'utf-8',
    'format' => 'A4',
    'default_font_size' => 16,
    'margin_left' => 30,
    'margin_right' => 20,
    'margin_top' => 20,
    'margin_bottom' => 20,
    'margin_header' => 0,
    'margin_footer' => 0,
    // 'orientation' => 'P',
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/../../../fonts/THSarabunIT๙',
    ]),
    'fontdata' => $fontData + [
        'thsarabun' => [
            'R' => 'THSarabunIT๙.ttf', // Regular font
            'B' => 'THSarabunIT๙ Bold.ttf', // Bold font
            'I' => 'THSarabunIT๙ Italic.ttf', // Italic font
            'BI' => 'THSarabunIT๙ BoldItalic.ttf', // Bold-Italic font
        ],
        'TH NiramitIT๙' => [
            'R' => 'THSarabunIT๙.ttf', // Regular font
            'B' => 'THSarabunIT๙ Bold.ttf', // Bold font
            'I' => 'THSarabunIT๙ Italic.ttf', // Italic font
            'BI' => 'THSarabunIT๙ BoldItalic.ttf', // Bold-Italic font
        ],
        'TH SarabunIT๙' => [
            'R' => 'THSarabunIT๙.ttf', // Regular font
            'B' => 'THSarabunIT๙ Bold.ttf', // Bold font
            'I' => 'THSarabunIT๙ Italic.ttf', // Italic font
            'BI' => 'THSarabunIT๙ BoldItalic.ttf', // Bold-Italic font
        ],
    ],
    'default_font' => 'thsarabun',

);
$mpdf = new \Mpdf\Mpdf($mpdfConfig);



// $mpdf->SetHTMLHeader('
// <table width="100%">
// <tr>
//     <td width="33%"></td>
//     <td width="33%" align="center">-{PAGENO}-</td>
//     <td width="33%" style="text-align: right;"></td>
// </tr>
// </table>', '');



// $mpdf->SetHTMLFooter('
// <table width="100%">
//     <tr>
//         <td width="33%"></td>
//         <td width="33%" align="center"></td>
//         <td width="33%" style="text-align: right;">2 </td>
//     </tr>
// </table>', '');





 


$mpdf->WriteHTML($html);


$mpdf->Output();
