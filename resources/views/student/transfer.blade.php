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
    <link rel="stylesheet" href="{{asset('css/s_transferring.css')}}">


    <!-- icon sa bar tab and fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('images/tuplogo.png')}}" type="image/x-icon">

    <!--DATATABLES-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg" id="navbarnavbar">
        <div class="navbarLagayan">
            <img src="{{asset('images/tuplogo.png')}}" alt="TUPLogo.png" width="30" height="30">
            <a class="nav-link" href="url 'TupAssistApp:s_dropping'">Technological University of the Philippines - <span style="color: #E2435E; font-weight: 500;"> Assist</span></a>
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
                        <a class="nav-link" href="{{route('student.profile')}}" id="profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.adding')}}" id="">Adding<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('student.dropping')}}" id="">Dropping</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('student.transfer')}}" id="dropping">Transfer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('logout')}}" id="logoutbutton">Logout</a>
                    </li>
                </ul>
            </form>

        </div>
    </nav>



    <div class="bg-container">
        <div class="bodybody">

            <div class="boxes">

                <div class="studentDetails">
                    <div class="innerStudentDetails">
                        <div class="lagayan1">
                            <p id="p1">Name:</p>
                            <p style="text-align: end;">{{$user->firstName}} {{$user->lastName}}</p>
                        </div>
                        <div class="lagayan2">
                            <p id="p1">Student Number:</p>
                            <p style="text-align: end;">{{$user->studentNumber}}</p>
                        </div>
                        <div class="lagayan3">
                            <p id="p1">Year Course and Section:</p>
                            <p style="text-align: end;">{{$user->year}} {{$user->course}} {{$user->section}}</p>
                        </div>
                    </div>
                </div>

                <div class="progressbox">
                    <div class="lagayanNgStatus">
                        <p id="p1">Status:</p>
                        <p style="text-align: center;">Pending</p>
                    </div>
                    <div class="isapanglagayan">
                        <a role="button" onclick="createPDF()"><img src="{{asset('images/print_pdf.png')}}" alt="print_pdf"></a>
                    </div>
                </div>

            </div>

            <div class="dividerLangs"></div>

            <div style="overflow-x:auto;" class="innerBody">

                <div class="alert alert-danger" role="alert">
                    Notice: You can't proceed to in Transfer Subject Transaction if your Personal Information is not complete.
                </div>

                <div>

                    <!-- Transaction Status -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="school_year">School Year</label>
                            <input type="number" class="form-control" id="school_year" value="" readonly>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="semester">Semester</label>
                            <input type="number" class="form-control" id="semester" value="" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="semester">Status</label>
                            <input type="text" class="form-control" id="semester" value="" readonly>
                        </div>
                    </div>

                    <div class="alert alert-danger" role="alert" id="TransferTransaction">
                        Notice: Transferring Transaction is Closed.
                    </div>


                    <h1>Transfer Subject Transaction Form</h1>

                    <div id="multi-step-form-container">
                        <!-- Form Steps / Progress Bar -->
                        <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                            <!-- Step 1 -->
                            <li class="form-stepper-active text-center form-stepper-list" step="1">
                                <a class="mx-2">
                                    <span class="form-stepper-circle">
                                        <span>1</span>
                                    </span>
                                    <div class="label">Subject to be transfer</div>
                                </a>
                            </li>
                            <!-- Step 2 -->
                            <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                                <a class="mx-2">
                                    <span class="form-stepper-circle text-muted">
                                        <span>2</span>
                                    </span>
                                    <div class="label text-muted">Wait for Department head, and ADDA, and Registrar's Action</div>
                                </a>
                            </li>
                        </ul>




                        <!-- Step 1 Content -->
                        <section id="step-1" class="form-step">
                            <h2 class="font-normal">Subject to be transfer</h2>
                            <!-- Step 1 input fields -->

                            <div class="mt-3" style="overflow-x: scroll;">
                                <table class="table table-bordered" id="disable" style="width: 100%;">
                                    <thead>
                                        <th>SUBJECT</th>
                                        <th>SECTION</th>
                                        <th>SCHEDULE</th>
                                        <th>REASON</th>
                                        <th>ACTION</th>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="d-flex" style="width: 100%;">
                                                <a type="button" class="btn btn-danger" href="}">Delete</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <form method="post" action="/s_trans_sub">
 
                                                <td>
                                                    <select class="custom-select" name="subject" required>
                                                            <option selected disabled hidden>Choose...</option>
                                                             for i in subs 
                                                            <option value=""</option>
                                                             endfor 
                                                        </select>
                                                </td>
                                                <td hidden><input type="text" class="form-control" name="school_year" value="" required></td>
                                                <td hidden><input type="text" class="form-control" name="semester" value="" required></td>
                                                <td><input type="text" class="form-control" name="section" placeholder="Ex. BET-COET-4B" required></td>
                                                <td class="d-flex" style="width: 95%;"><input type="text" class="form-control" name="schedule" id="schedule" readonly required> <a id="button_s" class="btn btn-primary" data-toggle="modal" data-target="#editSub">Edit</a> </td>
                                                <td><textarea class="form-control" id="reason" name="reason" required></textarea></td>
                                                <td><button type="submit" class="btn btn-primary" id="button_s">+ Add</button></td>
                                            </form>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>

                            <div class="mt-3">
                                <br>
                                <form method="post" action="/s_step1_submit_t">
                                     csrf_token   for i in transReq 
                                    <input type="text" name="not_empty" value="" hidden>  endfor 
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="button_s">Submit</button>
                                </form>
                            </div>


                            <div class="mt-3">

                                <button class="button btn-navigate-form-step" type="button" step_number="2">Next</button>
                            </div>

                        </section>



                        <!-- Step 2 Content, default hidden on page load. -->
                        <section id="step-2" class="form-step d-none">
                            <h2 class="font-normal">Wait for Department head, and ADDA, and Registrar's Action</h2>
                            <!-- Step 2 input fields -->
                            <div class="mt-3" style='overflow-x: scroll;' id="tab">
                                <table class="table table-bordered" id="table_id" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th colspan="5" style="text-align: center;">SUBJECT TO BE TAKEN BY STUDENT</th>
                                            <th colspan="4" style="text-align: center;">DEPARTMENT HEAD</th>
                                            <th colspan="3" style="text-align: center;">ASSIST. DIRECTOR FOR ACADEMIC AFFAIRS</th>
                                            <th colspan="3" style="text-align: center;">REGISTRAR</th>
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
                                            <th>ACTION TAKEN</th>
                                            <th>ENLISTED BY</th>
                                            <th>DATE & TIME</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                         for i in transReq 
                                        <tr>
                                            <td>description</td>
                                            <td>section</td>
                                            <td>sched</td>
                                            <td>reason</td>
                                            <td>req_date</td>
                                            <td>head_is_approve</td>
                                            <td>head_remark</td>
                                            <td>head_name</td>
                                            <td>head_date</td>
                                            <td>admin_approve</td>
                                            <td>admin_name</td>
                                            <td>admin_date</td>
                                            <td>reg_action</td>
                                            <td>enlist_by</td>
                                            <td>reg_date</td>
                                        </tr>
                                         endfor 
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-3">
                                <button class="button btn-navigate-form-step" type="button" step_number="1">Prev</button>
                            </div>
                        </section>

                    </div>
                      
                </div>




            </div>
        </div>
    </div>



    <!-- Edit Schedule Modal -->
    <div class="modal fade" id="editSub" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Schedule</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Monday</span>
                        </div>
                        <input type="time" class="form-control" aria-describedby="basic-addon1" id="mon_start">
                        <input type="time" class="form-control" aria-describedby="basic-addon1" id="mon_end">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Tuesday</span>
                        </div>
                        <input type="time" class="form-control" aria-describedby="basic-addon1" id="tue_start">
                        <input type="time" class="form-control" aria-describedby="basic-addon1" id="tue_end">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Wednesday</span>
                        </div>
                        <input type="time" class="form-control" aria-describedby="basic-addon1" id="wed_start">
                        <input type="time" class="form-control" aria-describedby="basic-addon1" id="wed_end">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Thurdsay</span>
                        </div>
                        <input type="time" class="form-control" aria-describedby="basic-addon1" id="thu_start">
                        <input type="time" class="form-control" aria-describedby="basic-addon1" id="thu_end">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Friday</span>
                        </div>
                        <input type="time" class="form-control" aria-describedby="basic-addon1" id="fri_start">
                        <input type="time" class="form-control" aria-describedby="basic-addon1" id="fri_end">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Saturday</span>
                        </div>
                        <input type="time" class="form-control" aria-describedby="basic-addon1" id="sat_start">
                        <input type="time" class="form-control" aria-describedby="basic-addon1" id="sat_end">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" onclick="myFunction()" data-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>





    <footer id="footerfooter">
        <!-- up and down button -->
        <button id="sched-up" title="Show Schedule"><img src="{{asset('images/double-up-arrow.png')}}" alt=""></button>
        <button id="sched-down" title="Hide Schedule"><img src="{{asset('images/double-down-arrows.png')}}" alt=""></button>

        <div style="overflow-x:auto;" id="datadata">
             for e in sched 
            <iframe src="" style="width: 100%; height: 100%; border: 1px solid #E2435E"></iframe> endfor 
        </div>

    </footer>


    <!-- bootstrap na js: yung seperate -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script>
        console.log("chichi")

        document.getElementById("sched-up").addEventListener("click", function() {
            document.getElementById("sched-down").style.display = 'flex';
            document.getElementById("sched-up").style.display = "none";
            document.getElementById("footerfooter").style.height = "500px";
            document.getElementById('datadata').style.display = "grid";

        })

        document.getElementById("sched-down").addEventListener("click", function() {
            document.getElementById("sched-up").style.display = 'flex';
            document.getElementById("sched-down").style.display = "none";
            document.getElementById("footerfooter").style.height = "40px";
            document.getElementById('datadata').style.display = "none";
        })
    </script>

    <!--DROPDOWN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

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


    <!-- Transcation Status -->
     if trans.status == 'Open' 
    <script>
        $("#multi-step-form-container").show();
        $("#TransferTransaction").hide();
    </script>

     elif trans.status == 'Close' 
    <script>
        $("#multi-step-form-container").hide();
        $("#TransferTransaction").show();
    </script>   



    <!-- ADD SCHEDULE NI REJAY -->
    <script>
        function myFunction() {

            var a = document.getElementById("mon_start").value;
            var b = document.getElementById("mon_end").value;
            var c = document.getElementById("tue_start").value;
            var d = document.getElementById("tue_end").value;
            var e = document.getElementById("wed_start").value;
            var f = document.getElementById("wed_end").value;
            var g = document.getElementById("thu_start").value;
            var h = document.getElementById("thu_end").value;
            var i = document.getElementById("fri_start").value;
            var j = document.getElementById("fri_end").value;
            var k = document.getElementById("sat_start").value;
            var l = document.getElementById("sat_end").value;

            const a12hr = new Date('1970-01-01T' + a + 'Z').toLocaleTimeString('en-US', {
                timeZone: 'UTC',
                hour12: true,
                hour: 'numeric',
                minute: 'numeric'
            });

            const b12hr = new Date('1970-01-01T' + b + 'Z').toLocaleTimeString('en-US', {
                timeZone: 'UTC',
                hour12: true,
                hour: 'numeric',
                minute: 'numeric'
            });

            const c12hr = new Date('1970-01-01T' + c + 'Z').toLocaleTimeString('en-US', {
                timeZone: 'UTC',
                hour12: true,
                hour: 'numeric',
                minute: 'numeric'
            });

            const d12hr = new Date('1970-01-01T' + d + 'Z').toLocaleTimeString('en-US', {
                timeZone: 'UTC',
                hour12: true,
                hour: 'numeric',
                minute: 'numeric'
            });

            const e12hr = new Date('1970-01-01T' + e + 'Z').toLocaleTimeString('en-US', {
                timeZone: 'UTC',
                hour12: true,
                hour: 'numeric',
                minute: 'numeric'
            });

            const f12hr = new Date('1970-01-01T' + f + 'Z').toLocaleTimeString('en-US', {
                timeZone: 'UTC',
                hour12: true,
                hour: 'numeric',
                minute: 'numeric'
            });

            const g12hr = new Date('1970-01-01T' + g + 'Z').toLocaleTimeString('en-US', {
                timeZone: 'UTC',
                hour12: true,
                hour: 'numeric',
                minute: 'numeric'
            });

            const h12hr = new Date('1970-01-01T' + h + 'Z').toLocaleTimeString('en-US', {
                timeZone: 'UTC',
                hour12: true,
                hour: 'numeric',
                minute: 'numeric'
            });

            const i12hr = new Date('1970-01-01T' + i + 'Z').toLocaleTimeString('en-US', {
                timeZone: 'UTC',
                hour12: true,
                hour: 'numeric',
                minute: 'numeric'
            });

            const j12hr = new Date('1970-01-01T' + j + 'Z').toLocaleTimeString('en-US', {
                timeZone: 'UTC',
                hour12: true,
                hour: 'numeric',
                minute: 'numeric'
            });

            const k12hr = new Date('1970-01-01T' + k + 'Z').toLocaleTimeString('en-US', {
                timeZone: 'UTC',
                hour12: true,
                hour: 'numeric',
                minute: 'numeric'
            });

            const l12hr = new Date('1970-01-01T' + l + 'Z').toLocaleTimeString('en-US', {
                timeZone: 'UTC',
                hour12: true,
                hour: 'numeric',
                minute: 'numeric'
            });


            var arr = [];

            // If the checkbox is checked, display the output text
            if (a && b != '') {
                arr.push('M' + ' ' + a12hr + '-' + b12hr);
            }
            if (c && d != '') {
                arr.push('T' + ' ' + c12hr + '-' + d12hr);
            }
            if (e && f != '') {
                arr.push('W' + ' ' + e12hr + '-' + f12hr);
            }
            if (g && h != '') {
                arr.push('TH' + ' ' + g12hr + '-' + h12hr);
            }
            if (i && j != '') {
                arr.push('F' + ' ' + i12hr + '-' + j12hr);
            }
            if (k && l != '') {
                arr.push('S' + ' ' + k12hr + '-' + l12hr);
            }

            document.getElementById("schedule").value = arr;
            // schedule.value = arr;

        }
    </script>



    <script>
        $(document).ready(function() {
            // Source: https://stackoverflow.com/questions/18796221/creating-a-select-box-with-a-search-option
            //change selectboxes to selectize mode to be searchable
            $("#subject").select2();
            $("#course").select2();
            $("#yrandsec").select2();


            $("#subject1").select2();
            $("#course1").select2();
            $("#yrandsec1").select2();


            $("#subject2").select2();
            $("#course2").select2();
            $("#yrandsec2").select2();

        });
    </script>


    <!-- Django with Jquery para magload kapag nasaang current step na si students -->


    <script>
        // Content Update
        document.querySelector("#step-" + 1).classList.remove("d-none");
        const formStepCircle = document.querySelector('li[step="' + 1 + '"]');
        formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
        formStepCircle.classList.add("form-stepper-active");

        // Header Update
        formStepHeader.classList.remove("form-stepper-unfinished");
        formStepHeader.classList.add("form-stepper-active", "form-stepper-completed");
    </script>


    <script>
        document.getElementById('disable').style.pointerEvents = 'none';
        // Content Update
        document.querySelector("#step-" + 1).classList.add("d-none");
        document.querySelector("#step-" + 2).classList.remove("d-none");
        const formStepCircle1 = document.querySelector('li[step="' + 2 + '"]');
        formStepCircle1.classList.remove("form-stepper-unfinished", "form-stepper-completed");
        formStepCircle1.classList.add("form-stepper-active");

        // Header Update
        formStepHeader1.classList.remove("form-stepper-unfinished");
        formStepHeader1.classList.add("form-stepper-active", "form-stepper-completed");
    </script>
      



    <!-- MULTIFORM -->
    <script>
        /**
         * Define a function to navigate betweens form steps.
         * It accepts one parameter. That is - step number.
         */
        const navigateToFormStep = (stepNumber) => {
            /**
             * Hide all form steps.
             */
            document.querySelectorAll(".form-step").forEach((formStepElement) => {
                formStepElement.classList.add("d-none");
            });
            /**
             * Mark all form steps as unfinished.
             */
            document.querySelectorAll(".form-stepper-list").forEach((formStepHeader) => {
                formStepHeader.classList.add("form-stepper-unfinished");
                formStepHeader.classList.remove("form-stepper-active", "form-stepper-completed");
            });
            /**
             * Show the current form step (as passed to the function).
             */
            document.querySelector("#step-" + stepNumber).classList.remove("d-none");
            /**
             * Select the form step circle (progress bar).
             */
            const formStepCircle = document.querySelector('li[step="' + stepNumber + '"]');
            /**
             * Mark the current form step as active.
             */
            formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
            formStepCircle.classList.add("form-stepper-active");
            /**
             * Loop through each form step circles.
             * This loop will continue up to the current step number.
             * Example: If the current step is 3,
             * then the loop will perform operations for step 1 and 2.
             */
            for (let index = 0; index < stepNumber; index++) {
                /**
                 * Select the form step circle (progress bar).
                 */
                const formStepCircle = document.querySelector('li[step="' + index + '"]');
                /**
                 * Check if the element exist. If yes, then proceed.
                 */
                if (formStepCircle) {
                    /**
                     * Mark the form step as completed.
                     */
                    formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-active");
                    formStepCircle.classList.add("form-stepper-completed");
                }
            }
        };
        /**
         * Select all form navigation buttons, and loop through them.
         */
        document.querySelectorAll(".btn-navigate-form-step").forEach((formNavigationBtn) => {
            /**
             * Add a click event listener to the button.
             */
            formNavigationBtn.addEventListener("click", () => {
                /**
                 * Get the value of the step.
                 */
                const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));
                /**
                 * Call the function to navigate to the target form step.
                 */
                navigateToFormStep(stepNumber);
            });
        });
    </script>


    <!--DATATABLES-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
            $('#disable').DataTable();
        });
    </script>



</body>

</html>