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
    <link rel="stylesheet" href="{{asset('css/t_requests.css')}}">

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
                      <a class="nav-link" href="{{route('pic.profile')}}" id="">Profile</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('pic.adding')}}" id="">Adding</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('pic.request')}}" id="requests">Dropping</a>
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
            <p>Joe@gmail.com</p>
        </div>

        <div class="content">

            <div class="add-request-label">
                <p>Drop Requests:</p>
            </div>


            <div style="overflow-x: scroll;">
                <table class="table table-bordered" id="table_id" style="width: 100%;">
                    <thead>
                        <tr>
                            <th colspan="5" style="text-align: center;">SUBJECT TO BE DROP BY STUDENT</th>
                            <th colspan="5" style="text-align: center;">TEACHER</th>
                        </tr>
                        <tr>
                            <th>STUDENT</th>
                            <th>SUBJECT</th>
                            <th>SECTION</th>
                            <th>SCHEDULE</th>
                            <th>REASON</th>
                            <th>ACTION TAKEN</th>
                            <th>REMARK</th>
                            <th>REVIEWED BY</th>
                            <th>DATE & TIME</th>
                            <th>ACTION</th>
                        </tr>
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
                            <td></td>
                            <td></td>
                            <td><a class="btn btn-primary" data-toggle="modal" data-target="#editReq">Edit</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>


            <!-- EDIT REQUESTS -->

            <div class="modal fade" id="editReq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/p_edit_sub1" method="post">

                            <div class="modal-body">
                                <div class="form-group" hidden>
                                    <label for="studID_id">Student ID and Transaction No.</label>
                                    <input type="number" class="form-control" id="studID" name="studID" value="">
                                    <input type="number" class="form-control" id="id" name="id" value="">
                                </div>
                                <div class="form-group">
                                    <label for="studID">Student</label>
                                    <input type="text" class="form-control" id="" name="email" value="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" value="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="section">Section</label>
                                    <input type="text" class="form-control" id="section" name="section" value="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="sched">Schedule</label>
                                    <input type="text" class="form-control" id="sched" name="sched" value="" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="subj_teacher_approve">Approval</label>
                                    <select class="custom-select" id="subj_teacher_approve" name="subj_teacher_approve" value="">
                                        <option selected disabled>Choose...</option>
                                        <option value="Approve">Approve</option>
                                        <option value="Decline">Decline</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="subj_teacher_remark">Remark</label>
                                    <input type="text" class="form-control" id="subj_teacher_remark" name="subj_teacher_remark" value="">
                                </div>
                                <div class="form-group">
                                    <label for="subj_teacher_name">Enlisted by:</label>
                                    <input type="text" class="form-control" id="subj_teacher_name" name="subj_teacher_name" value="" readonly>
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