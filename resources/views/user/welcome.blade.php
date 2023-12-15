<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- my style -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slide.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">

    <!-- log tittle -->
    <link rel="icon" src="{{URL::asset('/img/logo tittle.png')}}" type="image/x-icon">
    <title>MY TEE</title>

    <style>
    #hero {
   background-image: url("{{URL::asset('/img/harry.png')}}");
   height: 100vh;
   background-repeat: no-repeat;
   background-size: cover;
    }
    </style>

  
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
        <div class="container mt-3">
            <a class="navbar-brand" href="#">
                <img src="{{URL::asset('/img/logo tittle.png')}}" alt="" width="30" class="d-inline-block align-text-top">
                MY TEE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item  mx-2">
                        <a class="nav-link" href="" style="color : #EEEEEE; hover: #000000">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#about-us" style="color :  #EEEEEE;">About us</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#event" style="color :  #EEEEEE;">Event</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="#contact" style="color :  #EEEEEE;">Contact</a>
                    </li>
                </ul>
                <div class=" row">
                    <div class="col-6">
                        <button type="button" class="btn button-primary"  style="background-color: #090580;" data-bs-toggle="modal" data-bs-target="#login">
                                Login
                        </button>
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn button-secondary"  data-bs-toggle="modal" data-bs-target="#register">
                                Register
                        </button>
                    </div>    
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Modal login-->
    <div class="modal fade" style="" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h9 class="modal-title" id="exampleModalLabel">Login</h9>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="modal-content animate" action="/user/login/process" method="POST">
                @csrf
                    <div class="modal-body">
                        <div class="container">
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" id="email" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" id="password" required>
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                        </div>
                        <div class="container">
                            <span class="psw">Forgot <a href="#">password?</a></span>
                        </div>
                    </div>
                    <div class="modal-footer" style="display: flex; flex-wrap: nowrap;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal req -->
    <div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> 
                <form class="modal-content animate" action="/user/create" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="container">
                            <label for="username"><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="username" id="username" required>
                            
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" id="email" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" id="password" required>
                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                        </div>
                        <div class="container">
                            <span class="psw">Forgot <a href="#">password?</a></span>
                        </div>
                    </div>
                    <div class="modal-footer" style="display: flex; flex-wrap: nowrap;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- hero -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>
                        Temukan Event Mu
                    </h2>
                    <p>Jangan Lewatkan Kesempatan Mu untuk mendapatkan eksperimen yang tak terlupakan, dengan event - event seru bersama MYTEE</p>
                </div>
                <div class="col-10 mx-auto">
                    <div class="input-group input-cari mb-3">
                        <input type="text" class="form-control" placeholder="cari event mu" aria-label="cari event mu" aria-describedby="button-addon2">
                        <button class="button-primary" type="button" id="button-addon2">search</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- about us-->
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>About Us</h2>
                    <span class="sub-tittle">MYTEE menjadikan hidup Mu lebih seru ! </span>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 text-center">
                    <div class="card-aboutus">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{URL::asset('/img/5-stars 1 1.png')}}" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Innovative</h3>
                        <p class="mt-3">MYTEE menjadi trobosan baru dalam dunia jual beli tiket dengan mengutamakan kenyamanan customer</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-aboutus">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{URL::asset('/img/icons8-hand-shake-64 1.png')}}" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Quality</h3>
                        <p class="mt-3">memiliki dan menetapkan sebuah standar dengan menempatkan hati & jiwa dalam semua pekerjaan kami, yang hasilnya kemudian tercermin dari kualitas acara kami</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-aboutus">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="{{URL::asset('/img/icons8-data-protection-32 1.png')}}" alt="" class="position-absolute top-50 start-50 translate-middle">
                        </div>
                        <h3 class="mt-4">Reliable</h3>
                        <p class="mt-3">Kami memiliki tim berpengalaman yang berkomitmen penuh untuk memenuhi harapan mitra dengan memberikan yang terbaik</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- event -->
    <section id="event">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2>Event</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="{{URL::asset('/img/sod.png')}}" alt="">
                        <div class="card-body">
                            <h4>Sounds of Downtown Vol.5</h4>
                            <p class="mb-4">Surabaya <br> <span class="text-danger">05 - 06 Agustus 2023</span></p>
                        </div>

                        <div class="card-harga">
                            <span>
                                <h4>IDR 167.900</h4>
                                <p>include tax</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="{{URL::asset('/img/taylor.png')}}" alt="">
                        <div class="card-body">
                            <h4>Taylor Swift The Eras Tour</h4>
                            <p class="mb-4">Jakarta Selatan <br> <span class="text-danger">21 - 22 Februari 2024</span></p>
                        </div>

                        <div class="card-harga">
                            <span>
                                <h4>IDR 5.224.628</h4>
                                <p>include tax</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="{{URL::asset('/img/NCT-Dream.png')}}" alt="">
                        <div class="card-body">
                            <h6><b>NCT DREAM TOUR ‘THE DREAM SHOW2 : In A DREAM’ in JAKARTA</b></h6>
                            <p class="mb-4">Tanggerang <br> <span class="text-danger">04 - 06 Agustus 2023</span></p>
                        </div>

                        <div class="card-harga">
                            <span>
                                <h4>IDR 1.000.000</h4>
                                <p>include tax</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="{{URL::asset('/img/raisa.png')}}" alt="">
                        <div class="card-body">
                            <h4>Raisa: Live in Concert</h4>
                            <p class="mb-4">Jakarta Selatan <br> <span class="text-danger">23 Juli 2023</span></p>
                        </div>

                        <div class="card-harga">
                            <span>
                                <h4>IDR 200.00</h4>
                                <p>include tax</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="{{URL::asset('/img/nct 127.png')}}" alt="">
                        <div class="card-body">
                            <h5><b>NCT 127 2nd Tour Neo City : Jakarta The Link</b></h5>
                            <p class="mb-4">Tanggerang <br> <span class="text-danger">04 - 05 November 2023</span></p>
                        </div>

                        <div class="card-harga">
                            <span>
                                <h4>IDR 1.045.000</h4>
                                <p>include tax</p>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card p-2" style="width: 22rem;">
                        <img src="{{URL::asset('/img/honne 1.png')}}" alt="">
                        <div class="card-body">
                            <h4>HONNE ASIA TOUR 2023</h4>
                            <p class="mb-4">Jakarta Utara <br> <span class="text-danger">07 Juli 2023</span></p>
                        </div>

                        <div class="card-harga">
                            <span>
                                <h4>IDR 1.188.000</h4>
                                <p>include tax</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="product"> 
        <h2 class="product-category">best event now</h2>
        <button class="pre-btn"><img src="{{URL::asset('/img/arrow.png')}}" alt=""></button>
        <button class="nxt-btn"><img src="{{URL::asset('/img/arrow.png')}}" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{URL::asset('/img/rossa.webp')}}" class="product-thumb" alt="">
                    <button class="card-btn" data-bs-toggle="modal" data-bs-target="#promo">Description</button>
                </div>
                <div class="product-info">
                    <p class="product-short-description">BEYOND THE FUTURE FESTIVAL 2022 </p>
                    <span class="price">IDR 80,000</span><span class="actual-price">IDR 150,000</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image"> 
                    <img src="{{URL::asset('/img/tiara.jpeg')}}" class="product-thumb" alt="">
                    <button class="card-btn" data-bs-toggle="modal" data-bs-target="#promo">Description</button>
                </div>
                <div class="product-info">
                    <p class="product-short-description">METAFEST TIARA ANDINI</p>
                    <span class="price">GRATIS</span><span class="actual-price">IDR 100,000</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{URL::asset('/img/isyana.jpg')}}" class="product-thumb" alt="">
                    <button class="card-btn" data-bs-toggle="modal" data-bs-target="#promo">Description</button>
                </div>
                <div class="product-info">
                    <p class="product-short-description">MUSIK SUNSET </p>
                    <span class="price">IDR 100,000</span><span class="actual-price">IDR 150,000</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{URL::asset('/img/gilga.jpeg')}}" class="product-thumb" alt="">
                    <button class="card-btn" data-bs-toggle="modal" data-bs-target="#promo">Description</button>
                </div>
                <div class="product-info">
                    <p class="product-short-description">FUNTURING</p>
                    <span class="price">IDR 50,000</span><span class="actual-price">IDR 75,000</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{URL::asset('/img/happy_asmara.jpg')}}" class="product-thumb" alt="">
                    <button class="card-btn" data-bs-toggle="modal" data-bs-target="#promo">Description</button>
                </div>
                <div class="product-info">
                    <p class="product-short-description">IRAMA NUSANTARA</p>
                    <span class="price">IDR 75,000</span><span class="actual-price">IDR 100,000</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{URL::asset('/img/denny.jpeg')}}" class="product-thumb" alt="">
                    <button class="card-btn" data-bs-toggle="modal" data-bs-target="#promo">Description</button>
                </div>
                <div class="product-info">
                    <p class="product-short-description">SMILE FEST</p>
                    <span class="price">IDR 95,000</span><span class="actual-price">IDR 200,000</span>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Modal Description -->
    <div class="modal fade" id="promo" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Show a second modal and hide this one with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>

    <!-- contact -->
    <section id="contact">
        <div class="container-fluid overlay h-100"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Jika Anda memiliki pertanyaan, Anda dapat menghubungi kami.
                    </h3>
                    <div class="kontak">
                        <h6>kontak</h6>
                        <div class="mb-3 d-flex align-items-center">
                            <div>
                                <img src="{{URL::asset('/img/alamat.png')}}" alt="">
                            </div>
                            <a href="#">Jl. Klampis Indah NO.27 -27 Sukolilo Surabaya Indonesia</a>
                        </div>

                        <div class="mb-3">
                            <img src="{{URL::asset('/img/telefon.png')}}" alt="">
                            <a href="#">0813-6565-2023</a>
                        </div>

                        <div class="mb-3">
                            <img src="{{URL::asset('/img/email.png')}}" alt="">
                            <a href="#">mytee@gmail.com</a>
                        </div>
                    </div>
                    <h6>Social Media</h6>
                    <a href="#" class="me-3"><img src="{{URL::asset('/img/facebook.png')}}" alt=""></a>
                    <a href="#" class="me-3"><img src="{{URL::asset('/img/twitter.png')}}" alt=""></a>
                    <a href="#" class="me-3"><img src="{{URL::asset('/img/akar-icons_instagram-fill.png')}}" alt=""></a>
                    <a href="#" class="linkmytee">MYTEE</a>
                </div>

                <div class="col-md-6">
                    <div class="card-kontak w-100">
                        <form action="/user/contact" method="POST"> 
                            @csrf
                            <h2>ada pertanyaan ?</h2>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="pertanyaan">
                                <label for="floatingInput">Pertanyaan...</label>
                            </div>

                            <button type="submit" class="button-kontak">kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer class="d-flex align-items-center position-relative ">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 position-relative">
                        <span class="position-absolute top-10 start-50 translate-middle text-center w-30">Official Partner <br></span>
                        <div class="foto-partner mt-3">
                            <img style="width: 170px; height: 60px;" src="{{URL::asset('/img/wonderfull indonesia 1.png')}}" alt="">
                            <img style="width: 170px; height: 60px;" src="{{URL::asset('/img/tokopedia.png')}}" alt="">
                        </div>
                        <br>
                        <div class="foto-partner mt-3">
                            <img style="width: 20%; height: 60px;" src="{{URL::asset('/img/gudang garam.jpeg')}}" alt="">
                            <img style="width: 160px; height: 70px;" src="{{URL::asset('/img/traveloka.png')}}" alt="">
                            <img style="width: 120px; height: 70px;" src="{{URL::asset('/img/coca cola.png')}}" alt="">
                        </div>
                    </div>

                    <div class="col-md-6 position-relative">
                        <span class="position-absolute top-10 start-50 translate-middle text-center w-100">Payment Method <br></span>
                        <div class="mt-3">
                            <img src="{{URL::asset('/img/Mandiri 1.png')}}" alt="">
                            <img src="{{URL::asset('/img/R 1.png')}}" alt="">
                        </div>
                    </div>

                    <div>
                        <div class="row position-absolute copyright start-50 translate-middle">
                            <div class="col-12 mt-10">
                                <p>Copyright TrioBanci All Right Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}" ></script>
    <!-- Optional JavaScript; choose one of the two! -->

    Option 1: Bootstrap Bundle with Popper
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>

</html>