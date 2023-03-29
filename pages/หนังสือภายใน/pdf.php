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


function MemoHeaderTemplate($government, $at, $subject, $learn, $date)
{

  return <<<EOD
    <table width="100%" border="0">

        <tr>
        <td class="exactly_1" width="8%" colspan="1" rowspan="1">
          <img class="image_logo" src="../../images/image1.png" alt="Logo" />
        </td>
        
        <td class="exactly_1" width="250" colspan="1" rowspan="1"></td>
        <td  style="text-align:left;padding-bottom:-10px;padding-left:-71px;" colspan="3" rowspan="1" valign="bottom">
          <span class="c29pt"> บันทึกข้อความ</span>
        </td>

        </tr>


        <tr>

        <td style="padding-top:18px;" class="exactly_1" colspan="5" rowspan="1">

        <span class="font20bold">ส่วนราชการ</span>&nbsp;&nbsp;
        <span class="font_size16">$government</span>

        </td>
        </tr>
          <tr>
        <td class="exactly_1" colspan="2" rowspan="1"><span class="font20bold">ที่</span>&nbsp;&nbsp;<span class="font_size16">$at</span></td>
      <td class="exactly_1 " colspan="3"  rowspan="1"><span class="font20bold ">วันที่</span>&nbsp;&nbsp;<span class="font_size16">$date</span></td>
        </tr>



      <tr>
          <td   valign="top"  align="left" colspan="1" rowspan="1" ><span  class="font20bold">เรื่อง</span> </td>
          <td valign="bottom" colspan="4" rowspan="1" style="padding-top:5px;"><span class="font_size16">$subject</span> </td>
      </tr>
      

      <tr>
          <td class=""  valign="top"  align="left" colspan="1" rowspan="1"><span class="">เรียน</span> </td>
          <td class="" width="" colspan="4" rowspan="1"> <span > $learn </span> </td>
      </tr>



    </table>

  EOD;
}


function MemoPage($type, $government, $at, $date, $subject, $learn, $description, $rank, $signature, $namesurname, $position, $other)
{
  $header = "";
  $footer = "";
  $css = MemoCss();
  if ($type === 0) {
    $header = MemoHeaderTemplate($government, $at, $subject, $learn, $date);
  }
  if ($type === 1) {
    $footer = MemoFooterTemplate($rank, $signature, $namesurname, $position, $other);
  }

  if ($type === 2) {
    $header = MemoHeaderTemplate($government, $at, $subject, $learn, $date);
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

  $footer
  $css
EOD;
}