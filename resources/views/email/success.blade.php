<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>

<div>
    Hello {{ $name }}
    <br>
    You have successfully registered to {{ getenv('APP_NAME') }}.
    <br>
    Your password is : {{ $pwd }}
    <br>
    If you didn't request, please ignore this email.
    <br/>
</div>
</body>
</html>