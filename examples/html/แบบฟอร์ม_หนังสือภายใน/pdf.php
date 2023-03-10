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



$description = $_POST['description'] ?? [];
$government =  !empty($_POST['government'])  ? $_POST['government'] : '';
$subject =  !empty($_POST['subject'])  ? $_POST['subject'] : '';
$learn =  !empty($_POST['learn'])  ? $_POST['learn'] : '';
$textfooter =  !empty($_POST['textfooter'])  ? $_POST['textfooter'] : '';

$date =  !empty($_POST['date'])  ? $_POST['date'] : 'อัตโนมัติ';
$at =  !empty($_POST['at'])  ? $_POST['at'] : 'อัตโนมัติ';

$rank =  !empty($_POST['rank'])  ? $_POST['rank'] : '';
$signature =  !empty($_POST['signature'])  ? $_POST['signature'] : '';
$namesurname =  !empty($_POST['namesurname'])  ? $_POST['namesurname'] : '';
$position =  !empty($_POST['position'])  ? $_POST['position'] : '';
$other =  !empty($_POST['other'])  ? $_POST['other'] : '';


if(!empty($description)){
    for ($i = 0; $i < count($description); $i++) {
        $mpdf->AddPage();    
    
        $header = '
        <table width="100%">
        <tr>
            <td width="33%"></td>
            <td width="33%" align="center">-{PAGENO}-</td>
            <td width="33%" style="text-align: right;"></td>
        </tr>
        </table>';
        $mpdf->SetHTMLHeader($header);
    
        $footer = '
        <table width="100%">
            <tr>
                <td width="33%"></td>
                <td width="33%" align="center"></td>
                <td width="33%" style="text-align: right;"> '.$textfooter[$i].' </td>
            </tr>
        </table>';
        $mpdf->SetHTMLFooter($footer);

        if($i == 0){
            $html = MemoPage(0,$government,$at,$date,$subject,$learn,$description[$i],'','','','');
            $mpdf->WriteHTML($html);
        }else{
            $html = MemoPage(1,$government,$at,$date,$subject,$learn,$description[$i],$rank,$namesurname,$position,$other);
            $mpdf->WriteHTML($html);
        }

    }
}






$mpdf->Output();

