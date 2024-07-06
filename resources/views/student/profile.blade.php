<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUP-ASSIST</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/s_profile.css') }}">

    <!-- Icons and Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/tuplogo.png') }}" type="image/x-icon">
</head>

<body>

    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <img src="{{ asset('images/tuplogo.png') }}" alt="TUPLogo.png" width="30" height="30">
            <a class="navbar-brand" href="#">Technological University of the Philippines - <span style="color: #E2435E; font-weight: 500;">Assist</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('student.profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('student.adding') }}">Adding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('student.dropping') }}">Dropping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('student.transfer') }}">Transfer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-container">
        <div class="bodybody">
            <div class="innerBody">
                <h1>Profile Information</h1>

                @if(session('success'))
                <div id="success-alert" class="alert alert-success" style="font-size: 18px; padding: 20px;">
                    {{ session('success') }}
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('success-alert').style.display = 'none';
                    }, 3000);
                </script>
                @endif

                @if(session('error'))
                <div id="error-alert" class="alert alert-danger" style="font-size: 18px; padding: 20px;">
                    {{ session('error') }}
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('error-alert').style.display = 'none';
                    }, 3000);
                </script>
                @endif     

                <form action="{{ route('change.info') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="studID">Student ID:</label>
                        <input type="text" class="form-control" value="{{ $user->studentNumber }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gsfe Account</label>
                        <input type="email" class="form-control" value="{{ $user->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" value="{{ $user->firstName }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" value="{{ $user->lastName }}" readonly>
                    </div>
                    <div class="row" id="section_col">
                        <div class="col">
                            <label for="course">Course:</label>
                            <input type="text" class="form-control" value="{{ $user->course }}" name="course">
                        </div>
                        <div class="col">
                            <label for="year">Year Level:</label>
                            <input type="text" class="form-control" value="{{ $user->year }}" name="year">
                        </div>
                        <div class="col">
                            <label for="section">Section:</label>
                            <input type="text" class="form-control" value="{{ $user->section }}" name="section">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="button_s" style="margin-top: 30px;">Update</button>
                </form>

                <!-- Button to trigger modal -->
                <button type="button" class="btn btn-primary btn-lg btn-block" style="margin-top: 10px;" data-toggle="modal" data-target="#changePasswordModal">
                    Change Password
                </button>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('change.password')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="current_password">Current Password:</label>
                            <input type="password" class="form-control" id="current_password" name="current_password" required>
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password:</label>
                            <input type="password" class="form-control" id="new_password" name="new_password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>