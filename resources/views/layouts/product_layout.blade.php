<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    @vite('resources/js/app.js')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous'/>

</head>
<body class="p-view">
    <main class="product d-flex align-items-center gap-4">
        <div class="card-image">
            <div class="images h-100">
                <img src="/img/{{ $product['frontImage'] }}" alt="{{ $product['frontImage'] }}">
                <img class="secondary-image" src="/img/{{ $product['backImage'] }}" alt="{{ $product['backImage'] }}">
            </div>
            <div class="favourite">&hearts;</div>
        </div>
        <div class="card-text">
            <span class="brand">{{ $product['brand'] }}</span>
            <h3 class="product-name">{{ $product['name'] }}</h3>
            <div class="price">
                <span>{{ $product['price'] }}</span>
                @if (isset($product['badges']) && count($product['badges']) >= 2 && $product['badges'][1]['type'] === 'discount')
                    <del>{{ $product['price'] * 2 }}</del>
                @endif
            </div>
        </div>
        <a class="p-view" href="{{ route('main') }}">home</a>
    </main>
</body>
</html>
