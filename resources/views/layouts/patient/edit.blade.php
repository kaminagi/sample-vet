@extends('layouts.dashboard')

@section('content')
    @include('layouts.patient.header')

    <h2>Edit Patient: {{ $patient->name }}</h2>

    <form method="POST" action="{{ route('patient.update', ['id' => $patient->id]) }}">
        @method('PUT')

        @include('layouts.patient.form')

        <button class="btn btn-primary" type="submit">Update Patient</button>
    </form>
@endsection
