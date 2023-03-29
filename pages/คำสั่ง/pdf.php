<?php
require_once '../../vendor/autoload.php';
include '../inc/global.function.php';

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
    'margin_top' => 15,
    'margin_bottom' => 20,
    'margin_header' => 0,
    'margin_footer' => 0,
    // 'orientation' => 'P',
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/../../fonts/THSarabunIT๙',
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
OderPDF($mpdfConfig, $request);


function OderPDF($mpdfConfig, $request)
{

    $mpdf = new \Mpdf\Mpdf($mpdfConfig);

    $description = $request['description2'] ?? [];
    $order = !empty($request['order']) ? $request['order'] : '';
    $subject = !empty($request['subject']) ? $request['subject'] : '';
    $at = !empty($request['at']) ? $request['at'] : '';
    $since = !empty($request['since']) ? $request['since'] : '';
    $orderdate = !empty($request['orderdate']) ? $request['orderdate'] : '';

    $textfooter = !empty($request['textfooter']) ? $request['textfooter'] : '';

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
                $html = OderPage(0, $order, $at, $since, $subject, $orderdate, $data_array[$i], $rank, $signature, $namesurname, $position, $other);
            } else if ($i == 0 && count($data_array) == 1) {
                $html = OderPage(2, $order, $at, $since, $subject, $orderdate, $data_array[$i], $rank, $signature, $namesurname, $position, $other);
            } else if (count($data_array) == $i + 1) {
                $html = OderPage(1, $order, $at, $since, $subject, $orderdate, $data_array[$i], $rank, $signature, $namesurname, $position, $other);
            } else {
                $html = OderPage(3, $order, $at, $since, $subject, $orderdate, $data_array[$i], $rank, $signature, $namesurname, $position, $other);
            }
            $mpdf->WriteHTML($html);
        }
    }

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
}


function OderHeaderTemplate($order, $at, $subject)
{

    return <<<EOD
    <table border="0" cellspacing="0" cellpadding="0" width="100%" >
    <tr >
        <td colspan="2" ></td>
        <td colspan="2" style="text-align:center">
        <span class="span_image">
            <img  src="../../images/image1.jpg" class="image_logo" title="ตราครุฑ" />
        </span>
    </td>
    <td colspan="2" ></td>
    </tr>
    </table>
    <p class="setMarginTop2" style="margin-top:24px;margin-bottom: 0cm; text-align: center; line-height: normal">
    <span class="c16" ></span>
    <span class="c16" >$order</span>
    </p>
    <p  class="MsoNormal"
    align="center"
    style="margin-bottom: 0cm; text-align: center; line-height: normal" >
    <span class="c16" >ที่&nbsp;$at</span>
    </p>
    <p  class="MsoNormal"
    align="center"
    style="margin-bottom: 0cm; text-align: center; line-height: normal" >
    <span class="c16" >เรื่อง&nbsp;$subject</span>
    </p>
    <p
    class="MsoNormal"
    align="center"
    style="margin-bottom: 0cm; text-align: center; line-height: normal"
    >
    <span class="c16" >---------------------------------------------------------</span>
    </p>
    <p style="margin-top:16px" ></p>

  EOD;
}


function OderFooterTemplate($since, $orderdate)
{
  if (!empty($since)) {
    return <<<EOD


    <p
    class="MsoNormal"
    style="
    margin-top: 6pt;
    margin-right: 0cm;
    
    margin-left: 0cm;
    text-justify: inter-cluster;
    text-indent: 2.5cm;
    
    "
  >
    <span  class="c16" >ทั้งนี้&nbsp;ตั้งแต่&nbsp;$since</span>
  </p>
  
  
  
  <p style="margin-top:26px" ></p>
  
  <p  class="MsoNormal indent5 " >
    <span  class="c16"
      >สั่ง&nbsp;&nbsp;ณ
      &nbsp;&nbsp;วันที่
      &nbsp;&nbsp;$orderdate
  </span>
  </p>
  
  <p style="margin-top:26px" class="setMarginTop26pt"></p>
  
  
  
  
  EOD;
  }

  return '';
}



function OderPage($type, $order, $at, $since, $subject, $orderdate, $description, $rank, $signature, $namesurname, $position, $other)
{
    $header = "";
    $footer = "";
    $oderfooter = "";

    $css = MemoCss();
    if ($type === 0) {
        $header = OderHeaderTemplate($order, $at, $subject);
    }
    if ($type === 1) {
        $oderfooter = OderFooterTemplate($since, $orderdate);
        $footer = MemoFooterTemplate($rank, $signature, $namesurname, $position, $other);
    }

    if ($type === 2) {
        $header = OderHeaderTemplate($order, $at, $subject);
        $oderfooter = OderFooterTemplate($since, $orderdate);
        $footer = MemoFooterTemplate($rank, $signature, $namesurname, $position, $other);
    }


    $description_html = "";



    foreach ($description['data'] as $item) {
        if ($item['type'] == "topic") {
            $description_html .= '<p class="thai-istributed-class textindent"  ><b>' . ($item['message']) . '</b> </p>';
        } else if ($item['type'] == "paragraph") {
            $description_html .= '<p class="thai-istributed-class textindent"  style="margin-bottom:10px " >' . ($item['message']) . ' </p>';
        } else {
            $description_html .= '<p class="thai-istributed-class"   >' . ($item['message']) . ' </p>';
        }
    }



    return <<<EOD
  $header

  <p style="margin-top:10px " class=" setMarginTop0 setMarginBottom0"><span class="MsoNormal thai-istributed-class">$description_html</span></p>
  $oderfooter
  $footer
  $css
EOD;
}
