<?php

namespace App\Http\Controllers;

use App\Http\Requests\createEpreuveRequest;
use App\Mail\Notifications;
use App\Models\Epreuve;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EpreuveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $epreuves = Epreuve::all();
        return view('epreuves.index', compact('epreuves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('epreuves.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createEpreuveRequest $request)
    {
        // Validez les données avec le Form Request, donc $request->validated() contient déjà des données valides
        $validatedData = $request->validated();

        // Créez une nouvelle instance de votre modèle et remplissez les attributs
        $epreuve = new Epreuve();

        $epreuve->classe = $validatedData['classe'];
        $epreuve->niveau = $validatedData['niveau'];
        $epreuve->matiere = $validatedData['matiere'];
        $epreuve->contenue = $validatedData['contenue'];

        // Sauvegardez l'instance dans la base de données
        $epreuve->save();

        $epreuveDetails = [
            'classe' => $epreuve->classe,
           'matiere' => $epreuve->matiere,
        ];

         // Récupérer tous les utilisateurs
    $users = User::all();

    // Envoyer la notification à tous les utilisateurs
    foreach ($users as $user) {
        Mail::to($user['email'])->send(new Notifications(
            $epreuveDetails['classe'],
            $epreuveDetails['matiere'],
        ));
    }

        // Vous pouvez rediriger ou retourner une réponse selon vos besoins
        return redirect()->route('epreuves.index')->with('success', 'Resource created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $epreuve_id)
    {
        $epreuve = Epreuve::findOrFail($epreuve_id);
    
        
        $epreuve::destroy($epreuve_id);
        
        
        return redirect()->back();
        
    }
}
