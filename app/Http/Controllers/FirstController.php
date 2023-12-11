<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FirstController extends BaseController
{
    public function index() {
        return view('first', ['message' => 'Hello World']);
    }
}
