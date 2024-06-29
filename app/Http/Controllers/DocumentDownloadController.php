<?php

namespace App\Http\Controllers;

use App\Models\Client;
use PDF;
use Illuminate\Http\Request;

class DocumentDownloadController extends Controller
{
    public function generateEnglishPDF(Client $client)
    {
        $client = Client::find($client->id);
        $pdf = PDF::loadview('pdf.english', ['client' => $client]);
        return $pdf->download($client->name.'-english-agreement.pdf');
    }
    public function generateLugandaPDF(Client $client)
    {
        $client = Client::find($client->id);
        $pdf = PDF::loadview('pdf.luganda', ['client' => $client]);
        return $pdf->download($client->name.'-luganda-agreement.pdf');
    }
}
