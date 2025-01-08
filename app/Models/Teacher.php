<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',           // Clé étrangère vers la table des utilisateurs
        'expertise',         // Expertise de l'enseignant
        'bio',                // Biographie de l'enseignant
        'rating',             // Évaluation de l'enseignant
        'image',              // Image de l'enseignant
        'location',           // Localisation de l'enseignant
        'experience',         // Expérience professionnelle
        'skillsPro',          // Compétences professionnelles (JSON)
        'skillsTeach',        // Compétences pédagogiques (JSON)
        'clasHour',           // Heures de classe
        'numberEtablishment', // Nombre d'établissements
        'teaching_method',    // Méthodes d'enseignement
    ];

    protected $casts = [
        'skillsPro' => 'array',   // Convertir skillsPro en tableau
        'skillsTeach' => 'array', // Convertir skillsTeach en tableau
    ];

    /**
     * Relation avec le modèle User (un enseignant appartient à un utilisateur)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
