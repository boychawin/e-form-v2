

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

$html = <<<EOD
<>


  <body class="c4 doc-content">
    
  <div  style="margin-top: 1pt;"></div>




  <table width="100%" border="0">
  <tr class="c26">
    <td class="" colspan="1" rowspan="1">
    <p class="c2">
    <img width="42" height="43" src="../../../images/image1.png" alt="krut_s"/>
    </p>
    </td>

    <td class="c29pt" colspan="1" rowspan="1" valign="center" >
    <b>บันทึกข้อความ</b>
    </td>

    
    <td class="" colspan="1" rowspan="1">
      <p class="c2"><span class="c5"></span></p>
    </td>

  </tr>
</table>


  






    <p class="c0"><span class="c1">ส่วนราชการ&nbsp; $data1 โทร. $data2</span></p>

    <p class="c0"><span class="c1">ที่&nbsp; $data3 </span>
    <span class="c1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;วันที่ &nbsp; $data4</span><span class="c0">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>
    </p>


    <p class="c0"><span class="c1">เรื่อง&nbsp; $data5 </span></p>
    <p class="c0"><span class="c1">เรียน&nbsp; $data6</span></p>


    <p class="c12"><span class="c1 ">ภาคเหตุ&nbsp;$data7</span></p>
    <p class="c12"><span class="c1">ภาคความประสงค์&nbsp;$data8</span></p>
    <p class="c12"><span class="c1">ภาคสรุป&nbsp;$data9</span></p>


    <p class="c2"><span class="c1"></span></p>
    <p class="c2"><span class="c1"></span></p>
    <p class="c2"><span class="c1"></span></p>
    <p class="c2"><span class="c1"></span></p>
    <p class="c2"><span class="c1"></span></p>
    <p class="c6">
        <span class="c1"
        >($data10)</span
        >
        </p>
        <p class="c6">
        <span class="c1"
        >ตำแหน่ง $data11</span
        >
    </p>


  </body>
</>

<style type="text/css">
@import url("https://themes.googleusercontent.com/fonts/css?kit=jzvs0bNm7gEwY0gW5BeKeVU41WY7kekJRfc-lNa4V-8");

ol {
  margin: 0;
  padding: 0;
}

table td,
table th {
  padding: 0;
}

.c0 {
  padding-top: 6pt;
  padding-bottom: 0pt;
  line-height: 1;
  orphans: 2;
  widows: 2;
  text-align: left;
}

.c2 {
  padding-top: 0pt;
  padding-bottom: 0pt;
  line-height: 1;
  orphans: 2;
  widows: 2;
  text-align: left;
  left: 0;

}

.c6 {
  padding-top: 0pt;
  padding-bottom: 0pt;
  line-height: 1;
  orphans: 2;
  widows: 2;
  text-align: center;
}

.c7 {
  color: #ff0000;
  text-decoration: none;
  vertical-align: baseline;
  font-style: normal;
}

.c4 {
  background-color: #ffffff;
  max-width: 453.5pt;
  padding: 51pt 56.7pt 42.5pt 85pt;
}

.c5 {
  font-size: 16pt;
  font-family: "Sarabun";
  font-weight: 400;
}

.c1 {
  font-size: 16pt;
  font-family: "Sarabun";
  font-weight: 700;
}

.c3 {
  height: 12pt;
}

.title {
  padding-top: 24pt;
  color: #000000;
  font-weight: 700;
  font-size: 36pt;
  padding-bottom: 6pt;
  font-family: "Times New Roman";
  line-height: 1;
  page-break-after: avoid;
  orphans: 2;
  widows: 2;
  text-align: left;
}

.subtitle {
  padding-top: 18pt;
  color: #666666;
  font-size: 24pt;
  padding-bottom: 4pt;
  font-family: "Georgia";
  line-height: 1;
  page-break-after: avoid;
  font-style: italic;
  orphans: 2;
  widows: 2;
  text-align: left;
}

li {
  color: #000000;
  font-size: 12pt;
  font-family: "Times New Roman";
}

p {
  margin: 0;
  color: #000000;
  font-size: 12pt;
  font-family: "Times New Roman";
}

h1 {
  padding-top: 24pt;
  color: #000000;
  font-weight: 700;
  font-size: 24pt;
  padding-bottom: 6pt;
  font-family: "Times New Roman";
  line-height: 1;
  page-break-after: avoid;
  orphans: 2;
  widows: 2;
  text-align: left;
}

h2 {
  padding-top: 18pt;
  color: #000000;
  font-weight: 700;
  font-size: 18pt;
  padding-bottom: 4pt;
  font-family: "Times New Roman";
  line-height: 1;
  page-break-after: avoid;
  orphans: 2;
  widows: 2;
  text-align: left;
}

h3 {
  padding-top: 14pt;
  color: #000000;
  font-weight: 700;
  font-size: 14pt;
  padding-bottom: 4pt;
  font-family: "Times New Roman";
  line-height: 1;
  page-break-after: avoid;
  orphans: 2;
  widows: 2;
  text-align: left;
}

h4 {
  padding-top: 12pt;
  color: #000000;
  font-weight: 700;
  font-size: 12pt;
  padding-bottom: 2pt;
  font-family: "Times New Roman";
  line-height: 1;
  page-break-after: avoid;
  orphans: 2;
  widows: 2;
  text-align: left;
}

h5 {
  padding-top: 11pt;
  color: #000000;
  font-weight: 700;
  font-size: 11pt;
  padding-bottom: 2pt;
  font-family: "Times New Roman";
  line-height: 1;
  page-break-after: avoid;
  orphans: 2;
  widows: 2;
  text-align: left;
}

h6 {
  padding-top: 10pt;
  color: #000000;
  font-weight: 700;
  font-size: 10pt;
  padding-bottom: 2pt;
  font-family: "Times New Roman";
  line-height: 1;
  page-break-after: avoid;
  orphans: 2;
  widows: 2;
  text-align: left;
}

.c29pt {
  font-size: 29pt;
  font-family: "Sarabun";
  font-weight: 700;

}


  .c12 {
  padding-top: 6pt;
  text-indent: 70.9pt;
  padding-bottom: 0pt;
  line-height: 1;
  orphans: 2;
  widows: 2;
  text-align: justify;
  }
</style>

EOD;



?>

