

<?php
$data0 = $_POST['name0'];
$data1 = $_POST['name1'];
$data2 = $_POST['name2'];
$data3 = $_POST['name3'];
$data4 = $_POST['name4'];
$data5 = $_POST['name5'];
$data6 = $_POST['name6'];

$data8 = $_POST['name8'];
$data9 = $_POST['name9'] ?? '';
$data10 = isset($_POST['name10']) ? '('.$_POST['name10'].')' : '';
$data11 = $_POST['name11'];
$data12 = $_POST['name12'];

$html = <<<EOD


$data3



<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr >
  <td colspan="1" width="50%"> </td>

  <td valign="top"  align="left"   colspan="2">
    <p ><span class="c16" >$data8</span></p>
  </td>
</tr>

<tr >
  <td colspan="1" width="50%"> </td>

  <td valign="top"  align="center"   colspan="2">
    <p><span class="c16">$data10</span></p>
    <p><span class="c16">$data11</span></p>
    <p><span class="c16">$data12</span></p>
  </td>

</tr>
</table>




<style>
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


</style>

EOD;

?>

