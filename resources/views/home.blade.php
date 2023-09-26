@extends ("layouts.public")

@section("content")
    <div class=" black-main">
        <img class="img-jumbo" src="./images/jumbotron.jpg" alt="">

        <div class="text-center position-relative">
            <button class="position-absolute button-blue button-absolute">CURRENT SERIES</button> 

            <div class="row row-cols-6 gy-3 mt-5 pb-3 card-container">
                @foreach ($comics as $comic)
                <!-- ciclo for per le card -->
                <a class="text-decoration-none" href="{{ route('characters') }}">
                    <div class="card bg-black">
                        <img src="{{ $comic['thumb'] }}">
                        <div class="card-body text-white">{{ $comic['series'] }}</div>
                    </div>
                </a>

                @endforeach
                <button class="button-blue button-load">LOAD MORE</button>
            </div>
        </div>
    </div>
@endsection
