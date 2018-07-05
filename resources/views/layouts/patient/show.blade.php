@extends('layouts.dashboard')

@section('content')
    @include('layouts.patient.header')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <div id="owner-details">
            <h2>{{ $patient->name }}</h2>
        </div>

        <div class="btn-toolbar mb-2 mb-md-0 ">
            <div class="btn-group mr-2">
                <a href="{{ route('patient.edit', ['id' => $patient->id]) }}" class="btn btn-outline-primary">Edit</a>
            </div>

            <form method="POST" action="{{ route('patient.destroy', ['id' => $patient->id]) }}">
                {{ csrf_field() }}

                @method("DELETE")

                <button type="submit" class="btn btn-outline-secondary">Delete</button>
            </form>
        </div>
    </div>

    <h5>Species: {{ $patient->species }}</h5>
    <h5>Color: {{ $patient->color }}</h5>
    <h5>Date of Birth: {{ $patient->date_of_birth }}</h5>

    @if($patient->owner)
        <h5>Owner:
            <a href="{{ route('owner.show', ['id' => $patient->owner->id]) }}">
                {{ $patient->owner->first_name }} {{ $patient->owner->last_name }}
            </a>
        </h5>
    @endif
@endsection
