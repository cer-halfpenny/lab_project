<?php

namespace App\Http\Controllers;

use App\Models\Axolotl;
use Illuminate\Http\Request;

class AxolotlController extends Controller
{
    // Handle the /axolotls page: get all axolotls from the database and pass them to the axolotls.index view
    public function index()
    {   
        // Fetch all Axolotl records
        $axolotls = Axolotl::all();
        
        // Render the Blade view and make $axolotls available to it
        return view('axolotls.index', compact('axolotls'));
    }

    public function search(Request $request)
    {
         // - It reads the query string parameter "q"
        // - It finds axolotls whose "name" contains that text (case-insensitive)
        // - It returns a JSON array of at most 10 matching axolotls, each with id and name.
        
        $query = trim((string) $request->query('q', ''));

        if ($query === '') {
            return response()->json([]);
        }

        $axolotls = Axolotl::query()
            ->select('id', 'name')
            ->whereRaw('LOWER(name) LIKE ?', ['%' . mb_strtolower($query) . '%'])
            ->limit(10)
            ->get();

        return response()->json($axolotls);
    }
}
