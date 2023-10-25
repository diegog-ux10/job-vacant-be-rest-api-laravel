<?php

namespace App\Http\Controllers;

use App\Models\JobApply;
use Illuminate\Http\Request;

class JobApplyController extends Controller
{
    public function index()
{
    $jobApplies = JobApply::with('job_vacancy')->get();
    return response()->json($jobApplies);
}

public function show($id)
{
    $jobApply = JobApply::findOrFail($id);
    return response()->json($jobApply);
}

public function store(Request $request)
{
    $jobApply = JobApply::create($request->all());
    return response()->json($jobApply, 201);
}

public function update(Request $request, $id)
{
    $jobApply = JobApply::findOrFail($id);
    $jobApply->update($request->all());
    return response()->json($jobApply);
}

public function destroy($id)
{
    $jobApply = JobApply::findOrFail($id);
    $jobApply->delete();
    return response()->json(null, 204);
}
}
