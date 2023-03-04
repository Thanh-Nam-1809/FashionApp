<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @include('header')
    <div style="margin-left: 100px; margin-right: 100px;">
        <div style="flex: 1; display: flex; ">
            <div style="flex: 60%; margin-right: 25px;">
                <table>
                    <tr>
                        <th>Imager</th>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                        <th><img width="14px" height="14px" src="{{ url('image_path/icon_heart.png') }}"></th>
                    </tr>
                    <tr style="border: 1px solid #EEEEEE">
                        <td><img width="124px" height="124px" src="{{ url('image_path/63fce39dc7a57-12.jpg') }}"
                                alt=""></td>
                        <td>CHANEL SS20 Tweed Coat Dress - Look #18.
                        </td>
                        <td>$1,280</td>
                        <td><img width="14px" height="14px" src="{{ url('image_path/icon_heart.png') }}"></td>
                    </tr>
                </table>
                <div style="display: flex; margin-top: 40px;">
                    <div style="border: 1px solid #EEEEEE; width: 254px; height: 41px; margin-right: 12px">
                        <input style="width: 134px; height: 19px; font-size: 15px; margin: 10px; border: 1px;"
                            type="text" placeholder="Enter coupon code">
                    </div>
                    <button
                        style="    width: 196px;
                    height: 41px;
                    background-color: #424242;
                    border: 1px;
                    border-radius: 4px;
                    color: white;
                    font-size: 15px;">Apply
                        coupon</button>
                </div>
            </div>
            <div style="flex: 40%">
                <div style="width: 397px; height: 444px; background-color:#F5F5F5; padding: 20px">
                    <h1>Order Summary</h1>
                    <hr>
                    <div style="justify-content: space-between; display: flex">
                        <p>Subtotal</p>
                        <p>$1,280</p>
                    </div>
                    <p style="font-weight: bold">Shipping Method</p>
                    <div style="justify-content: space-between; display: flex; padding-left: 20px;">
                        <p>Free Shipping</p>
                        <p>$0.00</p>
                    </div>
                    <div style="justify-content: space-between; display: flex; padding-left: 20px;">
                        <p>Local Pickup</p>
                        <p>$0.00</p>
                    </div>
                    <div style="justify-content: space-between; display: flex; padding-left: 20px;">
                        <p>Flat Rate</p>
                        <p>$0.00</p>
                    </div>
                    <hr>
                    <div style="justify-content: space-between; display: flex; font-weight: bold;">
                        <p>Total</p>
                        <p>$1,280</p>
                    </div>
                    <div style="text-align: center">
                        <button
                            style="width: 357px; height: 41px; background-color: #424242; border: 1px; border-radius: 4px; font-size: 15px; font-weight: bold; color: white">Proceed
                            to checkout</button>
                    </div>
                </div>
            </div>
        </div>
        <h1>Simlar products</h1>
        <div class="product-container">
            <img class="prev" src="{{ url('image_path/icon_left.png') }}" alt="">
            @foreach ($products as $product)
                <div class="product">
                    <img class="product-icon-heart" src="{{ url('image_path/icon_heart.png') }}">
                    <img class="product-img" src="{{ url('image_path/63fce39dc7a57-12.jpg') }}" alt="">
                    <div class="product-txt">
                        <a class="product-title" href="{{ route('home.show', $product->id) }}">{{ $product->title }}</a>
                        <p class="product-price">$
                            {{ $product->price }}
                        </p>
                    </div>
                </div>
            @endforeach
            <img class="next" src="{{ url('image_path/icon_right.png') }}" alt="">
        </div>
        <div></div>
    </div>
    @include('footer')
</body>

</html>

<style>
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

    table {
        border: 1px solid #EEEEEE;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
    }
</style>
