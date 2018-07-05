@extends('layouts.dashboard')

@section('content')
    @include('layouts.patient.header')

    <h2>New Patient</h2>
    <form method="POST" action="{{ route('patient.store') }}">
        @include('layouts.patient.form')

        <button class="btn btn-primary" type="submit">Add Patient</button>
    </form>
@endsection
