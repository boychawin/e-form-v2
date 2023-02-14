<?php
require_once '../../../vendor/autoload.php';

include('./pdf-form.php');

$content = ob_get_clean();


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
        __DIR__ . '/../../../fonts/thsarabun',
    ]),
    'fontdata' => $fontData + [
        'thsarabun' => [
            'R' => 'THSarabunNew001.ttf',
            //'I' => 'THSarabunNew Italic.ttf',
            'B' => 'THSarabunNewBold001.ttf',
        ],
    ],
    'default_font' => 'thsarabun',
);
$mpdf = new \Mpdf\Mpdf($mpdfConfig);

$mpdf->WriteHTML($html);
$mpdf->Output();

