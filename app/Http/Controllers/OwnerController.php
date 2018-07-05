<?php

namespace App\Http\Controllers;

use App\Http\Requests\OwnerRequest;
use App\Owner;
use Exception;

class OwnerController extends Controller
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
        $owners = Owner::all();

        return view('layouts.owner.index', compact(['owners']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.owner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnerRequest $request)
    {
        Owner::create(request(['first_name', 'last_name', 'phone_number']));

        session()->flash('message', 'Owner Created Successfully');

        return redirect()->route('owner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner)
    {
        return view('layouts.owner.show', compact(['owner']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function edit(Owner $owner)
    {
        return view('layouts.owner.edit', compact(['owner']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param OwnerRequest $request
     * @param  \App\Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function update(OwnerRequest $request, Owner $owner)
    {
        $owner->update(request(['first_name', 'last_name', 'phone_number']));

        $owner->save();

        session()->flash('message', 'Owner Updated Successfully');

        return redirect()->route('owner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Owner $owner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner)
    {
        if ($owner->patients()->count() > 0) {
            session()->flash('error', 'Could not delete user because they have associated patients');
            return redirect()->back();
        }

        try {
            $owner->delete();
        } catch (Exception $exception) {
            session()->flash('error', 'Owner could not be deleted');
            return redirect()->back();
        }

        session()->flash('message', 'Owner Deleted Sucessfully');
        return redirect()->route('owner.index');
    }
}
