<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller {
    public function retrieves() {
        $jobs = Job::all();
        return response()->json($jobs);
    }

    public function retrievesOne($id) {
        $job = Job::find($id);
        return response()->json($job);
    }

    public function create() {
        $job = Job::create(request()->all());
        $job-> save();
        return response()->json($job);
    }

    public function update($id) {
        $job = Job::find($id);
        $job->update(request()->all());
        return response()->json($job);
    }

    public function delete($id) {
        $job = Job::find($id);
        $job->delete();
        return response()->json($job);
    }
}
