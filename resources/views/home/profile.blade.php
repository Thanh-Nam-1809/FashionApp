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
        <p style="font-size: 13px; color:#757575">Home / My Account / My Profile</p>
        <hr>
        <div style="flex: 1; display: flex">
            <div style="flex: 20%">
                @include('profile')
            </div>
            <div style="flex: 80%;">
                <p style="font-size: 15px; font-weight: bold;">My Profile</p>
                <div
                    style=" width: 840px; height: 545px; border: 1px solid #EEEEEE; margin-bottom: 300px;padding: 50px;">
                    <p>Email</p>
                    <input style="width: 397px; height: 40px; border-radius: 2px; border: 1px solid #E0E0E0" type="email" name="" id="" placeholder="hyper@gmail.com">
                    <p style="margin-top: 30px">Name</p>
                    <input style="width: 397px; height: 40px; border-radius: 2px; border: 1px solid #E0E0E0" type="text" name="" id="" placeholder="Hyper">
                    <p style="margin-top: 30px">Phone</p>
                    <input style="width: 397px; height: 40px; border-radius: 2px; border: 1px solid #E0E0E0" type="number" name="" id="">
                    <p style="margin-top: 30px">Password</p>
                    <input style="width: 397px; height: 40px; border-radius: 2px; border: 1px solid #E0E0E0" type="password" name="" id="" placeholder="*************">
                    <br>
                    <button
                        style="width: 196px; height: 40px; margin-top: 40px; color: white; background-color: #424242; border: 1px; border-radius: 4px">Up
                        date</button>
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
