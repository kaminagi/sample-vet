@extends('layouts.dashboard')

@section('content')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Welcome to {{ config('app.name', 'Laravel') }}</h1>
    </div>

    @include('layouts.dashboard.messages')

    <p class="mb-3">
        Our most recent additions are displayed below. For a more detailed view with additional options, please visit
        the respective link in the side menu.
    </p>

    <div>
        <div class="mt-5">
            <h3>Recently Added Owners</h3>
            @include('layouts.owner.table')
        </div>

        <div class="mt-5">
            <h3>Recently Added Patients</h3>
            @include('layouts.patient.table')
        </div>
    </div>
@endsection
