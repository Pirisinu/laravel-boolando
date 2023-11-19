@php
    $products = config('products')
@endphp

<div class="col">
    <!-- card  -->
    @foreach ($products as $product)
    <div class="card">
      <div class="card-image">
        <div class="images">
          <img src="/img/{{$product['frontImage'] }}" alt="{{ $product['frontImage'] }}">
          <img class="secondary-image" src="/img/{{$product['backImage'] }}" alt="{{ $product['backImage'] }}">
        </div>
        <div class="favourite">&hearts;</div>
        {{-- <div class="card-badge">
          <span v-if="product['discount']" class="badge discount">{{product['discount']}}</span>
          <span v-if="product['sostenibilita']" class="badge tag">Sostenibilità</span>
        </div> --}}
      </div>
      <div class="card-text">
        <span class="brand">{{ $product['brand'] }}</span>
        <h3 class="product-name">{{ $product['name'] }}</h3>
        <div class="price">
          <span>{{ $product['price'] }}</span>
          <del>{{ $product['price'] }}</del>
        </div>
      </div>
    </div>
    @endforeach
    <!-- /card  -->
  </div>
