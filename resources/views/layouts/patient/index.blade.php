@extends('layouts.dashboard')

@section('content')
    @include('layouts.patient.header')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h2>All Patients</h2>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="btn btn-outline-primary" href="{{ route('patient.create') }}">Add Patient</a>
        </div>
    </div>

    @include('layouts.patient.table')
@endsection
