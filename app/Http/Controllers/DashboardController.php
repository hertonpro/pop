<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // Afficher le tableau de bord de l'administrateur
        return view('pages.admin.dashboard');
    }
}
