<!-- resources/views/emails/application_data.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Your Application Data</title>
</head>

<body>
    <h1>Your Application Data</h1>
    <ul>
        @foreach ($formData as $key => $value)
        <li><strong>{{ str_replace('_', ' ', ucfirst($key)) }}:</strong> {{ $value }}</li>
        @endforeach
    </ul>
</body>

</html>