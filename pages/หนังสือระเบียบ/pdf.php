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
    'default_font_size' => 16,
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
    <span class="c16" >ว่าด้วย&nbsp;$at</span>
    </p>
    <p  class="MsoNormal"
    align="center"
    style="margin-bottom: 0cm; text-align: center; line-height: normal" >
    <span class="c16" >พ.ศ.&nbsp;$subject</span>
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
  if (!empty($orderdate)) {
    return <<<EOD


  
  <p  class="MsoNormal indent5 " >
    <span  class="c16"
      >ประกาศ&nbsp;&nbsp;ณ
      &nbsp;&nbsp;วันที่
      &nbsp;&nbsp;$orderdate
  </span>
  </p>
  
  <p style="margin-top:26px" class="setMarginTop26pt"></p>
  
  
  
  
  EOD;
  }

  return '';
}

function OrderCss()
{
  return ' <style type="text/css">
  p {
    padding: 0pt;
    margin:0;
  
  }
  
  .c16 {
    font-size: 16pt;
    font-family: "thsarabun";
    font-weight: 400;
  }
  
  .span_image{
    overflow: hidden;
    display: inline-block;
    margin: 0px 0px;
    border: 0px solid #000000;
    transform: rotate(0rad) translateZ(0px);
    -webkit-transform: rotate(0rad) translateZ(0px);
  }
  .image_logo{
  
    height: 113.38586666666666px;
    margin-left: -0px;
    margin-top: -0px;
    transform: rotate(0rad) translateZ(0px);
    -webkit-transform: rotate(0rad) translateZ(0px);
  
  }
  
  
  p.MsoNormal, li.MsoNormal, div.MsoNormal
   {mso-style-unhide:no;
   mso-style-qformat:yes;
   mso-style-parent:"";
   margin-top:0cm;
   margin-right:0cm;
   margin-bottom:10.0pt;
   margin-left:0cm;
   line-height:115%;
   mso-pagination:widow-orphan;
   font-size:16.0pt;
   mso-bidi-font-size:16.0pt;
   font-family:"thsarabun",sans-serif;
   mso-ascii-font-family:thsarabun;
   mso-ascii-theme-font:minor-latin;
   mso-fareast-font-family:thsarabun;
   mso-fareast-theme-font:minor-latin;
   mso-hansi-font-family:thsarabun;
   mso-hansi-theme-font:minor-latin;
   mso-bidi-font-family:"thsarabun";
   mso-bidi-theme-font:minor-bidi;
   mso-ansi-language:EN-US;}
  
   .center {
    text-align: center;
  }
  
   .indent8{
    margin-top: 0cm;
    margin-right: 54.4pt;
    margin-bottom: 0cm;
    margin-left: 0cm;
    text-indent: 8cm;
    
   }
  
   .indent5{
    margin-top: 16pt;
    margin-right: 0cm;
    margin-bottom: 0cm;
    margin-left: 0cm;
    text-indent: 5cm;
    
    tab-stops: center 339.05pt;
   }
  
   .setMarginTop2{
    line-height: 2.2;
    font-size: 16pt;
    margin-bottom: 0pt;
  }
  
  .setMarginTop26pt{
    line-height: 2.8;
    font-size: 16pt;
  }
  
  
  
  .setMarginTop1{
    line-height: 1.1;
    font-size: 16pt;
    }
    .thai-istributed-class {
        margin-right: 0cm;
        margin-left: 0cm;
        text-justify: inter-cluster;
        text-align:justify;
    
      }

      .textindent{
        text-indent: 2.5cm;
      }
  </style>';
}

function OderPage($type, $order, $at, $since, $subject, $orderdate, $description, $rank, $signature, $namesurname, $position, $other)
{
    $header = "";
    $footer = "";
    $oderfooter = "";

    $css = OrderCss();
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

 $description_html
  $oderfooter
  $footer
  $css
EOD;
}
