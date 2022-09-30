<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseControlleur extends Controller
{
    public function scope(Entreprise $entreprise){
        // dd($entreprise);
        return view('/entreprise/ajout', [
            'entreprise' => $entreprise
        ]);
    }

    public function target(Entreprise $entreprise){
        $test = request()->validate([
            'id' => 'required'
        ]);
        dd($test);
        return view('/entreprise/ajout', [
            'entreprise' => $entreprise
        ]);
    }
}
