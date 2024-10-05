<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller {
    public function index() {
        return response()->json(['message' => 'API running at http://127.0.0.1:8000']);
    }
}

