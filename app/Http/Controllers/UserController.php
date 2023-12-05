<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function view_data(){
        $data['nama'] = 'Rima';
        $data['nim'] = '20110197';

        return view('users.index', $data);
       }
    }
