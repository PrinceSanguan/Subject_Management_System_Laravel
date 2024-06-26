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
    <link rel="stylesheet" href="{{asset('css/h_subject.css')}}">

    <!--FONTS-->
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">

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
                    <a class="nav-link" href="{{route('department-head.profile')}}" id="">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('department-head.subject')}}" id="subject">Subjects</a>
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

            <div class="title">
                <p>OFFER SUBJECTS</p>
                <div class="d-flex" style="justify-content: end;">
                    <form class="form-inline" action="/sub_cvs" method="post" enctype="multipart/form-data" id="subcvsfileform" style="gap:10px;">

                        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-info-circle"></i></a>

                        <button type="button" class="btn btn-dark" onclick="document.getElementById('subcvsfile').click()">Upload CSV File</button>
                        <input type="file" style="display:none" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="subcvsfile" id="subcvsfile" required>

                    </form>
                </div>
            </div>

            <!-- NOTE: -->
            <div class="collapse" id="collapseExample" style="margin-bottom: 10px;">
                <div class="card card-body">
                    Reminder: Upload offer subjects of your department using csv file.
                    <br>CSV Format for subject are as follows:
                    <br>Column Header: Deparment Initials/Course, Year, Semester, Shop Number, Description
                    <br>Example data. DIT,1,1,1,Sample Subject Name Lab.
                </div>
            </div>


            <!-- Add 1 Subject -->
            <div class="d-flex" style="justify-content: end; margin-top: 10px;">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                    Add 1 Subject
                </button>
            </div>

            <!-- TABLE -->
            <div style="overflow-x:auto; margin-bottom:2%; margin-top:2%;">
                <table id="table_id" class="display">
                    <thead>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SEMESTER</th>
                        <th>SHOP</th>
                        <th>SUBJECT CODE</th>
                        <th>DESCRIPTION</th>
                        <th>ACTION</th>
                    </thead>

                    <tbody>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button data-toggle="modal" data-target="#editSub" class="btn btn-dark">Edit</button>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- EDIT SUBJECT MODAL -->

    <div class="modal fade" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Subject: </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="/h_edit_subject/" method="post">

                    <div class="modal-body">
                        <div class="form-group">
                            <label for="subject">Subject Code:</label>
                            <input type="text" class="form-control" id="subject" name="subject" value="" readonly>
                            <small id="subject" class="form-text text-muted">
                                Automatically update the subject code depend on program, year, semester, and shop number you input.
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="course">Department/Program:</label>
                            <input type="text" class="form-control" id="course" name="course" value="DIT" value="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="year">Year:</label>
                            <input type="number" class="form-control" id="year" name="year" value="">
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester:</label>
                            <input type="number" class="form-control" id="semester" name="semester" value="">
                        </div>
                        <div class="form-group">
                            <label for="shop">Shop Number:</label>
                            <input type="number" class="form-control" id="shop" name="shop" value="">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" class="form-control" id="description" name="description" value="" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>

        </div>
    </div>



    <!-- ADD SUBJECT MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add 1 Subject</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/h_add_subject/" method="post">
     
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="course">Department/Program:</label> 
                            <input type="text" class="form-control" id="course" name="course" value="DIT" readonly>
                            <input type="text" class="form-control" id="course" name="course" value="DIE" readonly>
                            <input type="text" class="form-control" id="course" name="course" value="DOE" readonly>
                            <input type="text" class="form-control" id="course" name="course" value="DMS" readonly> 
                            <input type="text" class="form-control" id="course" name="course" value="DLA" readonly> 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="year">Year:</label>
                            <input type="number" class="form-control" id="year" name="year">
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester:</label>
                            <input type="number" class="form-control" id="semester" name="semester">
                        </div>
                        <div class="form-group">
                            <label for="shop">Shop Number:</label>
                            <input type="number" class="form-control" id="shop" name="shop">
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" class="form-control" id="description" name="description">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
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

    <!-- Automatic Upload of Files -->
    <script>
        $('#subcvsfile').change(function() {
            $('#subcvsfileform').submit();
        });
    </script>


</body>

</html>