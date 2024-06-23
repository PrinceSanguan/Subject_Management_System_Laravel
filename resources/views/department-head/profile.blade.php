<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUPC Administration: Add Subject</title>



    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--CSS Custom -->
    <link rel="stylesheet" href="{{asset('css/h_profile.css')}}">

    <!--FONTS-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <!--ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="icon" href="{{asset('images/tuplogo.png')}}">

</head>

<body>


    <nav class="navbar navbar-expand-lg" id="navbarnavbar">
        <div class="navbarLagayan">
            <img src="{{asset('images/tuplogo.png')}}" alt="TUPLogo.png" width="30" height="30">
            <a class="nav-link" href="{{route('department-head.profile')}}">Technological University of the Philippines - <span style="color: #E2435E; font-weight: 500;"> Assist</span></a>
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
                        <a class="nav-link" href="{{route('department-head.profile')}}" id="profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('department-head.subject')}}" id="">Subjects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('department-head.logs')}}" id="">Logs</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('department-head.adding')}}" id="" style="display: flex;">Adding<span></i></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('department-head.dropping')}}" id="">Dropping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('department-head.transfer')}}" id="">Transfer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{%url 'TupAssistApp:logout'%}" id="logoutbutton">Logout</a>
                    </li>
                </ul>
            </form>
            
        </div>
    </nav>


    <div class="bg-container">
        <div class="welcome">Welcome, Joe Bidden!</div>

        <div class="content">
            <h1>Profile Information</h1>

            <form action="/changeheadinfo" method="post">

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
                            <option value="Department of Math and Science">Department of Math and Science</option>
                            <option value="Department of Liberal Arts">Department of Liberal Arts</option>
                          </select>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block" id="button_h" style="margin-top:30px;">Update</button>
            </form>
            <h1 style="margin-top:30px;">Change Password</h1>


            <form method="post" action="/changepassword2" style="margin-top:5%; margin-bottom: 5%;">

                <div class="container">
   
                </div>
                <button type="submit" style="margin-top:10px;" class="btn btn-primary btn-lg btn-block" id="button_h">Change Password</button>
            </form>



        </div>


    </div>




    <!--JAVASCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script>
        // Filter 
        $(".filter select").on('change', function() {
            var filters = $.map($(".filter select").toArray(), function(e) {
                return $(e).val();
            }).join(".");
            $("tbody").find("tr").hide();
            $("tbody").find("tr." + filters).show();

        });
        // Reset
        $('button').on('click', function() {
            $(".filter select").val($("option:first").val());
            $("tbody").find("tr").show();
        });
    </script>

</body>

</html>