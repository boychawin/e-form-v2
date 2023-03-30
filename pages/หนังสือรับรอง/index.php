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

    table td,
    table th {
      padding: 0
    }

    .c1 {
      padding-top: 0pt;
      padding-bottom: 10pt;
      line-height: 1.0;
      orphans: 2;
      widows: 2;
      text-align: left
    }

    html,
    body {
      font-size: 16pt;
      font-family: "THSarabun";
      line-height: 1.1;
    }

    .center {
      text-align: center;
    }

    .c16 {
      font-size: 16pt;
      font-family: "THSarabun";
      font-weight: 400;
    }

    p {
      padding-top: 0pt;
      padding-bottom: 0pt;
      margin-bottom: 0pt;
    }

    span {
      padding-top: 0pt;
      padding-bottom: 0pt;
      margin-bottom: 0pt;
      margin-top: 0pt;

    }

    .setMarginTop1 {
      line-height: 1.1;
      font-size: 16pt;

    }


    .setMarginTop2 {
      line-height: 2.2;
      font-size: 16pt;
      margin-bottom: 0pt;
    }

    .setMarginTop26pt {
      line-height: 2.8pt;
      font-size: 16pt;
      margin-bottom: 0pt;
    }


    p.MsoNormal {
      margin-top: 0cm;
      margin-right: 0cm;
      margin-bottom: 10.0pt;
      margin-left: 0cm;
      line-height: 115%;
      font-size: 16.0pt;
      font-family: "THSarabun", sans-serif;

    }


    .indent5 {
      margin-top: 16pt;
      margin-right: 0cm;
      margin-bottom: 0cm;
      margin-left: 0cm;
      text-indent: 5cm;
      line-height: 1.1;
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



              <table border="0" width="100%">
                <tr>

                  <td style="text-align:left;padding-top:70px;" width="250px" colspan="1" rowspan="1">
                    <p><span>เลขที่ &nbsp;</span>
                    <input placeholder="" type="text" class="py-0 border border-slate-300 " name="number" id="number" value="" onblur="checkVal(this)" autocomplete="off" />
                  </p>
                  </td>
                  <td colspan="2" rowspan="1" style="text-align:center">
                    <p><span class="span_image">
                        <img alt="logo" src="../../images/image32.jpg" class="image_logo"> </span></p>
                  </td>
                  <td valign="bottom" style="text-align:right;padding-bottom:10px;" width="125px" colspan="1" rowspan="1">
                  </td>
                  <td valign="bottom" width="125px" colspan="1" rowspan="1">
                  <textarea placeholder="" type="text" class="py-0 border border-slate-300 w-20" name="address" id="address" value="" onblur="checkVal(this)" autocomplete="off" ></textarea>
                  </td>
                </tr>

                <tr>
                  <td colspan="4" rowspan="1">
                  </td>
                  <td colspan="1" style="text-align:left;padding-top:-10px" rowspan="1">
                    <span>
                      <!-- <input required name="name3" placeholder="ที่ตั้ง "> -->
                    </span>
                  </td>
                </tr>
              </table>



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
                <p class="setMarginTop2"></p>
                <p class="MsoNormal indent5 ">
                  <span class="c16">ให้ไว้&nbsp;&nbsp;วันที่&nbsp;&nbsp;
                  <input placeholder="วันที่ เดือน ปี" type="text" class="py-0 border border-slate-300 " name="certificatedate" id="certificatedate" value="" onblur="checkVal(this)" autocomplete="off" />&nbsp;&nbsp;
                  </span>
                </p>
                <p class="setMarginTop26pt"></p>
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
  <script src="./_.js"></script>
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