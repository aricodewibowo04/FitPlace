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
    <title>Fit Place</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/883ee8dc91.js" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="{{asset('css/homepage.css')}}" rel="stylesheet">
    <!-- animated -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

    @if (session('success'))
    <div class="alert alert-info alert-dismissible fade show alertContact" role="alert">
        <strong>Info!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <header>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('img/heroes1.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/heroes2.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('img/heroes3.png')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#">Fit Place</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link raleway" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link raleway" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link raleway" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link raleway" href="#contact">Contact</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- HOME -->

    <section id="home">
        <div id="about" class="container container-fluid-content mt-2">
            <div class="row">
                <div class="col-sm-8">
                    <h4 class="raleway">Gabung bersama kami sekarang dan dapatkan promonya!</h4>
                    <p class="raleway">Wujudkan impian kamu untuk miliki bentuk badan yang ideal bersama kami di fit place.</p>
                    <p class="raleway">Gabung sekarang dan dapatkan keuntungannya.</p>
                    <ul>
                        <li class="raleway">Full akses class GX studio, Mind & body Studio</li>
                        <li class="raleway">Hidup lebih sehat dengan cara yang seru</li>
                    </ul>
                    <a class="btn btn-s btn-lg px-4 me-sm-3" href="#" data-bs-toggle="modal" data-bs-target="#regist">GET IN TOUCH</a>
                </div>
                <div class="col-sm-4">
                    <figure class="figure">
                        <img src="{{asset('img/ad1.jpg')}}" class="figure-img img-fluid rounded" alt="...">
                    </figure>
                </div>
            </div>
        </div>
        <div class="container-fluid container-fluid-content bg-grey">
            <div class="row">
                <div class="col-sm-4">
                    <figure class="figure">
                        <img src="{{asset('img/ad2.jpg')}}" class="figure-img img-fluid rounded" alt="...">
                    </figure>
                </div>
                <div class="col-sm-8">
                    <h2 class="raleway">Feel Great!</h2>
                    <h4 class="raleway">Ikuti setiap kelas yang tersedia dan rasakan setiap perubahan yang terjadi pada tubuh kamu.</h4>
                    <p>Begitu banyak manfaat berolahraga yang bisa kamu dapatkan baik bagi kesehatan ataupun mental.</p>
                    <ul>
                        <li class="raleway">Berolahraga mampu mengubah suasana hati kamu menjadi lebih positif</li>
                        <li class="raleway">Meningkatkan kepercayaan diri</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->

    <section id="features" class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="merryweather">Our Class</h1>
                <p class="lead text-muted raleway">Join bareng class kita di fit place bersama coach-coach yang seru banget!</p>
                <p>
                    <a href="#" class="btn btn-outline-fitplace my-2" data-bs-toggle="modal" data-bs-target="#regist">Daftar Sekarang</a>
                </p>
            </div>
        </div>


        <div class="row">
            <div class="col-sm-4">
                <div class="container">
                    <div class="card-class">
                        <img src="{{asset('img/model1.jpg')}}" alt="Denim Jeans" style="width:100%">
                        <h1 class="merryweather">Boxing</h1>
                        <p class="raleway">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                        <p><button class="btn-lg btn-s">See More</button></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <div class="card-class">
                        <img src="{{asset('img/ad1.jpg')}}" alt="Denim Jeans" style="width:100%">
                        <h1 class="merryweather">Zumba</h1>
                        <p class="raleway">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                        <p><button class="btn-lg btn-s">See More</button></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="container">
                    <div class="card-class">
                        <img src="{{asset('img/ad3.jpg')}}" alt="Denim Jeans" style="width:100%">
                        <h1 class="merryweather">Hip Hop</h1>
                        <p class="raleway">Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
                        <p><button class="btn-lg btn-s">See More</button></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRICING -->

    <section id="pricing" class="bg-grey">
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="merryweather">Pricing</h1>
            <p class="fs-5 text-muted raleway">
                Kami menyediakan paket membership yang bisa kamu pilih. Gabung sekarang
            </p>
        </div>

        <main>
            <div class="container p-5">
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <div class="col-sm-4">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Free</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title pricing-card-title">
                                    0<span class="text-muted" style="font-weight:100; font-size:small;">Rp</span>
                                </h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>Free Trial 3 days</li>
                                    <li>All Class</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-outline-fitplace" data-bs-toggle="modal" data-bs-target="#regist">
                                    Claim
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Pro</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title pricing-card-title">
                                    1.500.000<span class="text-muted" style="font-weight:100; font-size:small;">Rp</span><small class="text-muted fw-light">/3mo</small>
                                </h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>Free access all class</li>
                                    <li>Free pt 1 session</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-s" data-bs-toggle="modal" data-bs-target="#regist">
                                    Get started
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mb-4 rounded-3 shadow-sm border-fitplace">
                            <div class="card-header py-3 text-white bg-fitplace">
                                <h4 class="my-0 fw-normal">Enterprise</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title pricing-card-title">
                                    3.500.000<span class="text-muted" style="font-weight:100; font-size:small;">Rp</span><small class="text-muted fw-light">/6mo</small>
                                </h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>Free access all class</li>
                                    <li>Free pt 2 session</li>
                                    <li>Free 1 bag</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-primary btn-s" data-bs-toggle="modal" data-bs-target="#regist">
                                    Contact us
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <!-- CONTACT -->

    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="merryweather text-center">Contact</h2>
            <div class="row gx-5 gx-lg-6 py-5 align-items-center">
                <div class="col-md-6">
                    <h4 class="merryweather">Media Platform</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/fitplace.id/"><i class="fa fa-instagram"></i> fitplace.id</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-brands fa-tiktok"></i> fitplace.id</a>
                        </li>
                    </ul>
                    <h4 class="merryweather">Location</h4>
                    <div class="mb-2 mt-2">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="300" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=fitplace pondok cabe&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br>
                                <style>
                                    .mapouter {
                                        display: block;
                                        margin: 0 auto;
                                        position: relative;
                                        height: 300px;
                                        width: 300px;
                                    }
                                </style><a href="https://embedgooglemap.2yu.co">html embed google map</a>
                                <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 300px;
                                        width: 300px;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="merryweather">Contact Us</h4>
                    <form method="post" action="{{route('contact.form')}}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="message">Message</label>
                            <textarea name="message" id="message" class="form-control" rows="3" cols="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-sm btn-s" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer mt-auto text-center py-3 bg-light">
        <span class="text-muted text-sm">Copyright &copy; 2022 Fitplace.id</span>
    </footer>

    <!-- modal regist -->
    <div class="modal fade" id="regist" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('contact.form')}}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                            <label for="name">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="phone">
                            <label for="phone">Phone</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" name="message" placeholder="Leave a message here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Message</label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-fitplace">Send</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $('.alert').delay(3000).slideUp(200, function() {
            $(this).alert('close');
        })
    </script>

    <script src="{{asset('js/landingPage.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>