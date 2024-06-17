<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Log In</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <!--FONTS-->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!--CSS Custom -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!--ICONS-->
    <link rel="icon" href="{{ asset('images/tuplogo.png') }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        .forgot-password {
            text-align: right;
            margin-top: 10px;
        }

        .password-wrapper {
            position: relative;
        }

        .password-wrapper input {
            padding-right: 30px;
        }

        .password-wrapper .fa-eye, 
        .password-wrapper .fa-eye-slash {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>

</head>

<body class="text-center">

    <form name="login_form" action="">
        <img class="mb4" src="{{asset('images/tuplogo.png')}}" alt="tuplogo" width="100" height="100">
        <h1 class="loglabel">TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES-CAVITE CAMPUS</h1>
        <h1 class="manage">ADDING, DROPPING and TRANSFERRING the SUBJECT all in one place</h1>
        <div class="ematpass">
            <div class="form-group">
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Username or Email" required>
            </div>

            <div class="form-group password-wrapper">
                <input type="password" class="form-control" id="password" minlength="5" placeholder="Password" required>
                <i class="fas fa-eye" id="togglePassword"></i>
            </div>
        </div>

        <div class="forgot-password">
            <a href="forgot-password.html">Forgot Password?</a>
        </div>
        
        <input class="login" type="submit" value="LOG IN">
        <input id="signupButton" class="signup" type="button" value="SIGN UP">
    </form>
    

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="{{asset('js/functions.js')}}"></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            // Toggle the eye slash icon
            this.classList.toggle('fa-eye-slash');
        });
    </script>

    <script>
        document.getElementById('signupButton').onclick = function() {
            // Redirect to the signup route
            window.location.href = '/signup'; // Replace '/signup' with your actual signup route
        };
    </script>

</body>

</html>
