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
                <p style="font-size: 15px; font-weight: bold;">My Addresses</p>
                <div
                    style=" width: 840px; height: 604px; border: 1px solid #EEEEEE; margin-bottom: 300px;padding: 50px;">
                    <div style="display: flex">
                        <div>
                            <p>First Name</p>
                            <input style="width: 365px; height: 40px; margin-right: 10px;" type="text"
                                placeholder="hyper@gmail.com">
                        </div>
                        <div>
                            <p>Last Name</p>
                            <input style="width: 365px; height: 40px;" type="text">
                        </div>
                    </div>
                    <p>Street Address </p>
                    <input style="width: 750px; height: 40px;" type="text" placeholder="Address">
                    <div style="display: flex">
                        <div>
                            <p>City</p>
                            <input style="width: 365px; height: 40px; margin-right: 10px;" type="text">
                        </div>
                        <div>
                            <p>Postcode / ZIP</p>
                            <input style="width: 365px; height: 40px;" type="number">
                        </div>
                    </div>
                    <div style="display: flex">
                        <div>
                            <p>Country *</p>
                            <div class="selectdiv">
                                <label>
                                    <select>
                                        <option selected> Select Box </option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Last long option</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div>
                            <p>State / Province *</p>
                            <div class="selectdiv">
                                <label>
                                    <select>
                                        <option selected> Select Box </option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Last long option</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div style="display: table-caption;">
                        <input style="margin-top: 32px; margin-bottom: 40px;" type="checkbox">Ship to a different
                    address
                    <button
                        style="width: 196px; height: 41px; color: white; background-color: #424242; border: 1px; border-radius:4px ">Save</button>
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

    .selectdiv {
        position: relative;
        /*Don't really need this just for demo styling*/
        margin-right: 15px;
        float: left;
        width: 365px;
        height: 40px;
    }

    /* IE11 hide native button (thanks Matt!) */
    select::-ms-expand {
        display: none;
    }

    .selectdiv:after {
        content: '<>';
        font: 17px "Consolas", monospace;
        color: #333;
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
        right: 11px;
        /*Adjust for position however you want*/

        top: 18px;
        padding: 0 0 2px;
        border-bottom: 1px solid #999;
        /*left line */

        position: absolute;
        pointer-events: none;
    }

    .selectdiv select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        /* Add some styling */

        display: block;
        width: 365px;
        height: 40px;
        float: right;
        margin: 10px 0px;
        padding: 0px 24px;
        font-size: 16px;
        line-height: 1.75;
        color: #333;
        background-color: #ffffff;
        background-image: none;
        border: 1px solid #cccccc;
        -ms-word-break: normal;
        word-break: normal;
        border-radius: 4px
    }
</style>
