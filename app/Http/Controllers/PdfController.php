<?php

namespace App\Http\Controllers;

use App\Models\Epreuve;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdfepreuve($epreuve_id)
    {
                $epreuve = Epreuve::findOrFail($epreuve_id);

                $data = [
                    'epreuve' => $epreuve,
                ];

            // Générer le PDF avec la vue et les données
            $pdf = Pdf::loadView('epreuves.epreuvepdf', $data);

            // Retourner le téléchargement du PDF
            return $pdf->loadView('epreuves.epreuvepdf');
    

    }

  
    public function show($epreuve_id)
    {
        $epreuves = Epreuve::findOrFail($epreuve_id);
    
        $data = [
            'epreuves' => $epreuves,
        ];
    
        return view('pdf_epreuves.show', $data);
    }
    


    public function downloadPDF($epreuve_id)
{
    // Récupérer les données de l'épreuve spécifique
    $epreuves = Epreuve::findOrFail($epreuve_id);

    // Passer les données sous forme de tableau
    $data = [
        'epreuves' => $epreuves
    ];

    $pdf = Pdf::loadView('pdf.epreuvepdf', $data);

    // Retourner le téléchargement du PDF
    return $pdf->download('epreuvepdf_' . $epreuves->id . '.pdf');
}
}


