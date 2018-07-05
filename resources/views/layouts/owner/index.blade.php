@extends('layouts.dashboard')

@section('content')
    @include('layouts.owner.header')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h2>All Owners</h2>

        <div class="btn-toolbar mb-2 mb-md-0">
            <a class="btn btn-outline-primary" href="{{ route('owner.create') }}">Add Owner</a>
        </div>
    </div>

    @include('layouts.owner.table')
@endsection
