<?php

namespace Firdavs\Api\Controllers;

use Illuminate\Http\Request;
use System\Classes\Controller;

class LocationController extends Controller
{
    public function downloadPdf(Request $request)
    {
        return $request->download('/var/www/clongarzon.com/data/www/qr_code_pdf/qr_codes.pdf');
    }
}
