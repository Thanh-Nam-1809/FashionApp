<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/index.css') }}" media="screen" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Document</title>
</head>

<body>
    <div class="Container">
        @include('header')
        <div class="content">
            @foreach ($banners as $banner)
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="slide">
                            <div class="slide-text-container">
                                <div class="slide-text">
                                    <h2 class="slide-txt-title">{{ $banner->title }}</h2>
                                    <h1 class="slide-txt-content">{{ $banner->content }}</h1>
                                    <p class="slide-txt-content2">{{ $banner->content }}</p>
                                    <button class="slide-btn" type="submit">Learn More</button>
                                </div>
                            </div>
                            <div class="slide-img-container">
                                <img class="slide-img" src="{{ url('image_path/63fce39dc7a57-12.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="features-container">
                <h1 class="features-txt">Features Item</h1>
                <img class="features-icon" src="{{ url('image_path/thanhNgang.png') }}">
            </div>
            <br>

            <div class="multiple-items">
                @foreach ($features as $feature)
                    <div class="multiple-container">
                        <img class="multiple-icon-heart" src="{{ url('image_path/icon_heart.png') }}">
                        <img class="multiple-img" src="{{ url('image_path/63fce39dc7a57-12.jpg') }}" alt="">
                        <div class="multiple-txt">
                            <a class="multiple-title"
                                href="{{ route('home.show', $feature->id) }}">{{ $feature->title }}</a>
                            <p class="multiple-price">$
                                {{ $feature->price }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="collection-container">
                <div class="collection">
                    <img class="collection-img" src="{{ url('image_path/63fce39dc7a57-12.jpg') }}" alt="">
                    <div class="collection-txt">
                        <p class="collection-title">Clothing
                            Collection 2021</p>
                        <p class="collection-content">Read view</p>
                        <img src="{{ url('image_path/thanhNgang.png') }}">
                    </div>
                </div>
                <div class="collection">
                    <img class="collection-img" src="{{ url('image_path/63fce39dc7a57-12.jpg') }}" alt="">
                    <div class="collection-txt">
                        <p class="collection-title">Shoes Collection
                            2021</p>
                        <p class="collection-content">Read view</p>
                        <img src="{{ url('image_path/thanhNgang.png') }}">
                    </div>
                </div>
            </div>
            <div class="latest-container">
                <h1 class="latest-title">Latest Arivals</h1>
                <img src="{{ url('image_path/thanhNgang.png') }}">
            </div>
            <div class="product-container">
                @foreach ($products as $product)
                    <div class="product">
                        <img class="product-icon-heart" src="{{ url('image_path/icon_heart.png') }}">
                        <img class="product-img" src="{{ url('image_path/63fce39dc7a57-12.jpg') }}" alt="">
                        <div class="product-txt">
                            <a class="product-title"
                                href="{{ route('home.show', $product->id) }}">{{ $product->title }}</a>
                            <p class="product-price">$
                                {{ $product->price }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="btn-see-all">
                <a class="btn-see-all-txt" href="fashion/product">See All</a>

                <div id="login" class="overlay">
                    <div class="popup">
                        <h2 class="modal-h2">Login</h2>
                        <div class="content">
                            <div class="modal-email">
                                <p class="modal-txt">Email Address</p>
                                <input class="modal-ipt-email" type="text">
                            </div>
                            <div class="modal-email">
                                <p class="modal-txt">Password</p>
                                <div class="password-txt">
                                    <input class="modal-ipt-password" type="password" name="password" id="password">
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                </div>
                            </div>


                            <p class="forgot-password">Forgot <a class="forgot-password-a">Password?</a></p>
                            <button class="btn-modal">Login</button>
                            <p class="using-p">Or sing up usign</p>
                            <img class="icon-modal" src="{{ url('image_path/icon_fb_login.png') }}" alt="">
                            <img class="icon-modal" src="{{ url('image_path/icon_gg_login.png') }}" alt="">
                            <p class="account-p">Don’t have an account? <a class="account-a" href="#signup">Sing up</a></p>
                        </div>
                    </div>
                </div>
                <div id="signup" class="overlay">
                    <div class="popup">
                        <h2 class="modal-h2">Sign Up</h2>
                        <div class="content">
                            <div class="modal-email">
                                <p class="modal-txt">Email Address</p>
                                <input class="modal-ipt-email" type="text">
                            </div>
                            <div class="modal-email">
                                <p class="modal-txt">Password</p>
                                <div class="password-txt">
                                    <input class="modal-ipt-password" type="password" name="password" id="password">
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                </div>
                            </div>

                            <div class="modal-email">
                                <p class="modal-txt">Password confirmation</p>
                                <div class="password-txt">
                                    <input class="modal-ipt-password" type="password" name="password" id="password">
                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                </div>
                            </div>


                            <p class="terms">I agree to the <a class="forgot-password-a">Terms & Conditions</a></p>
                            <button class="btn-modal">Login</button>
                            <p class="account-p">Don’t have an account? <a class="account-a" href="#login">Login</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @include('footer')
    </div>
</body>

</html>
<script src="{{ asset('assets/js/index.js') }}"></script>
<style>

    .modal-email {
        padding-left: 37px;
        padding-right: 37px;
    }

    .modal-txt {
        font-size: 15px;
        text-align: left;
        color:#616161;
    }

    .password-txt{
        width: 100%;
        height: 25px;
        border-radius: 4px;
        border: 1px solid #E5E7EB;
        background-color: white
    }

    .modal-ipt-email {
        width: 100%;
        height: 20px;
        border-radius: 4px;
        border: 1px solid #E5E7EB;
    }

    .modal-ipt-password {
        text-align: left;
        width: 90%;
        height: 20px;
        border: 1px solid white;
    }
    .bi-eye-slash{
        width: 10%;
    }

    .button:hover {
        background: #06D85F;
    }

    .overlay {

        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
    }

    .overlay:target {
        visibility: visible;
        opacity: 1;
    }

    .popup {
        width: 448px;
        height: 500px;
        margin: 70px auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        width: 30%;
        position: relative;
        transition: all 5s ease-in-out;
    }

    .popup .modal-h2 {
        margin-top: 0;
        font-size: 36px;
        color: #333;
        font-family: Tahoma, Arial, sans-serif;
    }

    .popup .close:hover {
        color: #06D85F;
    }

    .popup .content {
        max-height: 100%;
        overflow: auto;
    }

    @media screen and (max-width: 700px) {
        .box {
            width: 70%;
        }

        .popup {
            width: 70%;
        }
    }

    .forgot-password{
        text-align: end;
        padding-right: 37px;
    }

    .forgot-password-a{
        font-weight: bold;
    }

    .btn-modal {
        width: 80%;
        height: 50px;
        margin-left: 37px;
        margin-right: 37px;
        justify-content: center;
        color: #F5F5F5;
        font-weight: bold;
        font-size: 17px;
        background-color: #424242;
        border-radius: 4px;
        border: 1px solid #424242;
    }

    .using-p{
        color: #212121;
    }

    .icon-modal {
        margin: 12px;
    }

    .account-p {
        color: #616161;
        font-size: 13px
    }

    .account-a {
        font-weight: bold;
        color: black;
    }

    .terms{
        text-align: start;
        padding-left: 37px;
    }

</style>
