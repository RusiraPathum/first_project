<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
<!--    <header class="container text-center">-->
<!--        <h1 class="mt-5">Registration Form</h1>-->
<!--    </header>-->

    <div class="container">
        <div class="row mt-5">
            <div class="col-6">
                <h1 class="text-danger">All Record</h1>
            </div>
            <div class="col-6 mt-2 d-flex justify-content-end">
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    <span><i class="fa fa-user-plus mr-2"></i></span>Register
                </button>
                <button class="btn btn-success ml-1" id="show_data">
                    <span><i class="fa fa-tasks mr-2"></i></span>View All
                </button>
            </div>
        </div>

        <div class="container">
            <br><br>
            <div id="table"></div>
        </div>

        <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h2 class="modal-title">Registration Form</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="att-form">
                            <div class="mb-3 form-group">
                                <label for="first_name" class="form-label">First name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="contact_number" id="name" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <input  value="Submit" onclick="check()" type="button" name="submit" class="btn btn-primary">
                    </div>

                </div>
            </div>
        </div>


<!--////////////////update/////////////-->

        <div class="modal" id="update_user">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h2 class="modal-title">Update Your Details</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="att-form">
                            <div class="mb-3 form-group">
                                <label for="update_first_name" class="form-label">First name</label>
                                <input type="text" class="form-control" id="update_first_name" name="first_name">
                            </div>
                            <div class="form-group">
                                <label for="update_last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="update_last_name" name="last_name">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="update_contact_number" id="name" class="form-label">Contact Number</label>
                                <input type="text" class="form-control" id="update_contact_number" name="contact_number">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="update_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="update_email" name="email">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="update_password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="update_password" name="password">
                            </div>
                            <div class="mb-3 form-group">
                                <label for="update_confirm_password" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="update_confirm_password" name="confirm_password">
                            </div>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <input  value="Update" onclick="update_user_details()" type="button" name="submit" class="btn btn-primary">
                        <input type="hidden" name="" id="hidden_user_id">
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/test.js"></script>

</body>
</html>
