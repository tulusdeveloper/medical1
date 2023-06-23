<?php

namespace App\Modules\Dashboard\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        // Logic for fetching data and rendering the view
        return view('Modules/Dashboard/Views/Dashboard');
    }
}