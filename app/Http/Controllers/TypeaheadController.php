<?php

namespace App\Http\Controllers;

use App\Models\StyleDetails;
use Illuminate\Http\Request;

class TypeaheadController extends Controller
{
    public function styleautocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = StyleDetails::where('style_name', 'LIKE', '%' . $query . '%')->get();
        return response()->json($filterResult);
    }
}
