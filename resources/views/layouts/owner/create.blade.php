@extends('layouts.dashboard')

@section('content')
    @include('layouts.owner.header')

    <h2>New Owner</h2>

    <form method="POST" action="{{ route('owner.store') }}">
        @include('layouts.owner.form')

        <button class="btn btn-primary" type="submit">Add Owner</button>
    </form>
@endsection
