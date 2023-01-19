

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

$html = <<<EOD

<table  border="1" width="100%">


  <tr>
  <td class="" colspan="1" rowspan="1"></td>
    <td class="" colspan="1" rowspan="2" style="text-align:center">
        <span class="span_image" >
          <img
            alt="logo"
            src="../../../images/image.jpg"
            class="image_logo"
        />
      </span>
    </td>

    <td class="" colspan="1" rowspan="1"></td>
  </tr>


  <tr class="c7" >
    <td width="250" class="" colspan="1" rowspan="1" valign="bottom" >
    <p class="c0"><span class="c1">ที่&nbsp;$data1 </span></p>
    </td>
    <td  width="250" class="" colspan="1" rowspan="1">
    <p class="c2"><span class="c5"></span></p>
  </td>
  </tr>


</table>

<p class="MsoNormal" style="margin-top: 6pt">
  <span class="c1"
    >ถึง<span style="mso-spacerun: yes"> </span
    >$data2</span
  ><span class="c0"> </span>
</p>

<p
  class="MsoBodyText3"
  style="text-indent: 70.9pt; line-height: normal; tab-stops: 14.2pt"
>
  <span
    lang="EN-US"
    style="
      font-family: 'thsarabun', sans-serif;
      mso-fareast-font-family: 'Times New Roman';
    "
  >
    &nbsp;
  </span>
</p>

<p
  class="MsoBodyText3"
  style="
    margin-top: 12pt;
    text-indent: 70.9pt;
    line-height: normal;
    tab-stops: 14.2pt;
  "
>
  <span class="c11"
    >ภาคเหตุ
    $data3
  </span>
</p>

<p
  class="MsoBodyText3"
  style="
    margin-top: 6pt;
    text-indent: 70.9pt;
    line-height: normal;
    tab-stops: 14.2pt;
  "
>
  <span class="c11">ภาคความประสงค์</span
  ><span class="c11">
  $data4</span
  ><span class="c11"> </span>
</p>

<p
  class="MsoBodyText3"
  style="
    margin-top: 6pt;
    text-indent: 70.9pt;
    line-height: normal;
    tab-stops: 14.2pt;
  "
>
  <span class="c11"
    >ภาคสรุป
    $data5</span
  ><span class="c11"> </span>
</p>

<p class="c0 c2"><span class="c1"></span></p>
<p class="c0 c2"><span class="c1"></span></p>
<p class="c0 c2"><span class="c1"></span></p>

<p
  class="MsoNormal"
  align="center"
  style="text-align: center; text-indent: 70.9pt"
>
  <span class="c1">สำนักงานปลัดสำนักนายกรัฐมนตรี</span
  ><span class="c1"> </span>
</p>

<p
  class="MsoNormal"
  align="center"
  style="text-align: center; text-indent: 70.9pt"
>
  <span class="c1"
    >($data6)</span
  ><span class="c0"> </span>
</p>
<p class="c0 c2"><span class="c1"></span></p>
<p class="c0 c2"><span class="c1"></span></p>
<p class="c0 c2"><span class="c1"></span></p>
<p class="c0">
  <span class="c1"
    >$data7</span
  >
</p>
<p class="c0">
  <span class="c1"
    >โทร. $data8</span
  >
</p>
<p class="c0">
  <span class="c1"
    >โทรสาร $data9</span
  >
</p>
<p class="c0 c2"><span class="c1"></span></p>


<style>


table td,
table th {
  padding: 0;
}



.c1 {
  color: #000000;
  font-weight: 400;
  text-decoration: none;
  vertical-align: baseline;
  font-size: 16pt;
  font-family: "thsarabun";
  font-style: normal;
}

.c5 {
  color: #000000;
  font-weight: 700;
  text-decoration: none;
  vertical-align: baseline;
  font-size: 16pt;
  font-family: "thsarabun";
  font-style: normal;
}

.c2 {
  padding-top: 0pt;
  padding-bottom: 0pt;
  line-height: 1;
  orphans: 2;
  widows: 2;
  text-align: center;
  height: 11pt;
}
.c0 {
  padding-top: 6pt;
  padding-bottom: 0pt;
  line-height: 1;
  orphans: 2;
  widows: 2;
  text-align: left;
}

.c11 {
  font-size: 16pt;
  font-family: "thsarabun";
  font-weight: 400;
}

.c7 {
  height: 0pt;
}


p {
  margin: 0;
  color: #000000;
  font-size: 11pt;
  font-family: "Calibri";
}


.span_image {
    overflow: hidden;
          display: inline-block;
          margin: 0px 0px;
          border: 0px solid #000000;
          transform: rotate(0rad) translateZ(0px);
          -webkit-transform: rotate(0rad) translateZ(0px);
          width: 102.4px;
          height: 113.27px;
}

.image_logo {

                  height: 113.39px;
                  margin-left: -0px;
                  margin-top: -0px;
                  transform: rotate(0rad) translateZ(0px);
                  -webkit-transform: rotate(0rad) translateZ(0px);
}


</style>
EOD;

?>

