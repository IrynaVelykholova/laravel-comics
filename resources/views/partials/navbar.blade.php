@php
    $navLinks = [
        [ "name" => "CHARACTERS"],
        [ "name" => "COMICS"],
        [ "name" => "MOVIES"],
        [ "name" => "TV"],
        [ "name" => "GAMES"],
        [ "name" => "COLLECTABLES"],
        [ "name" => "VIDEOS"],
        [ "name" => "FANS"],
        [ "name" => "NEWS"],
        [ "name" => "SHOP"],
    ];
@endphp




<header class="container">
    <img src="./images/dc-logo.png" alt="Logo DC">
    <div class="d-flex align-items-center">
            @foreach ($navLinks as $link)
                <div class="ms-3">
                    <a href="#" class="nav-link">
                        {{ $link["name"] }}
                    </a>
                </div>
            @endforeach
    </div>
</header>