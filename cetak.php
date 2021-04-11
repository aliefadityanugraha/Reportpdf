<?php

require_once('TCPDF/tcpdf.php');



class MYPDF extends TCPDF {
    //Page header
    public function Header() {
       
        $bMargin = $this->getBreakMargin();
        
        $auto_page_break = $this->AutoPageBreak;
       
        $this->SetAutoPageBreak(false, 0);
        // set bacground image
        $img_file = K_PATH_IMAGES.'portfolio1.jpg';
        $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
      
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        
        $this->setPageMark();
    }
}


$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// remove default header
$pdf->setPrintHeader(false);

// add a page
$pdf->AddPage('L','A4');





$bMargin = $pdf->getBreakMargin();

$auto_page_break = $pdf->getAutoPageBreak();

$pdf->SetAutoPageBreak(false, 0);

$img_file = K_PATH_IMAGES.'portfolio1.jpg';
$pdf->Image($img_file, 0, 0, 300, 220, '', '', '', false, 300, '', false, false, 0);

$pdf->SetAutoPageBreak($auto_page_break, $bMargin);

$pdf->setPageMark();



$html = '<span style="color:white;text-align:center;font-weight:bold;font-size:80pt;">WES DADI SIPLAH</span>';
$pdf->writeHTML($html, true, false, true, false, '');

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('Sertifikat_'.$_POST["nama"].'_Pondok_Romadhon.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+