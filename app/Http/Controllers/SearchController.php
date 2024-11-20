<?php
namespace App\Http\Controllers;

use App\Models\Item; // Par exemple, si tu cherches dans des éléments
use Inertia\Inertia;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Récupérer la query
        $query = $request->input('query');

        // Effectuer la recherche (par exemple, dans une base de données)
        $results = Item::where('name', 'like', "%{$query}%")->get();

        // Retourner la vue avec les résultats de la recherche
        return Inertia::render('SearchResults', [
            'results' => $results,
            'query' => $query,
        ]);
    }
}
