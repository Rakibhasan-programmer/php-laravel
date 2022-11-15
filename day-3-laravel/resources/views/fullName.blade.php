<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
</head>
<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mx-auto">
                    <li><a href="{{route('/')}}" class="nav-link">Home</a></li>
                    <li><a href="{{route('full-name')}}" class="nav-link">FullName</a></li>
                    <li><a href="{{route('calculator')}}" class="nav-link">Calculator</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Get Full Name</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('full-name')}}" method="POST">
                                <div class="row pb-3">
                                    <label for="firstName" class="col-md-4">First Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="first_name" class="form-control" id="firstName" placeholder="Enter your First Name">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="lastName" class="col-md-4">Last Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Enter your Last Name">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="fullName" class="col-md-4">Full Name</label>
                                    <div class="col-md-8">
                                        <input type="text" value="<?php echo isset($result) ? $result : ""; ?>" name="" class="form-control" id="fullName" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input class="btn btn-dark" type="submit" name="full_name_btn" value="Get Full Name">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







<script src="{{asset('/')}}assets/js/bootstrap.bundle.js"></script>

</body>
</html>
