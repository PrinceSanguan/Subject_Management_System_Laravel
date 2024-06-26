<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TUP-ASSIST </title>


    <!-- DROPDOWN BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/s_profile.css')}}">


    <!-- icon sa bar tab and fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images/tuplogo.png')}}" type="image/x-icon">
</head>

<body>
    <nav class="navbar navbar-expand-lg" id="navbarnavbar">
        <div class="navbarLagayan">
            <img src="{{asset('images/tuplogo.png')}}" alt="TUPLogo.png" width="30" height="30">
            <a class="nav-link" href="">Technological University of the Philippines - <span style="color: #E2435E; font-weight: 500;"> Assist</span></a>
            <div class="lagayanNgButton">
                <button class="navbar-toggler navbar-light" type="button" style="background-color: transparent;" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">

            <form class="d-flex">
                <ul class="navbar-nav mr-auto" id="center">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('student.profile')}}" id="profile">Profile<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.adding')}}" id="">Adding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.dropping')}}" id="">Dropping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.transfer')}}" id="">Transfer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="logoutbutton">Logout</a>
                    </li>
                </ul>
            </form>
        </div>
    </nav>



    <div class="bg-container">
        <div class="bodybody">

            <div class="innerBody">
                <h1>Profile Information</h1>


                <form action="/changestudentinfo" method="post">
                    <div class="form-group">
                        <label for="studID">Student ID:</label>
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
                    <div class="row" id="section_col">
                        <div class="col">
                            <label for="course">Course:</label>
                            <small id="course" class="form-text text-muted">Ex. BET-COET</small>
                            <input type="text" class="form-control" id="course" name="course" value="">
                        </div>
                        <div class="col">
                            <label for="year">Year Level:</label>
                            <small id="year" class="form-text text-muted">Ex. 1</small>
                            <input type="number" class="form-control" id="year" name="year" value="" min="1" max="5">
                        </div>
                        <div class="col">
                            <label for="section">Section:</label>
                            <small id="section" class="form-text text-muted">Ex. A or B</small>
                            <input type="text" class="form-control" id="section" name="section" value="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="button_s" style="margin-top:30px;">Update</button>
                </form>

                <h1 style="margin-top:30px;">Change Password</h1>


                <form method="post" action="/changepassword" style="margin-top:5%; margin-bottom: 5%;">

                    <div class="container">

                    </div>
                    <button type="submit" style="margin-top:10px;" class="btn btn-primary btn-lg btn-block" id="button_s">Change Password</button>
                </form>


            </div>
        </div>
    </div>








    <!-- bootstrap na js: yung seperate -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <!-- Messages -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>