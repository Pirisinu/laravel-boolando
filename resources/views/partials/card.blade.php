@php
    $products = config('products')
@endphp

<div class="col">
    <!-- card  -->
    @foreach ($products as $key => $product)
    <a class="card mx-2 mb-5" href="{{ route('product', ['id' => $key]) }}">
        <div class="card-image">
            <div class="images">
                <img src="/img/{{$product['frontImage'] }}" alt="{{ $product['frontImage'] }}">
                <img class="secondary-image" src="/img/{{$product['backImage'] }}" alt="{{ $product['backImage'] }}">
            </div>
            <div class="favourite">&hearts;</div>
            <div class="card-badge">
                @forelse ($product['badges'] as $badge)
                    <span class="badge {{ $badge['type']=== 'tag' ? 'badge-green' : 'badge-red'}}">{{ $badge['value'] }}</span>
                    @php
                        if(empty($product['withDiscount'])){
                            $product['withDiscount'] = false;

                            if($badge['type'] ==='discount'){
                                $product['withDiscount'] = true;
                            }
                        }
                    @endphp
                @empty
                    @php
                        $product['withDiscount'] = false;
                    @endphp
                @endforelse
            </div>
        </div>
        <div class="card-text">
            <span class="brand">{{ $product['brand'] }}</span>
            <h3 class="product-name">{{ $product['name'] }}</h3>
            @php
                $finalPrice = $product['price'];
                $withDiscount = !empty($product['withDiscount']);

                if ($withDiscount) {
                    $discount = -(float) $product['badges'][0]['value'] / 100;
                    $finalPriceWithDiscount = $finalPrice * (1 - $discount);
                }
            @endphp

            <div class="price">
                @if ($withDiscount && $finalPriceWithDiscount != $finalPrice)
                <span class="new-price">{{ number_format($finalPriceWithDiscount, 2) }}&euro;</span>
                <del>{{ number_format($finalPrice, 2) }}&euro;</del>
                @else
                    <span>{{ number_format($finalPrice, 2) }}&euro;</span>
                @endif
            </div>
        </div>
        @endforeach
        <!-- /card  -->
    </a>
  </div>
