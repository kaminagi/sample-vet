{{ csrf_field() }}

<div class="form-group">
    <label for="first_name">First Name:</label>
    <input type="text" class="form-control" id="first_name" name="first_name"
           @if(isset($owner->first_name))
           value="{{ $owner->first_name }}"
           @endif
           required
    >
</div>

<div class="form-group">
    <label for="last_name">Last Name:</label>
    <input type="text" class="form-control" id="last_name" name="last_name"
           @if(isset($owner->last_name))
           value="{{ $owner->last_name }}"
           @endif
           required
    >
</div>

<div class="form-group">
    <label for="phone_number">Phone Number:</label>
    <input type="text" class="form-control" id="phone_number" name="phone_number"
           @if(isset($owner->phone_number))
           value="{{ $owner->phone_number }}"
           @endif
           required
    >
</div>

@include('layouts.partials.form-errors')
