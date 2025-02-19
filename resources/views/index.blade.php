<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homeowners</title>
</head>
<body>

<h1>Homeowners</h1>

<a href="{{ route('homeowners.create') }}">Add Homeowner</a>

@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($homeowners as $homeowner)
        <tr>
            <td>{{ $homeowner->first_name }} {{ $homeowner->last_name }}</td>
            <td>{{ $homeowner->email }}</td>
            <td>
                <a href="{{ route('homeowners.show', $homeowner->id) }}">View</a>
                <a href="{{ route('homeowners.edit', $homeowner->id) }}">Edit</a>
                <form action="{{ route('homeowners.destroy', $homeowner->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
