<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        @include('header')
        <div class="content">
            <div style=" display: flex">
                <div style="flex: 13%; flex-direction: column; text-align: center">
                    <img src="{{ url('image_path/icon_bot.png') }}" alt="">
                    <img style="width: 124px; height: 124px;" src="{{ url('image_path/63fce39dc7a57-12.jpg') }}"
                        alt="">
                    <img style="width: 124px; height: 124px;" src="{{ url('image_path/63fce39dc7a57-12.jpg') }}"
                        alt="">
                    <img style="width: 124px; height: 124px;" src="{{ url('image_path/63fce39dc7a57-12.jpg') }}"
                        alt="">
                    <img style="width: 124px; height: 124px;" src="{{ url('image_path/63fce39dc7a57-12.jpg') }}"
                        alt="">
                    <img src="{{ url('image_path/icon_bot.png') }}" alt="">
                </div>
                <div style="flex: 40%">
                    <img style="width: 569px; height: 569px;" src="{{ url('image_path/63fce39dc7a57-12.jpg') }}"
                        alt="">
                </div>
                <div style="flex: 40%; margin-left: 40px">
                    <h3 style="font-size: 32px; width: 400">{{ $product->title }}</h3>
                    <p>{{ $product->content }}</p>
                    <div style="display: flex; align-items: center">
                        <img style="width: 24px; height: 24px;" src="{{ url('image_path/icon_heart.png') }}">
                        <p style="margin-left: 16px">Wishlist</p>
                    </div>
                    <div style="margin-top: 44px; display:flex; align-items: baseline; ">
                        <h1 style="width: 105px;">$ {{ $product->price }}</h1>
                        <div style="display: inline-grid; width: 100%; justify-content: end;">
                            <button
                                style="width: 200px; height: 41px; background-color: #424242; font-size: 15px; color: white; border: 1px solid #424242; border-radius: 4px">But
                                It Now</button>
                            <button
                                style="width: 200px; height: 41px; margin-top: 16px; background-color: #212121; font-size: 15px; color: white; border-radius: 4px">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 10px">
                <a style="margin-right: 42px; margin-left: 42px; font-size: 15px; color: #616161; text-decoration: none" href="#description">Description</a>
                <a style="margin-right: 42px; margin-left: 42px; font-size: 15px; color: #616161; text-decoration: none" href="#details">Details</a>
                <a style="margin-right: 42px; margin-left: 42px; font-size: 15px; color: #616161; text-decoration: none" href="#condition">Condition</a>
            </div>
            <div id="description" class="overlay">
                <p style="font-size: 15px; color: #424242; position: absolute;">{{ $product->description }}</p>
            </div>
            <div id="details" class="overlay">
                <p style="font-size: 15px; color: #424242;position: absolute;">{{ $product->detail }}</p>
            </div>
            <div id="condition" class="overlay">
                <p style="font-size: 15px; color: #424242;position: absolute;">{{ $product->condition }}</p>
            </div>

            <h1>Simlar products</h1>
            <div class="product-container">
                <img class="prev" src="{{ url('image_path/icon_left.png') }}" alt="">
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
                <img class="next" src="{{ url('image_path/icon_right.png') }}" alt="">
            </div>
        </div>
        @include('footer')
    </div>
</body>

</html>

<style>
    .content{
        margin-right: 100px;
        margin-left: 100px;
    }
    body {
        margin: 0;
    }
    .prev {
        cursor: pointer;
        position: absolute;
        width: auto;
        margin-top: 100px;
        padding: 16px;
    }

    .next {
        cursor: pointer;
        position: absolute;
        width: auto;
        margin-top: 100px;
        margin-left: 80%;
        padding: 16px;
    }

    .product-container {
        display: flex;
        margin-bottom: 10px;
    }

    .product-container .product {
        width: 250px;
        height: 360px;
        margin-right: 13px;
        margin-left: 13px;
        border-radius: 4px;
        border: 1px solid #EEEEEE;
        margin-top: 10px;
    }

    .product-container .product .product-icon-heart {
        position: absolute;
        margin: 10px;
    }

    .product-container .product .product-img {
        width: 250px;
        height: 250px;
    }

    .product-container .product .product-txt {
        padding: 10px;
    }

    .product-container .product .product-txt .product-title {
        font-size: 17px;
        text-decoration: none;
        color: #212121;
    }

    .product-container .product .product-txt .product-price {
        font-size: 17px;
        text-align: center;
        font-weight: bold;
    }
</style>

<style>
    .overlay {
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        visibility: hidden;
        opacity: 0;
    }

    .overlay:target {
        visibility: visible;
        opacity: 1;
    }
</style>
