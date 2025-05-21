<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clients(){
        $clients = Client::orderBy('DESC')->paginate(10);
        return view('admin.clients', ['clients' => $clients]);
    }
}
