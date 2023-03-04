<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4 class="text-left sm:text-center text-2xl sm:text-4xl md:text-5xl font-bold text-gray-900 py-10 sm:py-20">
        {{ $product->title }}
    </h4>

    <div class="pt-10 pb-10 text-gray-900 text-xl">
        <p class="font-bold text-2xl text-black pt-10">
            {{ $product->content }}
        </p>

        <p class="text-base text-black pt-10">
            {{ $product->price }}
        </p>
    </div>
</body>
</html>
