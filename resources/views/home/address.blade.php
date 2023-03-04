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
    <div style="margin-left: 100px; margin-right: 100px;" class="conent">
        <p style="font-size: 13px; color:#757575">Home / My Account / My Addresses</p>
        <hr>
        <div style="flex: 1; display: flex">
            <div style="flex: 20%">
                @include('profile')
            </div>
            <div style="flex: 80%;">
                <p style="font-size: 15px; font-weight: bold;">My Addresses</p>
                <div
                    style=" width: 840px; height: 459px; border: 1px solid #EEEEEE; margin-bottom: 300px;padding: 50px;">
                    <div style="justify-content: space-between; display: flex;">
                        <div style="display: flex; align-items: center">
                            <p>Hyper DS</p>
                            <img style="margin-left: 20px; width: 70px; height: 16px" src="{{ url('image_path/icon_default.png') }}" alt="">
                        </div>
                        <p>Edit</p>
                    </div>
                    <p>Addres: 211/138 Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, Hồ Chí Minh 700000 Việt Nam</p>
                    <p>Phone: 0888807947</p>
                    <hr>
                    <div style="justify-content: space-between; display: flex;">
                        <div style="display: flex; align-items: center">
                            <p>Hyper Designer</p>
                        </div>
                        <p>Edit</p>
                    </div>
                    <p>Addres: 211/138 Hoàng Hoa Thám, Phường 05, Quận Phú Nhuận, Hồ Chí Minh 700000 Việt Nam</p>
                    <p>Phone: 0888807947</p>

                    <div style="text-align: center">
                        <button
                        style="width: 196px; height: 40px; margin-top: 40px; color: white; background-color: #424242; border: 1px; border-radius: 4px">Add new address</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>

<style>
    body {
        margin: 0
    }
</style>
