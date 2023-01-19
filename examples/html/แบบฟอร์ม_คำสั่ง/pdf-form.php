

<?php
$data1 = $_POST['name1'];
$data2 = $_POST['name2'];
$data3 = $_POST['name3'];
$data4 = $_POST['name4'];
$data5 = $_POST['name5'];
$data6 = $_POST['name6'];
$data7 = $_POST['name7'];
$data8 = $_POST['name8'];
$html = <<<EOD


<div  style="margin-top: 1pt;"></div>

<table
  border="0"
  cellspacing="0"
  cellpadding="0"
width="100%"
>
  <tr >
    <td colspan="2" ></td>
    <td colspan="2" style="text-align:center">
      <span class="span_image" style="width="50px"">
          <img  src="../../../images/image1.jpg" class="image_logo" title="ตราครุฑ" />
    </p>
  </td>
  <td colspan="2" ></td>
  </tr>

</table>



<p  style="margin-bottom: 0cm; text-align: center; line-height: normal">
<span class="c16" ></span>
  <span class="c16" >คำสั่งสำนักงานสาธารณสุขอำเภอดำเนินสะดวก</span>
</p>



<p  class="MsoNormal"
align="center"
style="margin-bottom: 0cm; text-align: center; line-height: normal" >
<span class="c16" >ที่ $data1</span>
</p>


<p  class="MsoNormal"
align="center"
style="margin-bottom: 0cm; text-align: center; line-height: normal" >
<span class="c16" >เรื่อง  $data2</span>
</p>

<p
  class="MsoNormal"
  align="center"
  style="margin-bottom: 0cm; text-align: center; line-height: normal"
>
  <span class="c16" >---------------------------------------------------------</span>
</p>

<p
  class="MsoNormal"
  style="
    margin-top: 16pt;
    margin-right: 0cm;
    margin-bottom: 0cm;
    margin-left: 0cm;
    text-align: justify;
    text-justify: inter-cluster;
    text-indent: 2.5cm;
    line-height: normal;
    tab-stops: 0cm;
  " >
  <span  class="c16" > $data3 </span>
</p>

<p
  class="MsoNormal"
  style="
    margin-top: 0pt;
    margin-right: 0cm;
    margin-bottom: 0cm;
    margin-left: 0cm;
    text-align: justify;
    text-justify: inter-cluster;
    text-indent: 2.5cm;
    line-height: normal;
  "
>
  <span  class="c16" >$data4</span>
</p>

<p
  class="MsoNormal"
  style="
  margin-top: 6pt;
  margin-right: 0cm;
  margin-bottom: 0cm;
  margin-left: 0cm;
  text-align: justify;
  text-justify: inter-cluster;
  text-indent: 2.5cm;
  line-height: normal;
  "
>
  <span  class="c16" >ทั้งนี้&nbsp;&nbsp;ตั้งแต่&nbsp;$data5</span>
</p>

<p
  class="MsoNormal indent5"
>
  <span  class="c16"
    >สั่ง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ณ
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;$data6
</span>
</p>

<p class="c16"></p>
<p class="c16"></p>

<p class="MsoNormal indent8" ><span  class="c16">ยศ&nbsp;$data7</span></p>
<p class="MsoNormal indent8"><span  class="c16">&nbsp;&nbsp;&nbsp;($data7)</span></p>
<p class="MsoNormal indent8" > <span  class="c16">&nbsp;&nbsp;&nbsp;&nbsp;($data8)</span></p>




<style>

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
  width: 103.18px;
  height: 113.39px;
}
.image_logo{

  height: 113.39px;
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
</style>

EOD;

?>

