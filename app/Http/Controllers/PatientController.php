<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
                $patients = Patient::all();
        return view('welcome', compact('patients'));
    }

    public function create()
    {
        return view('patient.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'home_address' => 'required',
        ]);

        Patient::create($request->all());
        return redirect()->route('home');
    }

    public function show(Patient $patient)
    {
        return view('patient.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('patient.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'home_address' => 'required',
        ]);

        $patient->update($request->all());
        return redirect()->route('home');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
    return redirect()->route('home');
    }
}
