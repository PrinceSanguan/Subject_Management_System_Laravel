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
    <link rel="stylesheet" href="{{asset('css/a_request.css')}}">

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
            <a class="nav-link" href="{{route('admin.dashboard')}}">Technological University of the Philippines - <span style="color: #E2435E; font-weight: 500;"> Assist</span></a>
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
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.account')}}" id="">Accounts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.adding')}}" id="">Adding</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.dropping')}}" id="">Dropping</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.transfer')}}" id="transferring">Transfer</a>
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

            <div class="add-request-label" style="display: flex; justify-content: space-between; padding-bottom: 20px;">
                <p style="font-weight:bold">TRANSFER SUBJECT REQUESTS:</p>
                <input type="button" class="btn btn-primary" value="Generate Report" id="btPrint" onclick="createPDF()">
            </div>


            <div style="overflow-x:auto;" id="tab">


                <table class="table table-bordered" id="table_id" style="width: 100%;">
                    <thead>
                        <tr>
                            <th colspan="5" style="text-align: center;">SUBJECT TO BE TAKEN BY STUDENT</th>
                            <th colspan="4" style="text-align: center;">DEPARTMENT HEAD</th>
                            <th colspan="3" style="text-align: center;">ASSIST. DIRECTOR FOR ACADEMIC AFFAIRS</th>
                            <th colspan="1" style="text-align: center;">REGISTRAR</th>
                        </tr>
                        <tr>
                            <th>SUBJECT</th>
                            <th>SECTION</th>
                            <th>SCHEDULE</th>
                            <th>REASON</th>
                            <th>DATE & TIME</th>
                            <th>ACTION TAKEN</th>
                            <th>REMARK</th>
                            <th>ENDORSED BY</th>
                            <th>DATE & TIME</th>
                            <th>ACTION TAKEN</th>
                            <th>APPROVED BY</th>
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>

                                <a class="btn btn-primary" href="">Enroll</a>
                                <br> 
                                <a class="btn btn-primary disabled" aria-disabled="true">Enroll</a>
                                <br> 
                            </td>
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
        // Filter  inputs
        var $rows = $('#table tr');
        $('#program').keyup(function() {
            var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

            $rows.show().filter(function() {
                var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
                return !~text.indexOf(val);
            }).hide();
        });
    </script>

    <!-- Print PDF -->
    <script>
        function createPDF() {
            var sTable = document.getElementById('tab').innerHTML;

            var style = "<style>";
            style = style + "table {width: 100%;font: 12px Calibri;}";
            style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
            style = style + "td {width: fit-content;";
            style = style + "padding: 2px 3px;text-align: center;}";
            style = style + "</style>";

            // CREATE A WINDOW OBJECT.
            var win = window.open('', '', 'height=700,width=700');

            win.document.write('<html><head>');
            win.document.write('<title>Transfer Subject Requests:</title>'); // <title> FOR PDF HEADER.
            win.document.write(style); // ADD STYLE INSIDE THE HEAD TAG.
            win.document.write('</head>');
            win.document.write('<body>');
            win.document.write(sTable); // THE TABLE CONTENTS INSIDE THE BODY TAG.
            win.document.write('</body></html>');

            win.document.close(); // CLOSE THE CURRENT WINDOW.

            win.print(); // PRINT THE CONTENTS.
        }
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