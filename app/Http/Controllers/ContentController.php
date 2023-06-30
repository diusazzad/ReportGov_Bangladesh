<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ContentController extends Controller
{
    public function index(): View
    {
        $users = DB::table('contents')->get();

        return view('welcome', ['users' => $users]);
    }
}
