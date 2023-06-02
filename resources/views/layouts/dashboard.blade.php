<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('img/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon/apple-icon-76x76.pn')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('img/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('img/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <title>
        @yield('title')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- icon -->
    <script src="https://kit.fontawesome.com/883ee8dc91.js" crossorigin="anonymous"></script>
    <!-- css local -->
    <!-- <Link rel="stylesheet" href="css/global.css"></Link> -->
    <Link rel="stylesheet" href="{{asset('css/global.css')}}">
    </Link>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{asset('img/fitplaceProfile.png')}}" width="180px" height="80px"></a>
            @guest
            <a class="nav-link" href="/login">login</a>
            @else
            <a onclick="return confirm('Are you sure want to logout')" class="btn btn-sm btnL" href="{{route('logout')}}"><i class="fa fa-right-to-bracket"></i> Logout</a>
            @endguest
        </div>
    </nav>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card shadow ">
                <div class="card-header">
                    @if (session('success'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>Info!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    welcome, <h5>{{Auth::user()->name}}</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                            <div class="position-sticky pt-3">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="btn" aria-current="page" href="/dashboard">
                                            <i class="fa fa-house"></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn" href="{{route('member.index')}}">
                                            <i class="fa fa-user-group"></i>
                                            Member
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn" href="{{route('contact.index')}}">
                                            <i class="fa fa-message"></i>
                                            Referal
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
                            @yield('dashboardContent')
                        </main>
                    </div>
                </div>
                <div class="card-footer">
                    <p class="text-center text-muted">www.fitplace.com</p>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script src="{{asset('js/global.js')}}"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $('.alert').delay(3000).slideUp(200, function() {
            $(this).alert('close');
        })
    </script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>