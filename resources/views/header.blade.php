<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/header.css') }}" media="screen" />
<div class="header" id="header">
    <div class="txtContainer">
        <p class="txtWC">Welcome Couture2gether</p>
        <div class="txtImgContainer">
            <img class="iconHeader1" src="{{ url('image_path/icon_lcMy.png') }}">
            <p>English</p>
            <img class="iconHeader1" src="{{ url('image_path/icon_bot.png') }}">
            <a href="#login"><img class="iconHeader1" src="{{ url('image_path/icon_person.png') }}"></a>
        </div>
    </div>
    <div class="txtContainer">
        <h1 class="txtFashion">Fashion</h1>
        <div class="txtImgContainer2">
            <a href="#search"><img class="iconHeader2" src="{{ url('image_path/icon_search.png') }}"></a>
            <img class="iconHeader2" src="{{ url('image_path/icon_heart.png') }}">
            <img class="iconHeader2" src="{{ url('image_path/icon_cart.png') }}">
        </div>
    </div>
    <div class="navigation">
        <a href="#" class="menuNavigation">New arrivlas</a>
        <a href="#" class="menuNavigation2">Women</a>
        <a href="#" class="menuNavigation2">Man</a>
        <a href="#" class="menuNavigation2">Designer</a>
        <a href="#" class="menuNavigation2">Sale</a>
    </div>

</div>

<div class="search" id="search">
    <div style=" text-align: -webkit-center; margin-bottom: 50px;">
        <h1 class="txtFashion">Search</h1>
        <div style="display: flex; border: 1px solid #EEEEEE; border-radius: 4px; width: 795px; height: 40px">
            <img class="iconHeader2" src="{{ url('image_path/icon_search.png') }}">
            <input style="border: 1px; width: 795px; height: 40px" type="search" placeholder="search...">
        </div>
    </div>
</div>

<style>
    .search {
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        visibility: hidden;
        opacity: 0;
        position: absolute;
    }

    .search:target {
        position: relative;
        visibility: visible;
        opacity: 1;
    }
</style>

