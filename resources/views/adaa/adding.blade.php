<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUPC ADAA: Adding</title>

    <!-- Dashboard -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('css/something.css')}}">

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--CSS Custom -->
    <link rel="stylesheet" href="{{asset('css/adaa_request.css')}}">

    <!--ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="icon" href="{{asset('images/tuplogo.png')}}">

    <!--DATATABLES-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

</head>


<body>

    <nav class="navbar navbar-expand-lg" id="navbarnavbar">
        <div class="navbarLagayan">
            <img src="{{asset('images/tuplogo.png')}}" alt="TUPLogo.png" width="30" height="30">
            <a class="nav-link" href="{{route('adaa.profile')}}">Technological University of the Philippines - <span style="color: #E2435E; font-weight: 500;"> Assist</span></a>
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
                    <a class="nav-link" href="{{route('adaa.profile')}}" id="">Profile</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('adaa.adding')}}" id="adding" style="display: flex;">Adding<span></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('adaa.dropping')}}" id="">Dropping</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('adaa.transfer')}}" id="">Transfer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="" id="logoutbutton">Logout</a>
                </li>
            </ul>
        </form>

        </div>
    </nav>





    <div class="bg-container">
        <div class="welcome">
            <p>Welcome, Joe Biden!</p>
            <p>Joe@gmail.com</p>
        </div>

        <div class="content">
            <div class="add-request-label">
                <p style="font-weight: bolder;">ADD SUBJECT REQUESTS:</p>
            </div>

            <!-- Dashboard -->
            <div>
                <div class="row">
                    <div class="col-md-6 stretch-card grid-margin">
                        <div class="card bg-gradient-info card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{asset('images/circle.png')}}" class="card-img-absolute" alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">Pending <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                </h4>
                                <h2 class="mb-5"></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card grid-margin">
                        <div class="card bg-gradient-success card-img-holder text-white">
                            <div class="card-body">
                                <img src="{{asset('images/circle.png')}}" class="card-img-absolute" alt="circle-image" />
                                <h4 class="font-weight-normal mb-3">Approved <i class="mdi mdi-diamond mdi-24px float-right"></i>
                                </h4>
                                <h2 class="mb-5"></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="overflow-x:auto;" id="table">
                <!--HTML code to display data in tabular format-->
                <table class="table table-striped" id="table_id" style="width: 100%;">
                    <thead>
                        <th>STUDENT ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th style="text-align: center;">PROGRAM</th>
                        <th style="text-align: center;">YEAR & SECTION</th>
                        <th>STATUS</th>
                        <th style="text-align: center;">ACTION</th>
                    </thead>

                    <tbody>

                        <tr class="all">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="text-align: center;"></td>
                            <td style="text-align: center;"></td>
                            <td></td>
                            <td class="action"><a href="" style="text-align: center;"><i class="bi bi-pencil"></i></a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>


    </div>


    <!--JAVASCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>


    <!--DATATABLES-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>

</body>

</html>