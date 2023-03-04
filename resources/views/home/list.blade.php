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
        <div style="margin-left: 84%">
            {{ $products->links() }}
        </div>
        <div class="content">

            <div class="category">
                <h1>Women</h1>
                <ul>
                    <li>Accessories</li>
                    <li>Clothing</li>
                    <li>Handbags</li>
                    <li>Shoes</li>
                </ul>
            </div>
            <div class="product-container">
                @foreach ($products as $product)
                    <div class="product">
                        <div class="product-icon-container">
                            <div style="width: 47px; height: 27px; background-color: black">
                                <p style="color: white; position: absolute; margin: 4px 8px;">Sold</p>
                            </div>
                            <img class="product-icon-heart" src="{{ url('image_path/icon_heart.png') }}">
                        </div>
                        <img class="product-img" src="{{ url('image_path/image_show.png') }}" alt="">
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
        </div>
        <div style="margin-left: 84%">
            {{ $products->links() }}
        </div>
        @include('footer')
    </div>
</body>

<style>
    body {
        margin: 0;
    }

    .content {
        display: flex;
    }

    .category {
        flex: 15%;
        margin-left: 40px;
    }

    .product-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-left: 5%;
    }

    .product-container .product {
        width: 326px;
        height: 440px;
        margin-right: 15px;
        margin-left: 15px;
        border-radius: 4px;
        border: 1px solid #EEEEEE;
        margin-top: 10px;
    }

    .product-icon-container {
        position: absolute;
        justify-content: space-between;
        display: flex;
        width: 326px;
        align-items: center;
    }

    .product-container .product .product-icon-heart {
        margin: 10px;
    }

    .product-container .product .product-icon-heart:active,
    .product-container .product .product-icon-heart:hover {
        background-image: url('/image_path/icon_heart_black.png');
        margin-bottom: 10px;
        /* background-color: red */
    }

    .product-container .product .product-img {
        width: 326px;
        height: 332px;
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

    .pagination {
        display: flex;
        list-style-type: none;
    }

    .page-item {
        margin: 5px;
    }

    .page-link {
        text-decoration: none;
    }
</style>

</html>
