<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Number of Patients</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($owners as $owner)
            <tr>
                <td>{{ $owner->id }}</td>
                <td>
                    <a href="{{ route('owner.show', ['id' => $owner->id]) }}">{{ $owner->first_name }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('owner.show', ['id' => $owner->id]) }}">{{ $owner->last_name }}
                    </a>
                </td>
                <td>{{ $owner->phone_number }}</td>
                <td>{{ $owner->patients()->count() }}</td>
                <td>
                    <form method="POST" action="{{ route('owner.destroy', ['id' => $owner->id]) }}">
                        {{ csrf_field() }}

                        @method("DELETE")

                        <a href="{{ route('owner.edit', ['id' => $owner->id]) }}" class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
