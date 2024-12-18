<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private function provaController()
    {
        $somma = 5 + 1 ;
        return $somma;
    }
    public function provaData()
    {
        // Chiama il metodo provaController e ottieni il risultato
        $somma = $this->provaController();
        return $somma;
    }
}
