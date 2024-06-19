<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Technological University of the Philippines</title>

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <!--CSS Custom -->
    <link rel="stylesheet" href="{{asset('css/student.css')}}">

    <!--FONTS-->
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">

    <!--ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="icon" href="{{ asset('images/tuplogo.png') }}">

    <style>
        .floating-print-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #e2435e;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .floating-print-button:hover {
            background-color: #d32f2f;
            cursor: pointer;
        }
    </style>
</head>

<body onresize="openpage()">
    <nav class="navbar navbar-expand-lg" id="tupcnav">
        <img src="{{ asset('images/tuplogo.png') }}" width="50" height="50" alt="tuplogo">
        <a class="navbar-brand" href="index.html" id="atech">TECHNOLOGICAL UNIVERSITY <br> OF THE PHILIPPINES</a>

        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
            <form class="d-flex" id="logoutflex">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('student.profile') ? 'active' : '' }}" href="{{ route('student.profile') }}" id="navbutton">PROFILE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('adding') ? 'active' : '' }}" href="" id="navbutton">ADDING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('dropping') ? 'active' : '' }}" href="" id="navbutton">DROPPING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('transfer') ? 'active' : '' }}" href="" id="navbutton">TRANSFER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" id="logoutbutton">LOGOUT</a>
                    </li>
                </ul>
            </form>
        </div>

        <i class="bi bi-person-circle" onclick="details_hide_show()"></i>
    </nav>

    <section id="section">
        <div class="studentinfostatus" id="studentinfostatus">
            <div class="studentinfo">
                <div class="info">
                    <label>Student Number:</label>
                    <label>Name:</label>
                    <label>Year Course and Section:</label>
                </div>
                <div class="data">
                    <label></label>
                    <label></label>
                    <label></label>
                </div>
            </div>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="" id="logoutbutton1">Logout</a>
                </li>
            </ul>
        </div>
    </section>

    <section>
        <div class="tab-content" id="myTabContent">
            <div class="tableborder">
                <table>
                    <legend>SUBJECTS APPROVE AND DECLINED</legend>
                    <thead>
                        <th>STUDENT ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>PROGRAM</th>
                        <th>YEAR AND SECTION</th>
                        <th>APPROVE</th>
                        <th>DECLINED</th>
                    </thead>
                    <tbody id="fyfs">
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section>
        <div class="tab-content" id="myTabContent">
            <div class="tableborder">
                <table>
                    <legend>PLOT SCHEDULE</legend>
                    <thead>
                    </thead>
                    <tbody id="fyfs">
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <button class="floating-print-button" onclick="window.print();">
        <i class="bi bi-printer"></i>
    </button>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
