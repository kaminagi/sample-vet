{{ csrf_field() }}

@if(isset($owner))
    <div class="form-group">
        <label for="owner_id">Owner:</label>
        <h5>{{ $owner->first_name }} {{ $owner->last_name }}</h5>
        <select class="form-control" name="owner_id" id="owner_id" hidden>
            <option value="{{ $owner->id }}" selected></option>
        </select>
    </div>
@else
    <div class="form-group">
        <label for="owner_id">Owner:</label>
        <select class="form-control" name="owner_id" id="owner_id">
            @foreach($owners as $owner)
                <option value="{{ $owner->id }}"
                        @if(isset($patient->owner->id) && $owner->id === $patient->owner->id)
                        selected
                    @endif
                >
                    {{ $owner->first_name }} {{ $owner->last_name }}
                </option>
            @endforeach
        </select>
    </div>
@endif

<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name"
           @if(isset($patient->name))
           value="{{ $patient->name }}"
           @endif
           required>
</div>

<div class="form-group">
    <label for="species">Species:</label>
    <input type="text" class="form-control" id="species" name="species"
           @if(isset($patient->species))
           value="{{ $patient->species }}"
           @endif
           required>
</div>

<div class="form-group">
    <label for="color">Color:</label>
    <input type="text" class="form-control" id="color" name="color"
           @if(isset($patient->color))
           value="{{ $patient->color }}"
           @endif
           required>
</div>

<div class="form-group">
    <label for="date_of_birth">Date of Birth:</label>
    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
           @if(isset($patient->date_of_birth))
           value="{{ $patient->date_of_birth }}"
           @endif
           required>
</div>

@include('layouts.partials.form-errors')
