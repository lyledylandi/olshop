@extends('frontend.layout.master')

@section('content')
  <article class="tile is-child box">
        <!-- Put any content you want -->
<div class="columns is-desktop">
        @foreach($products as $product)
        <div class="column">
           <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      @foreach($product->productImage as $image)
      <img src="{!! $image->name !!}" alt="Placeholder image">
      @endforeach
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
          <img src="http://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">{!! $product->name !!}</p>
        <p class="subtitle is-6">@johnsmith</p>
      </div>
    </div>

    <div class="content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Phasellus nec iaculis mauris. <a>@bulmaio</a>.
      <a href="#">#css</a> <a href="#">#responsive</a>
      <br>
      <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
    </div>
  </div>
</div>
</div>
        @endforeach
  </div>


        
      </article>
@endsection