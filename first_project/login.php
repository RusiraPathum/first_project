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
</head>

<body>

    <div class="container">
        <h2 class="text-center mt-5">Login Form</h2><br/>
        <div id="box">
            <div class="row">
                <div class="col-3">
                </div>
                <div class="col-6 ">
                    <div class="result"></div>
                    <form method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <input type="button" name="login" id="login" class="btn btn-primary" value="Login"/>
                        </div>
                        <div id="error"></div>
                    </form>
                </div>
                <div class="col-3">
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