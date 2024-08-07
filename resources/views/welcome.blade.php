<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technological University of the Philiipines</title>
    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--CSS Custom -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <!--ICONS-->
    <link rel="icon" href="{{asset('images/tuplogo.png')}}">
    <!-- SHOW PASSWORD -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <style>
        #loading {
            position: fixed;
            width: 100%;
            height: 100vh;
            background: #fff url('../../static/images/1495.gif') no-repeat center center;
            z-index: 9999;
            }

        .bg-container {
            width: 100%;
            height: 100%;
            background-image: url("{{ asset("images/ECECEC.jpg") }}");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            padding: 8% 30% 10% 20%;
}

    </style>

</head>

<body>
    <div class="bg-container">

        @if(session('error'))
        <div class="alert alert-danger" style="font-size: 18px; padding: 20px;">
            {{ session('error') }}
        </div>
        @endif

        @if(session('success'))
        <div id="success-alert" class="alert alert-success" style="font-size: 18px; padding: 20px;">
            {{ session('success') }}
        </div>
        
        <script>
            setTimeout(function() {
                document.getElementById('success-alert').style.display = 'none';
            }, 5000);
        </script>
        @endif

        <!-----------------------------------LOGIN FORM------------------------------------------------------------>
        <form action="{{ route('login.form') }}" method="post">
            @csrf
            <img class="mb4" src="{{asset('images/tuplogo.png')}}" alt="tuplogo" width="100" height="100">
            <h1 class="tup-label">TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES</h1>
            <h1 class="assist-label">ASSIST</h1>
            <h1 class="adt-label">Add, drop, or transfer your subject all in one place</h1>

            <div class="inputs">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Gsfe Account" required>
                </div>

                <div class="form-group">
                    <div id="lagayan1">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        <span><i class="bi bi-eye-slash" id="togglePassword" style="font-size: 28px; margin-top: -50px; margin-left: -50px; cursor: pointer;"></i></span>
                    </div>

                </div>
            </div>
            <input class="login" type="submit" name="login" value="Login">
        </form>
        <!-----------------------------------LOGIN FORM------------------------------------------------------------>

    </div>

    <div id="loading"></div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);

            // toggle the icon
            this.classList.toggle("bi-eye");
        });
    </script>

    <script>
        jQuery(document).ready(function() {
            jQuery('#loading').fadeOut(2000);
        });
    </script>



</body>

</html>