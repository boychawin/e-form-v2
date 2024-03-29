<?php 


function MemoCss()
{
  return ' <style type="text/css">

  .thai-istributed-class {
    margin-right: 0cm;
    margin-left: 0cm;
    text-justify: inter-cluster;
    text-align:justify;

  }

  .textindent{
    text-indent: 2.5cm;
  }

  .hidden {
    display: none;
    visibility: hidden;
  }

  html,body{
    font-size: 16pt;
    font-family: "thsarabun";
    line-height: 1.1;
  }

  .center {
    text-align: center;
  }



      table td,
      table th {

          padding: 0
      }


      .exactly_1{
        line-height: 1.1;
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



      .font_size16 {
          font-size: 16pt;
          font-family: "thsarabun";
          font-weight: 400
      }

      .font16bold {
        font-size: 16pt;
        font-family: "thsarabun";
        font-weight: bold;
      }



      .c4 {
          height: 0pt
      }



      .c5 {
          height: 11pt
      }


  .c16 {
      font-size: 16pt;
      font-family: "thsarabun";
      font-weight: 400;
    }
    .c29pt {
      font-size: 29pt;
      font-family: "thsarabun";
      font-weight: bold;
    }

    .font20bold {
      font-size: 20pt;
      font-family: "thsarabun";
      font-weight: bold;
    }
    .font_20 {
      font-size: 20pt;
      font-family: "thsarabun";
      font-weight: 400;
    }

    p{

      padding: 0pt;
      padding-bottom: 0pt;
      margin: 0pt;
    }
    span{
      padding-top: 0pt;
      padding-bottom: 0pt;
      margin-bottom: 0pt;
      margin-top: 0pt;

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
      margin-bottom: 0pt;
    }
    .setMarginTop112pt{
      line-height: 2.3pt;
      font-size: 16pt;
      margin-top: 50pt;
      margin-bottom: 0pt;
    }


    .indent1{
      margin-top: 0cm;
      margin-right: 0cm;
      margin-bottom: 0cm;
      margin-left: 0cm;
      text-indent: 1cm;
      line-height: 1.1;
    }

    .indent7{
      margin-top: 0cm;
      margin-right: 54.4pt;
      margin-bottom: 0cm;
      margin-left: 0cm;
      text-indent: 7cm;
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

      height: 1.5cm;
                      margin-left: -0px;
                      margin-top: -0px;
                      transform: rotate(0rad) translateZ(0px);
                      -webkit-transform: rotate(0rad) translateZ(0px);
    }


  </style>';
}

function MemoFooterTemplate($rank, $signature, $namesurname, $position, $other)
{
  if (!empty($namesurname)) {
    return <<<EOD
    <p class="setMarginTop112pt "></p>
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr >
      <td colspan="1" width="30%"> </td>

      <td valign="top"  align="left"   colspan="2">
        <p ><span class="c16" >$rank</span></p>
      </td>
    </tr>

    <tr >
      <td colspan="1" width="30%"> </td>

      <td valign="top"  align="center"   colspan="2">
        <p><span class="c16">$namesurname</span></p>
        <p><span class="c16">$position</span></p>
        <p><span class="c16">$other</span></p>
      </td>
    </tr>
    </table>
  EOD;
  }

  return '';
}

?>
