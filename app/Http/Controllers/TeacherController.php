<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        // Récupérer tous les enseignants
        $teachers = Teacher::all();

        // Retourner les données à Inertia
        return Inertia::render('Teachers', [
            'teachers' => $teachers,
        ]);
    }

}
