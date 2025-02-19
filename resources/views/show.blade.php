<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homeowner Details</title>
</head>
<body>

<h1>{{ $homeowner->first_name }} {{ $homeowner->last_name }}</h1>
<p>Email: {{ $homeowner->email }}</p>
<p>Phone: {{ $homeowner->phone }}</p>
<p>Address: {{ $homeowner->address }}</p>

<a href="{{ route('homeowners.index') }}">Back to Homeowners List</a>

</body>
</html>
