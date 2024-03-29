<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <title>E-form</title>
  <?php include('../inc/main-head.php'); ?>
  <?php include('../inc/main-header.php'); ?>
  <?php include('../inc/main-footer.php'); ?>
  <?php include('../inc/main-modal.php'); ?>


  <style>
    .c16 {
      font-size: 16pt;
      font-family: "THSarabun";
      font-weight: 400;
    }

    .span_image {
      overflow: hidden;
      display: inline-block;
      margin: 0px 0px;
      border: 0px solid #000000;
      transform: rotate(0rad) translateZ(0px);
      -webkit-transform: rotate(0rad) translateZ(0px);
    }

    .image_logo {

      height: 113.38586666666666px;
      margin-left: -0px;
      margin-top: -0px;
      transform: rotate(0rad) translateZ(0px);
      -webkit-transform: rotate(0rad) translateZ(0px);

    }


    p.MsoNormal,
    li.MsoNormal,
    div.MsoNormal {
      mso-style-unhide: no;
      mso-style-qformat: yes;
      mso-style-parent: "";
      margin-top: 0cm;
      margin-right: 0cm;
      margin-bottom: 10.0pt;
      margin-left: 0cm;
      line-height: 115%;
      mso-pagination: widow-orphan;
      font-size: 16.0pt;
      mso-bidi-font-size: 16.0pt;
      font-family: "THSarabun", sans-serif;
      mso-ascii-font-family: 'THSarabun';
      mso-ascii-theme-font: minor-latin;
      mso-fareast-font-family: 'THSarabun';
      mso-fareast-theme-font: minor-latin;
      mso-hansi-font-family: 'THSarabun';
      mso-hansi-theme-font: minor-latin;
      mso-bidi-font-family: "THSarabun";
      mso-bidi-theme-font: minor-bidi;
      mso-ansi-language: EN-US;
    }




    .indent5 {
      margin-top: 16pt;
      margin-right: 0cm;
      margin-bottom: 0cm;
      margin-left: 0cm;
      text-indent: 5cm;
      line-height: normal;
      tab-stops: center 339.05pt;
    }

    .setMarginTop2 {
      line-height: 2.2;
      font-size: 16pt;
      margin-bottom: 0pt;
    }
  </style>

</head>

<body>
  <?php echo MainModal(); ?>
  <div>
    <div class="m-in " style="padding-top: 0px !important">
      <form name="sent_form" method="post" id="form">

        <?php echo MainHeader(); ?>
        <span id="block_tab_1" style="display: inline">

          <page size="A4" id="page0">
            <div class="memo-form">
              <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                  <td colspan="2"></td>
                  <td colspan="2" style="text-align:center">
                    <span class="span_image">
                      <img src="../../images/image1.jpg" class="image_logo" title="ตราครุฑ" />
                    </span>
                  </td>
                  <td colspan="2"></td>
                </tr>
              </table>

              <p class="mt-2" style="margin-bottom: 0cm; text-align: center; line-height: normal">
                <span class="c16"></span>
                <span class="c16 font-bold">คำสั่ง&nbsp;&nbsp;
                </span>
                <input placeholder="" type="text" class="py-0 border border-slate-300 w-60" name="order" id="order" value="" onblur="checkVal(this)" autocomplete="off" />
              </p>

              <p class="MsoNormal py-2" align="center" style="margin-bottom: 0cm; text-align: center; line-height: normal">
                <span class="c16 font-bold">ที่&nbsp;</span><input placeholder="" type="text" class="py-0  border border-slate-300 " name="at" id="at" value="" onblur="checkVal(this)" autocomplete="off" />
              </p>

              <p class="MsoNormal" align="center" style="margin-bottom: 0cm; text-align: center; line-height: normal">
                <span class="c16 font-bold">เรื่อง&nbsp;&nbsp;

                </span>
                <input placeholder="" type="text" class="py-0 border border-slate-300 w-80" name="subject" id="subject" value="" onblur="checkVal(this)" autocomplete="off" />
              </p>

              <p class="MsoNormal" align="center" style="margin-bottom: 0cm; text-align: center; line-height: normal">
                <span class="c16">---------------------------------------------------------</span>
              </p>


              <span class="memo_description"> </span>
              <div class=" row mt-5">
                <div class="col-lg-12">
                  <a class="ring-1 ring-slate-900/5 space-y-3 hover:bg-sky-500 hover:ring-sky-500" href="javascript:;" onclick="addTopic(1);"><strong>+
                      เพิ่มหัวข้อใหม่</strong></a>
                  <a class="ring-1 ring-slate-900/5 space-y-3 hover:bg-sky-500 hover:ring-sky-500" href="javascript:;" onclick="addParagraph(1);"><strong>+
                      เพิ่มย่อหน้าใหม่</strong></a>
                  <a class="ring-1 ring-slate-900/5 space-y-3 hover:bg-sky-500 hover:ring-sky-500" href="javascript:;" onclick="addNewMessage(1);"><strong>+
                      เพิ่มข้อความใหม่</strong></a>
                </div>
              </div>



              <div id="orderFooter" class="mt-5">
                <p class="MsoNormal" style="
                  margin-right: 0cm;
                  margin-left: 0cm;
                  text-justify: inter-cluster;
                  text-indent: 2.5cm;
                ">
                  <span class="c16">ทั้งนี้&nbsp;&nbsp;ตั้งแต่&nbsp;
                    <input placeholder="" type="text" class="py-0 border border-slate-300 w-80" name="since" id="since" value="" onblur="checkVal(this)" autocomplete="off" />
                  </span>
                </p>

                <p class="setMarginTop2"></p>

                <p class="MsoNormal indent5 ">
                  <span class="c16">สั่ง&nbsp;&nbsp;วันที่&nbsp;&nbsp;
                    <input placeholder="" type="text" class="py-0 border border-slate-300 w-60" name="orderdate" id="orderdate" value="" onblur="checkVal(this)" autocomplete="off" />&nbsp;&nbsp;
                  </span>
                </p>
              </div>

            </div>

            <div class="footer-text">
              <input class="w-full  py-0 border border-slate-300" autocomplete="off" name="textfooter[0]" id="textfooter" onblur="checkVal(this)" style="height: 48px" />
            </div>

          </page>

          <div class=" text-center py-20 " id="addPage">
            <div class="col-lg-12">
              <a href="javascript:;" onclick="addPageOrder();"><strong>+ เพิ่มหน้าใหม่</strong></a>
            </div>
          </div>


          <?php echo MainFooter(); ?>


        </span>

      </form>
    </div>
  </div>
  <!-- <script src="./_.js"></script> -->
  <script src="../utils/global.js"></script>
  <script>
    document.querySelector('form').addEventListener('submit', function(e) {
      e.preventDefault();
      let description = sessionStorage.getItem("description");

      if (!!description) {

        const formData = new FormData(this);
        formData.append("description2", description)

        modal.classList.remove('fadeOut');
        modal.classList.add('fadeIn');
        modal.style.display = 'flex';
        fetchPDF(formData)
      } else {
        alert('กรุณากรอกข้อมูลให้ครบถ้วน')
      }
    });
  </script>
</body>

</html>