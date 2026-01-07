<?php

namespace App\Services;

use Mpdf\Mpdf;

class PdfService
{
    public static function make($view, $data = [])
    {
        $mpdf = new Mpdf();
        $mpdf->WriteHTML(view($view, $data)->render());

        return $mpdf;
    }
}
