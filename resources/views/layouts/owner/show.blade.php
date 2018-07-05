@extends('layouts.dashboard')

@section('content')
    @include('layouts.owner.header')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <div id="owner-details">
            <h2>{{ $owner->first_name }} {{ $owner->last_name }}</h2>
            <h5>Phone: {{ $owner->phone_number }}</h5>
        </div>

        <div class="btn-toolbar mb-2 mb-md-0 ">
            <div class="btn-group mr-2">
                <a href="{{ route('patient.create.withOwner', ['id' => $owner->id]) }}" class="btn btn-outline-primary">Add
                    Patient</a>
                <a href="{{ route('owner.edit', ['id' => $owner->id]) }}" class="btn btn-outline-primary">Edit</a>
            </div>

            <form method="POST" action="{{ route('owner.destroy', ['id' => $owner->id]) }}">
                {{ csrf_field() }}

                @method("DELETE")

                <button type="submit" class="btn btn-outline-danger">Delete</button>
            </form>
        </div>
    </div>

    <div class="table-responsive">
        @include('layouts.patient.table', ['patients' => $owner->patients])
    </div>
@endsection
