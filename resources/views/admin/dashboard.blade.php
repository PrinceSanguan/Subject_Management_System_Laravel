<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUPC Administrator: Dashboard</title>



    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!--CSS Custom -->
    <link rel="stylesheet" href="{{asset('css/a_dashboard.css')}}">

    <!--ICONS-->
    <link rel="icon" href="{{asset('images/tuplogo.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

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
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admin.dashboard')}}" id="dashboard">Dashboard <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.account')}}" id="">Accounts</a>
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

            <div class="title">
                <p>TRANSACTION STATUS:</p>
            </div>

            <!-- Transaction Status -->
            <div style="overflow-x:auto; margin-bottom:2%;">
                <table class="table table-hover">
                    <thead>
                        <th>TRANSACTION NAME</th>
                        <th>SCHOOL YEAR</th>
                        <th>SEMESTER</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Of Subject</td>
                            <td></td>
                            <td></td>
                            <td><a type="button" href=""></a></td>
                            <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#change">Change</button> </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- CHANGE STATUS -->

            <div class="modal fade" id="change" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Change Status:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/changestatus" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="TransName">Transaction Name</label>
                                    <input type="text" class="form-control" id="TransName" name="TransName" value="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="school_year">School Year</label>
                                    <input type="number" class="form-control" id="school_year" name="school_year" value="">
                                </div>
                                <div class="form-group">
                                    <label for="semester">Semester</label>
                                    <select class="custom-select" id="semester" name="semester" required>
                                        <option value="" selected hidden></option>
                                        <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="custom-select" id="status" name="status" required>
                                        <option value="" selected hidden></option>
                                        <option value="Open">Open</option>
                                        <option value="Close">Close</option>
                                    </select>
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



            <div class="title">
                <p>ALL SUBJECTS:</p>
            </div>

            <div style="overflow-x:auto; margin-bottom:2%;  margin-top:2%;">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>SUBJECT</th>
                            <th>DESCRIPTION</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>



            <!-- Schedule -->
            <div class="title">
                <p>SCHEDULE:</p>
                <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-info-circle"></i></a>
            </div>
            <div class="collapse" id="collapseExample" style="margin-bottom: 10px; margin-top: 10px;">
                <div class="card card-body">
                    Important: <br> When you publish a chart to the web, people can see the data used to create it. Be careful when publishing a chart with private or sensitive info. <br> Any changes you make to the original document will be updated in
                    the published version. The automatic update might take a few minutes. <br> To remove a file from the web, you must stop publishing it. <br> To stop sharing a file with collaborators<br><br> 1. In Google Sheets open a file. <br> 2.
                    At the top, click File and then Share and then Publish to web. <br> 3. Choose a publishing option: <br> 4. Spreadsheet: Publish the entire spreadsheet or individual sheets. You can also choose a publishing format. <br> 5. Click Publish.
                    <br> 6. Copy the URL and send it to anyone you’d like to see the file. Or, embed it into your website.
                </div>
            </div>



            <div style="overflow-x:auto; margin-bottom: 10px; margin-top: 10px;">
                <form action="/import_sched" method="post" style="margin-bottom:2%;">

                    <div class="row" id="schedule_col">
                        <div class="col">
                            <label for="sub_code">Google Sheet Link</label>
                            <input type="text" class="form-control" name="gSheetLink" id="gSheetLink" required>
                        </div>
                        <div class="col">
                            <label for="school_year">School Year</label>
                            <input type="number" class="form-control" name="school_year" id="school_year" placeholder="Ex. 2223" required>
                        </div>
                        <div class="col">
                            <label for="semester">Semester</label>
                            <select class="custom-select" name="semester" id="semester" required>
                                <option selected disabled>Select</option>
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="button">.</label>
                            <input type="submit" class="form-control" id="button" value="Update" required>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Viewing of Schedule -->
            <div style="overflow-x:auto; margin-bottom:2%;">
                <!--Defaul link: https://docs.google.com/spreadsheets/d/e/2PACX-1vTKXalt0LO2MbolP5HnRC-bgP8BAZHKEdd0yoUUoCIksyl4Qhn0femTlD8MWVU_pA/pubhtml?widget=true&amp;headers=false -->

                <iframe src="" width="100%" height="500"></iframe>
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
        });
    </script>



</body>

</html>