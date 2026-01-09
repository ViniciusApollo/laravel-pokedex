@extends('site.layout.app')

@section('content')
    <div class="">
        <input type="text" name="search" id="" class="search-pokemon-input">
    </div>

    <div class="swiper mySwiper">
        <h1 class="text-[64px]">Pokemons</h1>
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 6,
        });
    </script>
@endpush
