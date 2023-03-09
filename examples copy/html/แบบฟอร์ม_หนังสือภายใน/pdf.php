<?php
require_once '../../../vendor/autoload.php';
include './pdf-form.php';

$mpdf = new \Mpdf\Mpdf();

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdfConfig = array(
    'mode' => 'utf-8',
    'format' => 'A4',
    // 'default_font_size' => 16,
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



// $footerNumber = $_POST['description'] ?? null;

// print_r($footerNumber);

// $num_pages = 5;
// // Loop through the number of pages to add
// if(count($footerNumber) > 0){
// for ($i = 0; $i < count($footerNumber); $i++) {
//     // Add a new page
//     $mpdf->AddPage();

//     // Set the header content for the current page
//     $header = '
//     <table width="100%">
//     <tr>
//         <td width="33%"></td>
//         <td width="33%" align="center">-{PAGENO}-</td>
//         <td width="33%" style="text-align: right;"></td>
//     </tr>
//     </table>';
//     $mpdf->SetHTMLHeader($header);

//     // Set the footer content for the current page
//     $footer = '
//     <table width="100%">
//         <tr>
//             <td width="33%"></td>
//             <td width="33%" align="center"></td>
//             <td width="33%" style="text-align: right;"> '.$footerNumber[$i].' </td>
//         </tr>
//     </table>';
//     $mpdf->SetHTMLFooter($footer);

//     // Add some content to the new page
//     $mpdf->WriteHTML('<h1>Page ' . ($i + 1) . '</h1>');
 
// }
// }
$mpdf->WriteHTML($html);

if(empty($footerNumber)){
    $mpdf->Output();
}else{
    $mpdf->Output();
    // print_r($footerNumber);
}

