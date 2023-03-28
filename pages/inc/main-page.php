<?php 

function PageForm($content){

$html = '
<page size="A4" id="page0">
<div class="memo-form">
     '.$content.'
</div>

<div class="footer-text">
    <input class="w-full  py-2 border border-slate-300" autocomplete="off" name="textfooter[0]" id="textfooter" onblur="checkVal(this)" style="height: 48px" />
</div>

</page>
';


    return $html;


}




?>