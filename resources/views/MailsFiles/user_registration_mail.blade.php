<!-- resources/views/emails/user_registered.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C</title>
</head>
<body>
    <h1>Welcome, {{ $user_name }}!</h1>

    <p>Thank you for registering at Craftech Digit. We're thrilled to have you with us.</p>

    {{-- <p>To get started, please click the link below to verify your email address:</p>

    <p>
        <a href="{{ route('verification.verify', $user->verification_token) }}">
            Verify Your Email
        </a>
    </p> --}}
    <p>
        <a href="{{ route('login')}}">
            Click Here.
        </a>
    </p>

    <p>If you did not create an account, no further action is required.</p>

    <p>Thanks,<br>The  Team Craftech Digit</p>
</body>
</html>
