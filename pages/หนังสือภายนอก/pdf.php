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
outsideBookPDF($mpdfConfig, $request);


function outsideBookPDF($mpdfConfig, $request)
{

    $mpdf = new \Mpdf\Mpdf($mpdfConfig);

    $description = $request['description2'] ?? [];
    $at = !empty($request['at']) ? $request['at'] : '';
    $location = !empty($request['location']) ? $request['location'] : '';
    $monthyear = !empty($request['monthyear']) ? $request['monthyear'] : '';
    $subject = !empty($request['subject']) ? $request['subject'] : '';
    $learn = !empty($request['learn']) ? $request['learn'] : '';
    $quote = !empty($request['quote']) ? $request['quote'] : '';
    $enclosure = !empty($request['enclosure']) ? $request['enclosure'] : '';

    $owner = !empty($request['owner']) ? $request['owner'] : '';
    $phone = !empty($request['phone']) ? $request['phone'] : '';
    $fax = !empty($request['fax']) ? $request['fax'] : '';

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
                $html = outsideBookPage(0, $at,$location,$monthyear,$subject,$learn,$quote,$enclosure,$owner,$phone,$fax, $data_array[$i], $rank, $signature, $namesurname, $position, $other);
            } else if ($i == 0 && count($data_array) == 1) {
                $html = outsideBookPage(2, $at,$location,$monthyear,$subject,$learn,$quote,$enclosure,$owner,$phone,$fax, $data_array[$i], $rank, $signature, $namesurname, $position, $other);
            } else if (count($data_array) == $i + 1) {
                $html = outsideBookPage(1, $at,$location,$monthyear,$subject,$learn,$quote,$enclosure,$owner,$phone,$fax, $data_array[$i], $rank, $signature, $namesurname, $position, $other);
            } else {
                $html = outsideBookPage(3, $at,$location,$monthyear,$subject,$learn,$quote,$enclosure,$owner,$phone,$fax, $data_array[$i], $rank, $signature, $namesurname, $position, $other);
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


function outsideBookHeaderTemplate($at, $location,$monthyear,$subject,$learn,$quote,$enclosure)
{

    return <<<EOD
   

    <table border="0" width="100%">
            <tr>

                <td  style="text-align:left;padding-top:70px;" width="240px" colspan="1" rowspan="1"></td>
                <td valign="top"  colspan="2" rowspan="2" style="text-align:center"><p class="c9"><span class="span_image"><img alt="logo" src="../../images/image32.jpg" class="image_logo" > </span></p></td>
                <td valign="bottom"  style="text-align:right;padding-bottom:10px;"  width="120px" colspan="1" rowspan="1"></td>
                <td valign="top"  style="text-align:left;padding-top:80px;"  width="120px" colspan="1" rowspan="1"></td>

            </tr>
          
        <tr>
            <td  valign="top" style="text-align:left;padding-top:-9px;"  colspan="2" rowspan="1"><p ><span >ที่ &nbsp;$at</span></p></td>
            <td valign="top"  style="text-align:right;padding-bottom:10px;"  colspan="1" rowspan="1"></td>
            <td valign="top"   style="text-align:left;padding-top:-9px;"   colspan="2" rowspan="1"><p ><span >$location</span></p></td>
        </tr>

        
  
        <tr >
          <td  colspan="2" rowspan="1"></td>
          <td  valign="bottom"  style="padding-left:40px;padding-top:6;" colspan="3" rowspan="1"><p ><span >$monthyear</span></p></td>
        </tr>
    </table>

    <table width="100%" border="0">

                <tr>
                    <td class="" width="8%"  valign="top"  align="left" colspan="1" rowspan="1"><span class="">เรื่อง&nbsp;&nbsp;</span> </td>
                    <td class="" width="" colspan="5" rowspan="1"> <span > $subject </span> </td>
                </tr>
                
                <tr>
                    <td class="" style="margin-top:10px" valign="top"  align="left" colspan="1" rowspan="1"><span class="">เรียน&nbsp;&nbsp;</span> </td>
                    <td class="" width="" colspan="5" rowspan="1"> <span > $learn </span> </td>
                </tr>

                <tr>
                    <td class="" style="margin-top:10px" valign="top"  align="left" colspan="1" rowspan="1"><span class="">อ้างถึง&nbsp;&nbsp;</span> </td>
                    <td class="" width="" colspan="5" rowspan="1"> <span > $quote </span> </td>
                </tr>
        

    </table>

    <table width="100%" border="0">
        <tr>
                <td class="" width="15%"   valign="top"  align="left" colspan="1" rowspan="1"><span class="">สิ่งที่ส่งมาด้วย</span> </td>
                <td class="" width="" colspan="5" rowspan="1"> <span > &nbsp;&nbsp;$enclosure </span> </td>
        </tr>
    </table>

  <p style="margin-top:10px" ></p>

  EOD;
}


function outsideBookFooterTemplate($owner,$phone,$fax)
{
    if (!empty($owner)) {
        return <<<EOD
    
        <p class="setMarginTop16pt"></p>
        <p class="setMarginTop0"><span class="c6">$owner</span> </p>
        <p class="setMarginTop0"><span class="c6">โทร.&nbsp;$phone</span></p>
        <p class="setMarginTop0"><span class="c6">โทรสาร&nbsp;$fax</span></p>
        <p class="setMarginTop16pt"></p>

        
  EOD;
    }

    return '';
}

function outsideBookCss()
{
    return '

    <style type="text/css">
    p {
      padding: 0pt;
      margin:0;
  
    }
  
        table td,
        table th {
            padding: 0
        }
  
        .c9 {
            margin-left: -154pt;
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2;
            text-align: center;
            margin-right: -189.7pt
        }
  
        .c8 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 16pt;
            font-family: "thsarabun";
            font-style: normal;
          }
  
  
  
  
        .c10 {
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 16pt;
            font-family: "thsarabun";
            font-style: normal
        }
  
  
        .c3 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 16pt;
            font-family: "thsarabun";
            font-style: normal
        }
  
        .c6 {
            color: #000000;
            font-weight: 400;
            text-decoration: none;
            vertical-align: baseline;
            font-size: 15pt;
            font-family: "thsarabun";
            font-style: normal
        }
  
  
        .c24 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2;
            text-align: right
        }
  
  
        .c7_text_left {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2;
            text-align: left
        }
  
  
        .c1 {
            padding-top: 0pt;
            padding-bottom: 10pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2;
            text-align: left
        }
  
        .c11 {
            padding-top: 0pt;
            padding-bottom: 0pt;
            line-height: 1.0;
            orphans: 2;
            widows: 2;
            text-align: center
        }
  
  
  
        .c22 {
            font-size: 16pt;
            font-family: "thsarabun";
            font-weight: 400
        }
  
        .c4 {
            height: 0pt
        }
  
  
  
        .c5 {
            height: 11pt
        }
  
  
        html,body{
            font-size: 16pt;
            font-family: "thsarabun";
            line-height: 1.1;
          }
  
        .center {
            text-align: center;
          }
  
    .c16 {
        font-size: 16pt;
        font-family: "thsarabun";
        font-weight: 400;
      }
      p{
        font-size: 16pt;
        font-family: "thsarabun";
        line-height: 1.1;
  
      }
      span{
        font-size: 16pt;
            font-family: "thsarabun";
            line-height: 1.1;
  
      }
      .setMarginTop0{
        margin-top: 0pt;
      }
  
      .setMarginBottom0{
        margin-bottom: 0pt;
        padding-bottom: 0pt;
  
      }
  
      .setMarginTop2{
        line-height: 2.2;
        font-size: 16pt;
        margin-bottom: 0pt;
      }
      .setMarginTop26pt{
        line-height: 2.8pt;
        font-size: 16pt;
        margin-bottom: 0pt;
      }
  
      .setMarginTop16pt{
        line-height: 1.8pt;
        font-size: 16pt;
      
      }
  
      .setMarginBottom6pt{
        line-height: 6pt;
        font-size: 16pt;
      
      }
  
  
      .setMarginTop112pt{
        line-height: 2.3pt;
        font-size: 16pt;
        margin-bottom: 0pt;
      }
  
  
  
  
      p.MsoNormal{mso-style-unhide:no;
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
  
  
      .indent1{
        margin-top: 0cm;
        margin-right: 0cm;
        margin-bottom: 0cm;
        margin-left: 0cm;
        text-indent: 1cm;
        line-height: 1.1;
      }
  
  
      .indent8{
        margin-top: 0cm;
        margin-right: 54.4pt;
        margin-bottom: 0cm;
        margin-left: 0cm;
        text-indent: 8cm;
        line-height: 1.1;
      }
  
  
      .indent5{
        margin-top: 16pt;
        margin-right: 0cm;
        margin-bottom: 0cm;
        margin-left: 0cm;
        text-indent: 5cm;
        line-height: 1.1;
        tab-stops: center 339.05pt;
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
  
      .indent25 {
        text-indent: 2.5cm;
        text-align: justify;
        orphans: 2;
        widows: 2;
  
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
  
  </style>

';
}


function outsideBookPage($type, $at,$location,$monthyear,$subject,$learn,$quote,$enclosure,$owner,$phone,$fax, $description, $rank, $signature, $namesurname, $position, $other)
{
    $header = "";
    $footer = "";
    $outsideBookfooter = "";

    $css = outsideBookCss();
    if ($type === 0) {
        $header = outsideBookHeaderTemplate($at, $location,$monthyear,$subject,$learn,$quote,$enclosure);
    }
    if ($type === 1) {
        $outsideBookfooter = outsideBookFooterTemplate($owner,$phone,$fax);
        $footer = MemoFooterTemplate($rank, $signature, $namesurname, $position, $other);
    }

    if ($type === 2) {
        $header = outsideBookHeaderTemplate($at, $location,$monthyear,$subject,$learn,$quote,$enclosure);
        $outsideBookfooter = outsideBookFooterTemplate($owner,$phone,$fax);
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
  
  <p class="setMarginTop1"></p>
  <p class="indent25 setMarginTop0">
      <span class="c8">$description_html</span>
  </p>
  $footer
  $outsideBookfooter

  $css
EOD;
}
