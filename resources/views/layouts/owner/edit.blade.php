@extends('layouts.dashboard')

@section('content')
    @include('layouts.owner.header')

    <h2>Edit Owner:  {{ $owner->first_name }} {{ $owner->last_name }}</h2>

    <form method="POST" action="{{ route('owner.update', ['id' => $owner->id]) }}">
        @method('PUT')

        @include('layouts.owner.form')

        <button class="btn btn-primary" type="submit">Update Owner</button>
    </form>
@endsection
