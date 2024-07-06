<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-QQ6RQTLDpOoGh6zyq0E3Y6d5M6Z2Ws5Pc1Y2MWo3RpDNGuZ6w/2TJUoX4N0wcmrLkbHgbhodkV2NqZFlAfJ+/Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Laravel asset function for CSS and JS -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="icon" href="{{ asset('images/tuplogo.png') }}">

    <!-- Bootstrap core CSS -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>
    <form action="{{ route('verify.otp') }}" method="POST">
        @csrf
        <input type="hidden" name="email" value="{{ request('email') }}">
        <div>
            <label for="otp">OTP:</label>
            <input type="text" id="otp" name="otp" required>
        </div>
        <button type="submit">Verify OTP</button>
    </form>
</body>
</html>