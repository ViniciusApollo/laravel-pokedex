@extends('site.layout.app')

@section('content')
    <div class="">
        <input type="text" name="search" id="" class="search-pokemon-input">
    </div>

    <div class="swiper mySwiper">
        <h1 class="text-[64px]">Pokemons</h1>
        <div class="swiper-wrapper">
            @foreach ($pokemons as $pokemon)
                <div class="swiper-slide">
                    <h2>{{ $pokemon['name'] }}</h2>
                </div>
            @endforeach
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
