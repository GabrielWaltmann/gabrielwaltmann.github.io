<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;

class ConfigsController extends Controller {
    public function create() {
        $config = Config::create(request()->all());
        $config-> save();
        return response()->json($config);
    }

    public function retrieves() {
        $configs = Config::all();
        return response()->json($configs);
    }

    public function retrievesOne($name) {
        $config = Config::where('key', $name)->first();
        return response()->json($config);
    }

    public function update($name) {
        $updated = Config::where('key', $name)->update(['value' => request('value')]);

        $config = Config::where('key', $name)->first();

        return response()->json($config);
    }

    public function delete($name) {
        $config = Config::where('key', $name)->delete();

        return response()->json($config);
    }
}
