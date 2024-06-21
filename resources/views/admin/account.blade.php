<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUPC Administrator: Adding</title>

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--CSS Custom -->
    <link rel="stylesheet" href="{{asset('css/a_account.css')}}">

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
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dashboard')}}" id="">Dashboard <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admin.account')}}" id="account">Accounts</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('admin.adding')}}" id="">Adding</a>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.dropping')}}" id="">Dropping</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.transfer')}}" id="">Transfer</a>
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
            <p>Welcome, Administrator!</p>
            <p>Joe Biden</p>
        </div>

        <div class="content">

            <!-- Viewing of Accounts -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="font-weight: bold;">STAFF ACCOUNT</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" style="font-weight: bold;">STUDENT ACCOUNT</button>
                </li>
            </ul>


            <div class="tab-content" id="myTabContent" style="overflow-x:auto;">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <!-- List of Staffs -->
                    <div class="title" style="justify-content: end;">
                        <form class="form-inline" action="/staff_acc_cvs" method="post" enctype="multipart/form-data" id="staffcvsfileform" style="gap:10px;">

                            <button type="button" class="btn btn-primary" onclick="document.getElementById('staffcvsfile').click()">Upload CSV File</button>
                            <input type="file" style="display:none" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="staffcvsfile" id="staffcvsfile" required>

                            <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-info-circle"></i></a>
                        </form>
                    </div>
                    <div class="collapse" id="collapseExample" style="margin-bottom: 10px; margin-top: 10px;">
                        <div class="card card-body">
                            Reminder: Import Staff Account with the csv file.
                            <br>CSV Format for staff are as follows:
                            <br>Staff ID, First Name, Last Name, Email, User Role/Position, Derpartment Name.
                            <br>Ex. 100011,Teacher,1,rejay.morada@gsfe.tupcavite.edu.ph,Teacher,Department of Industrial Technology
                        </div>
                    </div>


                    <div style="overflow-x:auto; margin-bottom: 10px;  margin-top: 10px;">
                        <!--HTML code to display data in tabular format-->
                        <table id="table_id" class="display">
                            <thead>
                                <th>STAFF ID</th>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>EMAIL</th>
                                <th>USER ROLE</th>
                                <th>DEPARTMENT</th>
                                <th>LAST LOGIN</th>
                            </thead>
                            <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <!-- Enrolled Students -->
                    <div class="title" style="justify-content: end;">
                        <form class="form-inline" action="/student_acc_cvs" method="post" enctype="multipart/form-data" id="studcvsfileform" style="gap:10px;">

                            <button type="button" class="btn btn-primary" onclick="document.getElementById('studcvsfile').click()">Upload CSV File</button>
                            <input type="file" style="display:none" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="studcvsfile" id="studcvsfile" required>



                            <a data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-info-circle"></i></a>
                        </form>
                    </div>
                    <div class="collapse" id="collapseExample1" style="margin-bottom: 10px; margin-top: 10px;">
                        <div class="card card-body">
                            Reminder: Import Student Accounts with the csv file.
                            <br>CSV Format for staff are as follows:
                            <br>Student ID, First Name, Last Name, Email
                            <br>Ex. 100011,Teacher,1,rejay.morada@gsfe.tupcavite.edu.ph
                        </div>
                    </div>

                    <div style="overflow-x:auto; margin-bottom: 10px;  margin-top: 10px;">
                        <!--HTML code to display data in tabular format-->
                        <table id="table_id_1" class="display">
                            <thead>
                                <th>STUDENT NUMBER</th>
                                <th>FIRST NAME</th>
                                <th>LAST NAME</th>
                                <th>EMAIL</th>
                                <th>SECTION</th>
                                <th>LAST LOGIN</th>
                            </thead>
                            <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                    <!-- CREATE ACCOUNT MANUAL -->
                    <form method="post" action="/a_staff_create" style="margin-bottom: 20px; margin-top: 20px; padding: 0 10% 0 10%;">


                        <div class="formGroup1">
                            <div class="form-group1">

                            </div>
                            <div class="form-group1a">

                            </div>
                        </div>
                        <div class="formGroup2">
                            <div class="form-group2">

                            </div>
                            <div class="form-group2a">

                            </div>
                        </div>

                        <div class="formGroup3">
                            <div class="form-group3">

                            </div>
                            <div class="form-group3a">

                            </div>
                        </div>

                        <div class="formGroup4">
                            <div class="form-group4">

                            </div>
                            <div class="form-group4a">

                            </div>
                            <div class="form-group4b">

                            </div>
                        </div>

                        <div class="form-group5">

                        </div>

                        <div class="form-group6">

                        </div>

                        <div class="form-group7">

                        </div>


                        <button id='sub_button' type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top: 30px;">Submit</button>
                    </form>

                </div>
            </div>









        </div>


    </div>


    <!--JAVASCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--DATATABLES-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
            $('#table_id_1').DataTable();
        });
    </script>

    <!-- Automatic Upload of Files -->
    <script>
        $('#staffcvsfile').change(function() {
            $('#staffcvsfileform').submit();
        });
        $('#studcvsfile').change(function() {
            $('#studcvsfileform').submit();
        });
    </script>

</body>

</html>