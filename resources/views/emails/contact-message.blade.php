<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
</head>
<body>
    <p>Name: {{ $contactData['name'] }}</p>
    <p>Email: {{ $contactData['email'] }}</p>
    <p>Subject: {{ $contactData['subject'] }}</p>
    <p>Message: {{ $contactData['message'] }}</p>
</body>
</html>
