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
$data12 = isset($_POST['name12']) ? '('.$_POST['name12'].')' : '';
$data13 = $_POST['name13'];
$data14 = $_POST['name14'];
$html = <<<EOD

  <table width="100%" border="0">

  <tr>
  <td class="exactly_1" width="250" colspan="1" rowspan="1">
    <img class="image_logo" src="../../../images/image1.png" alt="Logo" />
  </td>

  <td  style="text-align:left;padding-bottom:-10px;padding-left:-15px;" colspan="2" rowspan="1" valign="bottom">
    <span class="c29pt"> บันทึกข้อความ</span>
  </td>

</tr>


    <tr>

    <td style="padding-top:18px;" class="exactly_1" colspan="3" rowspan="1">
    
    <span class="font20bold">ส่วนราชการ</span>&nbsp;&nbsp;
    <span class="font_size16">$data1&nbsp;&nbsp;โทร.&nbsp;$data2</span>
    
    </td>
  
    </tr>




      <tr>
    <td class="exactly_1" colspan="1"rowspan="1"><span class="font20bold">ที่</span>&nbsp;&nbsp;<span class="font_size16">$data3</span></td>
   <td class="exactly_1" colspan="2" style="text-align:center;padding-left:-125px;" rowspan="1"><span class="font20bold">วันที่</span>&nbsp;&nbsp;<span class="font_size16">$data4</span></td>
    </tr>


    <tr>
    <td class="" colspan="3" rowspan="1"><span class="font20bold">เรื่อง</span>&nbsp;&nbsp; <span class="">$data5</span> </td>
    </tr>

   <tr >
    <td  colspan="3" rowspan="1"><span  class="">เรียน</span>&nbsp;&nbsp; <span class="">$data6</span> </td>
    </tr>


</table>




<p style="margin-top:10px" class=" setMarginTop0 setMarginBottom0"><span class="c8">$data7</span></p>
<p style="margin-top:10px" class=" setMarginTop0 setMarginBottom0"><span class="c8">$data8</span></p>
<p style="margin-top:10px" class=" setMarginTop0 setMarginBottom0"><span class="c8">$data9</span></p>



<p class="setMarginTop112pt "></p>


<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr >
  <td colspan="1" width="50%"> </td>

  <td valign="top"  align="left"   colspan="2">
    <p ><span class="c16" >$data10</span></p>
  </td>
</tr>

<tr >
  <td colspan="1" width="50%"> </td>

  <td valign="top"  align="center"   colspan="2">
    <p><span class="c16">$data12</span></p>
    <p><span class="c16">$data13</span></p>
    <p><span class="c16">$data14</span></p>
  </td>

</tr>
</table>







<style type="text/css">

.thai-istributed-class {
  text-align: justify;
  text-justify: inter-word;
}


html,body{

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

  .indent25 {

    padding-bottom: 0pt;
    text-align:justify;
    orphans: 2;
    widows: 2;

  }



</style>
EOD;



?>

