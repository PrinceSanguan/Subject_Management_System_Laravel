<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- Laravel asset function for CSS and JS -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <link rel="icon" href="{{ asset('images/tuplogo.png') }}">

    <!-- Bootstrap core CSS -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

</head>

<body class="text-center">
    <main>
        <img class="mb4" src="{{ asset('images/tuplogo.png') }}" alt="tuplogo" width="100" height="100">
        <h1 class="create">SIGN UP YOUR ACCOUNT</h1>
        <h1 class="manage">To manage your subjects and schedule all in one place</h1>
        <form name="signup_form" action="">
            <div class="formGroup1">
                <div class="form-group1">
                    <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="First name" required>
                </div>
                <div class="form-group1a">
                    <input type="text" class="form-control" id="surname" aria-describedby="emailHelp" placeholder="Surname" required>
                </div>
            </div>

            <div class="formGroup2">
                <div class="form-group2">
                    <input type="text" class="form-control" id="studentno1" aria-describedby="emailHelp" placeholder="TUPC-XX-XXXX" required>
                </div>
                <div class="form-group2a">
                    <select class="custom-select mr-sm-2" id="section0" required>
                        <option value="BET-COET-S-1A">BET-COET-S-1A</option>
                        <option value="BET-COET-NS-1B">BET-COET-NS-1B</option>
                        <option value="BET-COET-NS-2A">BET-COET-NS-2A</option>
                        <option value="BET-COET-S-2B">BET-COET-S-2B</option>
                        <option value="BET-COET-S-3A">BET-COET-S-3A</option>
                        <option value="BET-COET-NS-3B">BET-COET-NS-3B</option>
                        <option value="BET-COET-S-4A">BET-COET-S-4A</option>
                        <option value="BET-COET-NS-4B">BET-COET-NS-4B</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="juan.delacruz@gsfe.tupcavite.edu.ph" required>
            </div>
            <div class="form-group" style="display: grid; row-gap: 10px;">
                <input type="password" class="form-control" id="password1" placeholder="Password" minlength="5" required>
                <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm" minlength="5" required>
            </div>

            <input class="signup" type="submit" value="Sign Up">

            <h2 class="loginlabel">Already have an account? <a class="loginlabel" href="{{ route('login') }}">LOG IN</a> here.</h2>
        </form>
        <input type="image" src="" alt="">
    </main>

    <!-- JavaScript -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="{{ asset('js/functions.js') }}"></script>

</body>

</html>
