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
    <div style="margin-left: 100px; margin-right: 100px;" style="content">
        <p>Order confirmed </p>
        <hr>
        <div style="text-align: center;margin-top: 150px;margin-bottom: 300px;">
            <img class="multiple-img" src="{{ url('image_path/icon_completing.png') }}" alt="">
            <h1>Order Confirmed</h1>
            <p>Your order have been confirmed, please wait and track your order</p>
            <button
                style="width: 357px;height: 40px;background-color: #424242;border: 1px;
                        border-radius: 4px;color: white;font-size: 15px;">
                Go to track page
            </button>
        </div>
    </div>
    @include('footer')
</body>

</html>
