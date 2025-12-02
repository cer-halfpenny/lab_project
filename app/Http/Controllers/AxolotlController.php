<?php

namespace App\Http\Controllers;

use App\Models\Axolotl;
use Illuminate\Http\Request;

class AxolotlController extends Controller
{
    public function index()
    {
        $axolotls = Axolotl::all();

        return view('axolotls.index', compact('axolotls'));
    }

    // TODO (AI): later, generate a search() method for autocomplete JSON.
}
