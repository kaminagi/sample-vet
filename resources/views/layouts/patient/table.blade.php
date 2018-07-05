<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Species</th>
            <th>Color</th>
            <th>Date of Birth</th>
            <th>Owner</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>
                    <a href="{{ route('patient.show', ['id' => $patient->id]) }}">
                        {{ $patient->name }}
                    </a>
                </td>
                <td>{{ $patient->species }}</td>
                <td>{{ $patient->color }}</td>
                <td>{{ $patient->date_of_birth }}</td>
                <td>
                    @if($patient->owner)
                        <a href="{{ route('owner.show', ['id' => $patient->owner->id]) }}">
                            {{ $patient->owner->first_name }} {{ $patient->owner->last_name }}
                        </a>
                    @endif
                </td>
                <td>
                    <form method="POST" action="{{ route('patient.destroy', ['id' => $patient->id]) }}">
                        {{ csrf_field() }}

                        @method("DELETE")

                        <a href="{{ route('patient.edit', ['id' => $patient->id]) }}" class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
