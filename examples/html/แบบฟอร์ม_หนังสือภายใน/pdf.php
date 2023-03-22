<?php
require_once '../../../vendor/autoload.php';
include './pdf-form.php';

// $mpdf = new \Mpdf\Mpdf();

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
$request = $_POST;
// print_r($request);
memoPDF($mpdfConfig, $request);



function memoPDF($mpdfConfig, $request)
{

    $mpdf = new \Mpdf\Mpdf($mpdfConfig);

    $description = $request['description2'] ?? [];
    $government = !empty($request['government']) ? $request['government'] : '';
    $subject = !empty($request['subject']) ? $request['subject'] : '';
    $learn = !empty($request['learn']) ? $request['learn'] : '';
    $textfooter = !empty($request['textfooter']) ? $request['textfooter'] : '';
    $date = !empty($request['date']) ? $request['date'] : 'อัตโนมัติ';
    $at = !empty($request['at']) ? $request['at'] : 'อัตโนมัติ';
    $rank = !empty($request['rank']) ? $request['rank'] : '';
    $signature = !empty($request['signature']) ? $request['signature'] : '';
    $namesurname = !empty($request['namesurname']) ? $request['namesurname'] : '';
    $position = !empty($request['position']) ? $request['position'] : '';
    $other = !empty($request['other']) ? $request['other'] : '';

    $data_array = json_decode($description, true);
    if (!empty($description)) {
        $page_count = count($data_array);

        for ($i = 0; $i < $page_count; $i++) {
            $mpdf->AddPage();
            $html = '';


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
                    <td width="33%" style="text-align: right;"> ' . $textfooter[$i] . ' </td>
                </tr>
            </table>';
            $mpdf->SetHTMLFooter($footer);

            if ($i == 0 && (count($data_array) > 1)) {
                $html = MemoPage(0, $government, $at, $date, $subject, $learn, $data_array[$i], $rank, $signature, $namesurname, $position, $other);
            } else if ($i == 0 && count($data_array) == 1) {
                $html = MemoPage(2, $government, $at, $date, $subject, $learn, $data_array[$i], $rank, $signature, $namesurname, $position, $other);
            } else if (count($data_array) == $i + 1) {
                $html = MemoPage(1, $government, $at, $date, $subject, $learn, $data_array[$i], $rank, $signature, $namesurname, $position, $other);
            } else {
                $html = MemoPage(3, $government, $at, $date, $subject, $learn, $data_array[$i], $rank, $signature, $namesurname, $position, $other);
            }
            $mpdf->WriteHTML($html);
        }
    }



    // $data_array = json_decode($description, true);
    // $page_count = count($data_array);

    // for ($i = 0; $i < $page_count; $i++) {
    //     $mpdf->AddPage();
    //     // Do something with each page
    //     echo "Page " . ($i + 1) . ":\n";
        // foreach ($data_array[$i]['data'] as $item) {
        //     echo $item['message'] . "\n";
        // }

    //     $mpdf->WriteHTML($i + 1);
    // }




    if ($request['action'] == 'preview') {
        return $mpdf->Output();
    } else if ($request['action'] == 'respond') {
        $sites = '';
        $random = 'test';
        $date_new = date('Y-m-d');
        $year_new = date('Y');
        $upload_location = './';
        $name_gen_new = "_" . $date_new . "_";
        $full_path = $upload_location . $name_gen_new . '.pdf';
        $mpdf->Output($full_path, 'F');
        return $full_path;
    } else {
        return "Error";
    }

    // $mpdf->Output();

}
