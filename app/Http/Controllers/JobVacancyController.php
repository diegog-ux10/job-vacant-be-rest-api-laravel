<?php

namespace App\Http\Controllers;

use App\Models\JobVacancy;
use Illuminate\Http\Request;

class JobVacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        if($request->all() === []) {
            $jobVacancies = JobVacancy::with('user')->get();
            return response()->json($jobVacancies);
        }

        $jobVacancies = JobVacancy::with('user')->paginate(10);

        return response()->json([
            'vacancies' => $jobVacancies->items(),
            'currentPage' => $jobVacancies->currentPage(),
            'totalPages' => $jobVacancies->lastPage(),
            'request' => $request->all()
        ]);
    }

    public function show($id)
    {
        $jobVacancy = JobVacancy::findOrFail($id);
        return response()->json($jobVacancy);
    }

    public function store(Request $request)
    {
        $jobVacancy = JobVacancy::create($request->all());
        return response()->json($jobVacancy, 201);
    }

    public function update(Request $request, $id)
    {
        $jobVacancy = JobVacancy::findOrFail($id);
        $jobVacancy->update($request->all());
        return response()->json($jobVacancy);
    }

    public function destroy($id)
    {
        $jobVacancy = JobVacancy::findOrFail($id);
        $jobVacancy->delete();
        return response()->json(null, 204);
    }
}
