<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessSubmission;

class SubmissionController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        ProcessSubmission::dispatch($data);

        return response()->json(['message' => 'Submission received and is being processed.'], 200);
    }
}
