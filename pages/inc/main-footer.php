<?php 

function MainFooter(){
    return '<div class=" text-center py-20 " id="addPage">
    <div class="col-lg-12">
        <a href="javascript:;" onclick="addPage();"><strong>+ เพิ่มหน้าใหม่</strong></a>
    </div>
</div>

<div class=" text-center bg-white w-full   py-5" style="min-width:794px">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <td colspan="1" width="50%"> </td>
            <td valign="top" style="text-align:left;" colspan="2">
                <p><span class="c16"><input type="text" class="w-full  py-2 border border-slate-300 text-center" name="rank" placeholder="ยศ"></span>
                </p>
            </td>
            <td valign="top" style="text-align:left;" colspan="1" width="44%">
                <p>
                    <span class="c16"><input class="  py-2 border border-slate-300 text-center" type="text" name="signature" id="signature" value="" placeholder="ลายเซ็นต์"></span>
                <p><span class="c16"><input class="  py-2 border border-slate-300 text-center" type="text" name="namesurname" id="namesurname" placeholder="ชื่อ-นามสกุล"></span></p>
                <p><span class="c16"><input class="  py-2 border border-slate-300 text-center" type="text" name="position" id="position" placeholder="ตำแหน่ง"></span>
                </p>
                <p><span class="c16"><input class="py-2 border border-slate-300 text-center" type="text" name="other" id="other" placeholder="อื่นๆ(ถ้ามี)"></span>
                </p>
                </p>
        </tr>
    </table>
</div>';
}

?>
