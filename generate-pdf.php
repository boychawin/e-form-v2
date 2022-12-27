<?php
require_once 'vendor/autoload.php';


use Spipu\Html2Pdf\Exception\ExceptionFormatter;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Html2Pdf;


try {
    ob_start();
    include('แบบฟอร์ม_คำสั่ง/index.html');
    $content = ob_get_clean();
    $html2pdf = new Html2Pdf('P', 'A4', 'en', true, 'UTF-8');
    $html2pdf->pdf->SetDisplayMode('fullpage');
    // $html2pdf->setDefaultFont("freeserif");
    $html2pdf->setDefaultFont("THSarabunNew001");

    if (@file_exists('lang/eng.php')) {
        require_once 'lang/eng.php';
        $html2pdf->pdf->setLanguageArray($l);
    }

    // สร้างเนื้อหาจาก  HTML code
    $html2pdf->writeHTML($content);
    $html2pdf->pdf->setAuthor('Nicola Asuni');
    $html2pdf->pdf->setTitle('TCPDF Example 004');
    $html2pdf->pdf->setSubject('TCPDF Tutorial');
    $html2pdf->pdf->setKeywords('TCPDF, PDF, example, test, guide');
    $html2pdf->output('test.pdf');

} catch (Html2PdfException $e) {
    $html2pdf->clean();

    $formatter = new ExceptionFormatter($e);
    echo $formatter->getHtmlMessage();
}
