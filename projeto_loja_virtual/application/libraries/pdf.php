<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pdf {

    public function geraPDF($html, $nomeArquivo = NULL) {
        $CI = & get_instance();

        require_once("mpdf60/mpdf.php");

        $mpdf = new mPDF();

        //Rodapé: Seta a data/hora completa de quando o PDF foi gerado 
        $mpdf->SetFooter('{DATE d/m/Y H:i:s}|');

        $mpdf->WriteHTML($html);

        // define um nome para o arquivo PDF
        if ($nomeArquivo == NULL) {
            $nomeArquivo = "PDF_";
        }

        $nomeArquivo .= '_' . date("d-m-Y_H-i-s") . '.pdf';

        $mpdf->Output($nomeArquivo, 'I');
    }

}
