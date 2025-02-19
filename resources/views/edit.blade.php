<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Homeowner</title>
</head>
<body>

<h1>Edit Homeowner</h1>

<form action="{{ route('homeowners.update', $homeowner->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" id="first_name" value="{{ $homeowner->first_name }}" required><br>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" id="last_name" value="{{ $homeowner->last_name }}" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="{{ $homeowner->email }}" required><br>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" value="{{ $homeowner->phone }}"><br>

    <label for="address">Address:</label>
    <input type="text" name="address" id="address" value="{{ $homeowner->address }}"><br>

    <button type="submit">Update</button>
</form>

</body>
</html>
