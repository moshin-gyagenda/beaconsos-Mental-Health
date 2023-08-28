<div class="wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                <p class="mb-0 phone pl-md-2">
                    <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +256 200 234 567</a>
                    <a href="#"><span class="fa fa-paper-plane mr-1"></span> info@beaconsos.com</a>
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" height="70px"
                width="120px" style="filter: hue-rotate(120deg);"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item active"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item active"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
                <li class="nav-item active"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a href="{{ route('login') }}" class="nav-link btn btn-primary btn-sm">
                        <i class="fa fa-lock"></i> Login
                    </a>
                </li>
                <li class="nav-item" style="margin-right: 10px;">
                    <a href="{{ route('register') }}" class="nav-link btn btn-primary btn-sm">
                        <i class="fa fa-users"></i> Register
                    </a>
                </li>
                <li class="nav-item">
                    <a href="tel:0701861283" class="nav-link btn btn-danger btn-sm">
                        <i class="fa fa-exclamation-circle"></i> Alert Call
                    </a>
                </li>
            </ul>
        </div>



    </div>
</nav>
