<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class databaseController extends Controller
{
    public function test(){
        $users = DB::connection('reportgovbd')
        ->table('users')
        ->join('contacts', 'users.id', '=', 'contacts.user_id')
        ->select('users.id', 'users.name', 'users.email', 'contacts.phone')
        ->get();

    // return Response::json($users);
    return view('test.db', ['users' => $users]);
    }
}
