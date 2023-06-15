<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    public function index(){
        return view('search');
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $divisions = Division::where('name', 'LIKE', '%' . $request->search . '%')->get();

            if ($divisions->count()) {
                foreach ($divisions as $division) {
                    $output .= '<tr>' .
                        // '<td>' . $division->id . '</td>' .
                        '<td class="">' . $division->name . '</td>' .
                        '</tr>';
                }
            } else {
                $output .= '<tr>' .
                    '<td colspan="2">No results found</td>' .
                    '</tr>';
            }

            return response()->json($output);
        }
    }

}
