@extends('layouts.base')
@section('content')
<div class="mobile-menu d-sm-none">
    <ul>
        <li>
            <a href="{{route('app.index')}}" class="active">
                <i data-feather="home"></i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <i data-feather="align-justify"></i>
                <span>Category</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <i data-feather="shopping-bag"></i>
                <span>Cart</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <i data-feather="heart"></i>
                <span>Wishlist</span>
            </a>
        </li>
        <li>
            <a href="user-dashboard.php">
                <i data-feather="user"></i>
                <span>Account</span>
            </a>
        </li>
    </ul>
</div>
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>About Me❣</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href={{route('app.index')}}>
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">About Me</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- team leader section Start -->
<section class="overflow-hidden">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-5 offset-xl-1">
                <div class="row g-3">
                    <div class="col-md-9">
                        <img src="assets/images/inner-page/review-image/about.gif"
                            class="img-fluid rounded-3 about-image" alt="">
                    </div>
                    {{-- <div class="col-md-6">
                        <img src="assets/images/inner-page/review-image/7.jpg"
                            class="img-fluid rounded-3 about-image" alt="">
                    </div>
                    <div class="col-12 ratio_40">
                        <div>
                            <img src="assets/images/inner-page/review-image/8.jpg"
                                class="img-fluid rounded-3 team-image bg-img" alt="">
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-xl-5">
                <div class="about-details">
                    <div>
                        <h2 style="font-size:30px ">Hi I'm Habiba Nashat 🌟 <br>
                            <span style="color: black">Frontend Developer</span></h2>

                            <h3 style="font-size: 20px">2 Year's Experience on Web Devoleber</h3>
                            <h4 style="color: rgb(182, 182, 182);margin: 10px;">User Experience Design - Front End

                                Delight the user and make it work. Web & User Interface Design - Development</h4>
                                <h4 style="color: rgb(182, 182, 182);margin: 10px;">Web & User Interface Design - Development

                                    Website , Web Experience , ...</h4>

                            <button onclick="location.href = '{{route('shop.index')}}';" type="button"
                            class="btn btn-solid-default">Shop Now</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
