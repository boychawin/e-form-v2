

<?php 
$data1 = $_POST['name1'];
$data2 = $_POST['name2'];
$data3 = $_POST['name3'];
$data4 = $_POST['name4'];
$data5 = $_POST['name5'];
$data6 = $_POST['name6'];
$data7 = $_POST['name7'];
$data8 = $_POST['name8'];
$data9 = $_POST['name9'];

$data10 = $_POST['name10'];
$data11 = $_POST['name11'];
$data12 = $_POST['name12'];
$data13 = $_POST['name13'];
$data14= $_POST['name14'];
$data15 = $_POST['name15'];
$data16 = $_POST['name16'];



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
  <tr >
        <td  width="250px" colspan="1" rowspan="1">
            <p class="c7_text_left"><span class="c3">ที่ &nbsp;$data1</span></p>
        </td>
        <td  valign="bottom"  style="text-align:right" width="250px" colspan="1" rowspan="1">
        <p ><span >ส่วนราชการเจ้าของหนังสือ</span></p>
        <p ><span >ที่ตั้ง และรหัสไปรษณีย์</span></p>
        <p class="setMarginTop16pt"></p>
    </td>

  </tr>

<tr >
<td  colspan="1" rowspan="1"></td>

<td  valign="bottom"  style="padding-left:90px;" colspan="2" rowspan="1">
<p ><span >เดือน&nbsp;ปี</span></p>
</td>
</tr>
</table>

  <p class="setMarginTop16pt ">เรื่อง&nbsp;&nbsp;$data4</p>
  <p class="setMarginTop16pt ">เรียน&nbsp;&nbsp;$data5</p>
  <p class="setMarginTop16pt ">อ้างถึง&nbsp;&nbsp;$data6</p>
  <p class="setMarginTop16pt setMarginBottom0">สิ่งที่ส่งมาด้วย&nbsp;&nbsp;$data7</p>


<p class="setMarginTop16pt "></p>
<p class="indent25 setMarginBottom0"><span class="c8">ภาคเหตุ&nbsp;$data8</span></p>
<p class="setMarginTop16pt "></p>
<p class="indent25 setMarginTop0 setMarginBottom0"><span class="c8">ภาคความประสงค์&nbsp;$data9</span></p>
<p class="setMarginTop16pt "></p>
<p class="indent25 setMarginTop0 setMarginBottom0"><span class="c8">ภาคสรุป&nbsp;$data10</span></p>



<p class="setMarginTop112pt "></p>
<p class="MsoNormal indent8"><span  class="c16">คำลงท้าย</span></p>
<p class="setMarginTop26pt "></p>
<p class="MsoNormal indent8" ><span  class="c16">ยศ&nbsp;$data5</span></p>
<p class="MsoNormal indent8"><span  class="c16">&nbsp;&nbsp;&nbsp;($data6)</span></p>
<p class="MsoNormal indent8" > <span  class="c16">&nbsp;&nbsp;&nbsp;&nbsp;($data7)</span></p>



<p class="setMarginTop16pt"></p>
    <p class="setMarginTop0"><span class="c6">$data13</span> </p>
    <p class="setMarginTop0"><span class="c6">โทร.&nbsp;$data14</span></p>
    <p class="setMarginTop0"><span class="c6">โทรสาร&nbsp;$data14</span></p>
    <p class="setMarginTop0"><span class="c6">โทร.&nbsp;$data14</span></p>
<p class="setMarginTop16pt"></p>



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
    padding-top: 0pt;
    padding-bottom: 0pt;
    margin-bottom: 0pt;
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
    line-height: normal;
   }


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

  .indent25 {
    text-indent: 2.5cm;
    padding-bottom: 0pt;
    
    orphans: 2;
    widows: 2;

  }



</style>
EOD;



?>

