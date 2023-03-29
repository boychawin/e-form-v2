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
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr>
                                        <td align="left" valign="bottom">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="30%" align="left" valign="bottom">
                                                            <img class="imagelogo" src="../../images/memo.png" />
                                                        </td>
                                                        <td width="40%" align="left" valign="bottom">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center" valign="bottom">
                                                                            <div class="text-29pt">
                                                                                บันทึกข้อความ
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                        <td width="30%" align="center" valign="bottom">
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="left" valign="top">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                    <tr>
                                                        <td align="left" valign="top" class="p-8">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="left" valign="bottom">
                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td width="15%" align="left" valign="bottom">
                                                                                            <div class="letter-head-memo">
                                                                                                ส่วนราชการ
                                                                                            </div>
                                                                                        </td>
                                                                                        <td width="85%" align="left" valign="bottom" class="memo-border-bottom">
                                                                                            <input type="text" class="w-full  py-0 border border-slate-300" name="government" id="government" value="" onblur="checkVal(this)" autocomplete="off" />
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" valign="top" class="p-8">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="left" valign="bottom">
                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td width="2%" align="left" valign="bottom">
                                                                                            <div class="letter-head-memo">
                                                                                                ที่
                                                                                            </div>
                                                                                        </td>
                                                                                        <td width="47%" align="center" valign="bottom" class="memo-border-bottom">
                                                                                            <input type="text" class="w-full  py-0 border border-slate-300" name="at" id="at" value="" onblur="checkVal(this)" autocomplete="off" />
                                                                                        </td>
                                                                                        <td width="6%" align="center" valign="bottom">
                                                                                            <div class="letter-head-memo">
                                                                                                วันที่
                                                                                            </div>
                                                                                        </td>
                                                                                        <td width="45%" align="center" valign="bottom" class="memo-border-bottom" style="padding-left: 20px">
                                                                                            <input type="text" class="w-full  py-0 border border-slate-300" name="date" id="date" value="" onblur="checkVal(this)" autocomplete="off" />
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" valign="top" class="p-8">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="left" valign="bottom">
                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td width="8%" align="left" valign="bottom" class="letter-head-memo">
                                                                                            เรื่อง
                                                                                        </td>
                                                                                        <td width="92%" align="left" valign="bottom" class="memo-border-bottom">
                                                                                            <input class="w-full  py-0 border border-slate-300" type="text" name="subject" value="" id="subject" autocomplete="off" onblur="checkVal(this)" />
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" valign="top" class="p-8">
                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="left" valign="bottom">
                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td width="8%" align="left" valign="bottom" class="letter-head-memo" style="font-size: 16pt">
                                                                                            เรียน
                                                                                        </td>
                                                                                        <td width="92%" align="left" valign="bottom" class="memo-border-bottom" style="border: none">
                                                                                            <input class="w-full  py-0 border border-slate-300" type="text" onblur="checkVal(this)" name="learn" id="learn" value="" autocomplete="off" />
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
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
                        </div>

                        <div class="footer-text">
                            <input class="w-full  py-0 border border-slate-300" autocomplete="off" name="textfooter[0]" id="textfooter" onblur="checkVal(this)" style="height: 48px" />
                        </div>

                    </page>
                    <div class=" text-center py-20 " id="addPage">
                        <div class="col-lg-12">
                            <a href="javascript:;" onclick="addPage();"><strong>+ เพิ่มหน้าใหม่</strong></a>
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
        showDataById();


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



        function showDataById() {
            let government = sessionStorage.getItem("government");
            let subject = sessionStorage.getItem("subject");
            let learn = sessionStorage.getItem("learn");

            $("#government").val(government);
            $("#subject").val(subject);
            $("#learn").val(learn);

            checksessionStorage(1);

        }
    </script>
</body>

</html>