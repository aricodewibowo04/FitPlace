<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Fit Place</title>
    <link rel="stylesheet" href="css/global.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

        body {
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }

        .laravel-navbar {
            box-shadow: 0 2px 4px rgba(0, 0, 0, .04);
        }

        /* navbar-f {
            background-image: linear-gradient(90deg, cyan 30%, gray 70%);
        } */

        .navbar-brand {
            width: 190px;
            height: 80px;
        }

        .navbar-brand,
        .nav-link,
        .my-form,
        .login-form,
        .profile-n .nav-link {
            font-family: Raleway, sans-serif;
        }

        .my-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .my-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .login-form {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        a {
            text-decoration: none;
        }

        .dropdown-menu {
            padding: 0;
            width: min-content;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg laravel-navbar">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Fit Place</a> -->
            <img class="navbar-brand" src="img/fitplaceProfile.png">
            @guest
            <button class="navbar-toggler btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                    <li class="nav-item">
                    </li>
                </ul>
            </div>
            @else
            <div class="dropdown ">
                <button class="profile-n btn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->name}}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a onclick="return confirm('Are you sure want to logout')" class="btn" href="{{route('logout')}}">Logout</a>
                </ul>
            </div>
            @endguest
        </div>
    </nav>
    <div class="mt-2 mb-2">
        @yield('content')
    </div>
    <script src="js/global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>