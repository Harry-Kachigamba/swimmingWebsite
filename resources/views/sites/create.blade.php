<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Site</title>
</head>
<body>
    <!-- Display the success message -->
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('sites.store') }}" method="POST">
        @csrf
        <label for="SiteName">Site Name:</label>
        <input type="text" id="SiteName" name="SiteName" required>
        <br>
        <label for="SiteDescription">Site Description:</label>
        <input type="text" id="SiteDescription" name="SiteDescription" required>
        <br>
        <label for="SiteLocation">Site Location:</label>
        <input type="text" id="SiteLocation" name="SiteLocation" required>
        <br>
        <label for="SiteContacts">Site Contacts:</label>
        <input type="text" id="SiteContacts" name="SiteContacts" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
