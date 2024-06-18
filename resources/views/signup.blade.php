<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-QQ6RQTLDpOoGh6zyq0E3Y6d5M6Z2Ws5Pc1Y2MWo3RpDNGuZ6w/2TJUoX4N0wcmrLkbHgbhodkV2NqZFlAfJ+/Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Laravel asset function for CSS and JS -->
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    <link rel="icon" href="{{ asset('images/tuplogo.png') }}">

    <!-- Bootstrap core CSS -->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body class="text-center">
    <main>
        <img class="mb4" src="{{ asset('images/tuplogo.png') }}" alt="tuplogo" width="100" height="100">
        <h1 class="create">TECHNOLOGICAL UNIVERSITY OF THE PHILIPPINES-CAVITE CAMPUS</h1>
        <h1 class="manage">ADDING, DROPPING and TRANSFERRING the SUBJECT all in one place</h1>
        <form name="signup_form" action="">
            <div class="formGroup1">

                <div class="form-group1">
                    <input type="text" class="form-control" name="firstName"
                        placeholder="First name" required>
                </div>

                <div class="form-group1a">
                    <input type="text" class="form-control" name="lastName"
                        placeholder="Last name" required>
                </div>

            </div>

            <div class="formGroup2">

                <div class="form-group2">
                    <input type="text" class="form-control" name="studentNumber"
                        placeholder="TUPC-XX-XXXX" required>
                </div>

                <div class="form-group2a">
                    <select class="custom-select mr-sm-2" name="section" required>
                        <option value="" disabled selected>Course</option>
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

            <div class="formGroup2">
                <div class="form-group2">
                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="form-group2a">
                    <select class="custom-select mr-sm-2" name="yearAndSection" required>
                        <option value="" disabled selected>Year and Section</option>
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

            <div class="form-group" style="display: grid; row-gap: 10px;">
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Password" minlength="6"
                        required>
                    <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>

                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Confirm Password"
                        minlength="6" required>
                    <button type="button" class="btn btn-outline-secondary" id="toggleConfirmPassword">
                        <i class="fas fa-eye"></i>
                    </button>
                </div>

            </div>

            <input class="signup" type="submit" value="SUBMIT">
        </form>
    </main>

    <!-- JavaScript -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/functions.js') }}"></script>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('password1');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });

        // Toggle confirm password visibility
        document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
            const confirmPasswordInput = document.getElementById('confirmpassword');
            const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPasswordInput.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    </script>

</body>

</html>
