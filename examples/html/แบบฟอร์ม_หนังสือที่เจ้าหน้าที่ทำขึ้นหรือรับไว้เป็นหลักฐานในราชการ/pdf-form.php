


<?php
$data1 = $_POST['name1'];
$data2 = $_POST['name2'];
$data3 = $_POST['name3'];
$data4 = $_POST['name4'];
$data5 = $_POST['name5'];
$data6 = $_POST['name6'];
$data7 = $_POST['name7'];
$data8 = $_POST['name8'];

$namefile = $_POST['namefile'] ?? '../../../images/image31.png';
// print_r($namefile);

$html = <<<EOD


    <table border="0" width="100%">
        <tr>
        <td  colspan="1" rowspan="1"></td>
            <td  colspan="1" rowspan="2" style="text-align:center">
                <p class="c9"><span
                       class="span_image">
                       <img alt="logo"
                            src="../../../images/image32.jpg"
                            class="image_logo" >
                            </span></p>
            </td>
            <td  colspan="1" rowspan="1"></td>
        </tr>
        <tr class="c4">

            <td  width="250px" colspan="1" rowspan="1">
                <p class="c7_text_left"><span class="c3">เลขที่ &nbsp;$data1</span></p>
            </td>
            <td    valign="bottom"  style="text-align:right" width="250px" colspan="1" rowspan="1">
            <p ><span >ส่วนราชการเจ้าของหนังสือ</span></p>
            <p ><span >ส่วนราชการเจ้าของหนังสือ</span></p>
        </td>
     
        </tr>
    </table>

    <p class="setMarginTop2"></p>

    <p class="c23"><span
            class="c3">หนังสือฉบับนี้ให้ไว้เพื่อรับรองว่า
            &nbsp;$data3</span>
    </p>
    <p class="c20"><span
            class="c22">ให้ไว้ ณ วันที่ $data4 </span></p>
    <p class="c5 c16"><span class="c6"></span></p>

    <p class="c16"><span class="c6">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (ลงชื่อ)</span>
    <p class="c16"><span class="c6">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; $data5</span>
    </p>
    <p class="c16"><span class="c6">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            $data6</span>
    </p>
    <p class="c1 c5"><span class="c3"></span></p>
    <p class="c1 c5"><span class="c3"></span></p>
    <p class="c1 c5"><span class="c3"></span></p>
    <p class="c1 c5"><span class="c3"></span></p>
    <p class="c1"><span
            class="c8">(&#3626;&#3656;&#3623;&#3609;&#3609;&#3637;&#3657;&#3651;&#3594;&#3657;&#3626;&#3635;&#3627;&#3619;&#3633;&#3610;&#3648;&#3619;&#3639;&#3656;&#3629;&#3591;&#3607;&#3637;&#3656;&#3626;&#3635;&#3588;&#3633;&#3597;&#3648;&#3607;&#3656;&#3634;&#3609;&#3633;&#3657;&#3609;
            &#3595;&#3638;&#3656;&#3591;&#3629;&#3618;&#3641;&#3656;&#3651;&#3609;&#3604;&#3640;&#3621;&#3614;&#3636;&#3609;&#3636;&#3592;&#3586;&#3629;&#3591;&#3627;&#3633;&#3623;&#3627;&#3609;&#3657;&#3634;&#3626;&#3656;&#3623;&#3609;&#3619;&#3634;&#3594;&#3585;&#3634;&#3619;)</span>
    </p>
    <p class="c1"><span
            style="overflow: hidden; display: inline-block; margin: 0.00px 0.00px; border: 0.00px solid #000000; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px); width: 113.00px; height: 169.00px;">
            <img alt="" src="$namefile" style="width: 113.00px; height: 169.00px; margin-left: 0.00px; margin-top: 0.00px; transform: rotate(0.00rad) translateZ(0px); -webkit-transform: rotate(0.00rad) translateZ(0px);"
                ></span></p>
    <p class="c1 c5"><span class="c3"></span></p>
    <p class="c16 c5"><span class="c3"></span></p>
    <p class="c1 c5"><span class="c3"></span></p>
    <p class="c1 c5"><span class="c3"></span></p>

    <p class="c1"><span class="c6">&nbsp;
            ($data7)</span>
    </p>
    <p class="c1"><span class="c6">&nbsp;
            ($data8)</span></p>
</div>














<style type="text/css">

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
        font-size: 15pt;
        font-family: "thsarabun";
        font-style: italic
    }

    .c23 {
        padding-top: 6pt;
        text-indent: 70.9pt;
        padding-bottom: 0pt;
        line-height: 1.0;
        orphans: 2;
        widows: 2;
        text-align: justify
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

    .c7_text_right {
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

    .c20 {
        padding-top: 0pt;
        padding-bottom: 10pt;
        line-height: 1.0;
        orphans: 2;
        widows: 2;
        text-align: justify
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
    padding-top: 0pt;
    padding-bottom: 0pt;
    margin-bottom: 0pt;
  }
  span{
    padding-top: 0pt;
    padding-bottom: 0pt;
    margin-bottom: 0pt;

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



  p.MsoNormal{mso-style-unhide:no;
   mso-style-qformat:yes;
   mso-style-parent:"";
   margin-top:0cm;
   margin-right:0cm;
   margin-bottom:10.0pt;
   margin-left:0cm;
   line-height:115%;
   mso-pagination:widow-orphan;
   font-size:11.0pt;
   mso-bidi-font-size:14.0pt;
   font-family:"Calibri",sans-serif;
   mso-ascii-font-family:Calibri;
   mso-ascii-theme-font:minor-latin;
   mso-fareast-font-family:Calibri;
   mso-fareast-theme-font:minor-latin;
   mso-hansi-font-family:Calibri;
   mso-hansi-theme-font:minor-latin;
   mso-bidi-font-family:"Cordia New";
   mso-bidi-theme-font:minor-bidi;
   mso-ansi-language:EN-US;}



   .indent8{
    margin-top: 0cm;
    margin-right: 54.4pt;
    margin-bottom: 0cm;
    margin-left: 0cm;
    text-indent: 8cm;
    line-height: normal;
   }


   .indent5{
    margin-top: 16pt;
    margin-right: 0cm;
    margin-bottom: 0cm;
    margin-left: 0cm;
    text-indent: 5cm;
    line-height: normal;
    tab-stops: center 339.05pt;
   }

   .span_image{
    overflow: hidden;
    display: inline-block;
    margin: 0px 0px;
    border: 0px solid #000000;
    transform: rotate(0rad) translateZ(0px);
    -webkit-transform: rotate(0rad) translateZ(0px);
    width: 103.18px;
    height: 113.39px;
  }
  .image_logo{
    width: 103.18px;
    height: 113.39px;
                    margin-left: -0px;
                    margin-top: -0px;
                    transform: rotate(0rad) translateZ(0px);
                    -webkit-transform: rotate(0rad) translateZ(0px);
  }


</style>

EOD;

?>

