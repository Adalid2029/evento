<?php

namespace App\Controllers\Reportes;

use CodeIgniter\View\Cells\Cell;
use FPDF;
use App\Libraries\qr\QRcode;

class EventoReporte extends FPDF
{
    public function reporteBoletoParticipante($eventoParticipante)
    {
        $this->AddPage('P', 'Letter');
        $posicionY = 6;
        $altoX = 0;
        foreach ($eventoParticipante as $key => $value) {
            $cantidadCaracteres = strlen($eventoParticipante[0]['descripcion_evento']);

            $altoX = ($cantidadCaracteres >= 550) ? 35 : 30;

            $this->Image(FCPATH . '/img/plantilla_boleto2.jpg', 30, $posicionY, 155, $altoX);
            $this->Image(FCPATH . '/img/logo_evento.png', 95, $posicionY - 5, 40, 30);
            $this->SetFont('courier', 'BU', 12);
            $this->Rect(30, $posicionY, 155, $altoX);
            // $this->Line(125, 41, 125, $posicionY);
            // $this->Line(155, 41, 155, $posicionY);

            $qrcode = new QRcode($value['id_evento'] . '|' . $value['id_participante'] . '|' . utf8_decode($value['nombres'] . ' ' . $value['apellidos']), 'H'); // error level : L, M, Q, H
            $qrcode->disableBorder();
            $qrcode->displayFPDF($this, 130, $posicionY + 9, 17, array(255, 255, 255), array(0, 0, 0));
            $qrcode->displayFPDF($this, 160, $posicionY + 9, 17, array(255, 255, 255), array(0, 0, 0));

            $this->SetX(35);
            $this->SetTextColor(0, 0, 0);
            $this->Cell(0, 5, utf8_decode($value['nombre_evento']), 0, 1);
            $this->SetFont('courier', '', 11);
            $this->SetX(35);
            $this->Cell(0, 5, utf8_decode($value['nombres'] . ' ' . $value['apellidos']), 0, 1);
            $this->SetX(35);
            $this->Cell(0, 5, utf8_decode($value['celular']), 0, 1);
            $this->SetX(35);
            $this->Cell(0, 5, utf8_decode($value['correo_electronico']), 0, 1);
            $this->SetFont('courier', '', 6);
            $this->SetX(35);
            $this->MultiCell(80, 2, substr(utf8_decode($value['descripcion_evento']), 0, 200), 0, 'C');
            $this->Ln(20);


            ($cantidadCaracteres >= 550) ? $posicionY += 48 : $posicionY += 42;
        }

        $this->Output();
    }
}
