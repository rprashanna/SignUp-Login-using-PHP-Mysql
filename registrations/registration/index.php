<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Registration</title>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 col-xm-12">
                <h1 class="text-center">Sign Up</h1>
                <form action="signup.php" method="post">
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username"
                            autocomplete="off" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password"
                            autocomplete="off" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password"
                            autocomplete="off" name="cpassword">
                    </div>

                    <button type="submit" class="btn btn-success w-100 my-3" name="signup">Sign Up</button>
                </form>
            </div>


            <div class="col-md-6 col-xm-12 my-5">
                <h1 class="text-center">Log In</h1>
                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username"
                            autocomplete="off" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password"
                            autocomplete="off" name="password">
                    </div>
                    

                    <button type="submit" class="btn btn-dark w-100 my-3" name="login">Log In</button>
                </form>
            </div>

        </div>
    </div>

</head>

<body>

</body>

</html>