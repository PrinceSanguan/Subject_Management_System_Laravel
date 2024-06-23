<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUPC Administration: History Logs</title>



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
                    <a class="nav-link" href="{{route('department-head.subject')}}" id="">Subjects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('department-head.logs')}}" id="subject">Logs</a>
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
                <p style="font-weight: bold;">HISTORY LOGS</p>
            </div>

            <div style="overflow-x:auto; margin-bottom:2%; margin-top:2%;">
                <table id="table_id" class="display">
                    <thead>
                        <th>STAFF ID</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>EMAIL</th>
                        <th>USER ROLE</th>
                        <th>PROGRAM</th>
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
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>

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


    <!--DATATABLES-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>


</body>

</html>