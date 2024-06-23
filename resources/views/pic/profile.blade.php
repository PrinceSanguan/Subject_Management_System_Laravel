<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUPC Administration: All Subjects</title>



    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--CSS Custom -->
    <link rel="stylesheet" href="{{asset('css/p-profile.css')}}">

    <!--FONTS-->
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">

    <!--ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="icon" href="{{asset('images/tuplogo.png')}}">


</head>

<body>

    <nav class="navbar navbar-expand-lg" id="navbarnavbar">
        <div class="navbarLagayan">
            <img src="{{asset('images/tuplogo.png')}}" alt="TUPLogo.png" width="30" height="30">
            <a class="nav-link" href="{{route('pic.profile')}}">Technological University of the Philippines - <span style="color: #E2435E; font-weight: 500;"> Assist</span></a>
            <div class="lagayanNgButton">
                <button class="navbar-toggler navbar-light" type="button" style="background-color: transparent;" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">

            <form class="d-flex">
                <ul class="navbar-nav mr-auto" id="center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pic.profile')}}" id="profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pic.adding')}}" id="">Adding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('pic.request')}}" id="">Dropping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{%url 'TupAssistApp:logout'%}" id="logoutbutton">Logout</a>
                    </li>
                </ul>
            </form>

        </div>
    </nav>

    <div class="bg-container">
        <div class="welcome">
            <p>Welcome, Joe Bidden!</p>
            <p>BSBA MAnagement</p>
        </div>

        <div class="content">
            <h1>Profile Information</h1>

            <form action="/changepicinfo" method="post">

                <div class="form-group">
                    <label for="studID">Access ID:</label>
                    <input type="text" class="form-control" id="studID" name="studID" value="" readonly>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Address/Username:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" value="" readonly>
                </div>
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="" readonly>
                </div>
                <div class="form-group">
                    <label for="first_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="" readonly>
                </div>
                <div class="form-group">
                    <label for="department">Department:</label>
                    <select class="custom-select" id="department" name="department">
                        <option selected></option>
                        <option value="Department of Engineering">Department of Engineering</option>
                        <option value="Department of Industrial Technology">Department of Industrial Technology</option>
                        <option value="Department of Industrial Education">Department of Industrial Education</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="course">Course:</label>
                    <small id="course" class="form-text text-muted">Ex. BET-COET</small>
                    <input type="text" class="form-control" id="course" name="course" value="">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top:30px;">Update</button>
            </form>

            <h1 style="margin-top:30px;">Change Password</h1>


            <form method="post" action="/changepassword1" style="margin-top:5%; margin-bottom: 5%;">

                <div class="container">

                </div>
                <button type="submit" style="margin-top:10px;" class="btn btn-primary btn-lg btn-block">Change Password</button>
            </form>



        </div>
    </div>


    <!--JAVASCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


</body>

</html>