<?php
   require_once 'dompdf/autoload.inc.php';  
   use Dompdf\Dompdf; 
   use Dompdf\Options;

   $options = new Options();
//    $options->set('defaultFont', 'homona');
    //settings
    $options->setIsRemoteEnabled(true);
    $options->setDpi(100);
    $options->setIsHtml5ParserEnabled(true);
    $options->setIsJavascriptEnabled(true);
    $options->setIsPhpEnabled(true);
    // $dompdf->setBasePath('../แบบฟอร์ม_คำสั่ง/index.html');

    $options->setIsFontSubsettingEnabled(true);
    // $dompdf->setOptions($options);
   $dompdf = new Dompdf($options);


   $html = file_get_contents("../แบบฟอร์ม_คำสั่ง/index.html"); 
   $dompdf->loadHtml($html, 'UTF-8');
   $dompdf->setPaper('A4', 'landscape'); 
   $dompdf->set_option('defaultMediaType', 'all');
   $dompdf->set_option('isFontSubsettingEnabled', true);

   $dompdf->render(); 
   $dompdf->stream("niceshipest", array("Attachment" => 0));
?>
