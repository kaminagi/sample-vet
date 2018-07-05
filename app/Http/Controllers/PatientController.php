<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Owner;
use App\Patient;
use Exception;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();

        return view('layouts.patient.index', compact(['patients']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners = Owner::all();

        return view('layouts.patient.create', compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function createWithOwner(Owner $owner)
    {
        return view('layouts.patient.create', compact('owner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PatientRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRequest $request)
    {
        Patient::create(request(['name', 'species', 'color', 'date_of_birth', 'owner_id']));

        session()->flash('message', 'Patient Created Successfully');

        return redirect()->route('patient.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('layouts.patient.show', compact(['patient']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        $owners = Owner::all();

        return view('layouts.patient.edit', compact(['patient', 'owners']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PatientRequest $request
     * @param  \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function update(PatientRequest $request, Patient $patient)
    {
        $patient->update(request(['name', 'species', 'color', 'date_of_birth', 'owner_id']));

        $patient->save();

        session()->flash('message', 'Patient Updated Successfully');

        return redirect()->route('patient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        try {
            $patient->delete();
        } catch (Exception $exception) {
            session()->flash('error', 'Patient could not be deleted');
            return redirect()->back();
        }

        session()->flash('message', 'Patient Deleted Successfully');

        return redirect()->route('patient.index');
    }
}
