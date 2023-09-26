@php
    $DcComicsLinks = [
        [ "name" => "Characters"],
        [ "name" => "Comics"],
        [ "name" => "Movies"],
        [ "name" => "Tv"],
        [ "name" => "Games"],
        [ "name" => "Videos"],
        [ "name" => "News"],
    ];
    $ShopLinks = [
        [ "name" => "Shop Dc"],
        [ "name" => "Shop Collectables"],
    ];
    $DCLinks = [
        [ "name" => "Terms Of Use"],
        [ "name" => "Privacy Policy(New)" ],
        [ "name" => "AdChoice"],
        [ "name" => "Advertising"],
        [ "name" => "Jobs"],
        [ "name" => "Subscriptions"],
        [ "name" => "Talent Workshops"],
        [ "name" =>  "CPSC Certificates"],
        [ "name" =>  "Ratings"],
        [ "name" =>  "Shop Help"],
        [ "name" =>  "Contact Us"],
    ];
    $SitesLinks = [
        [ "name" =>  "DC"],
        [ "name" =>  "Mad Magazine"],
        [ "name" =>  "DC Kids"],
        [ "name" =>  "DC Universe"],
        [ "name" =>  "DC Power Visa"],
    ];
    $footerLinks = [
        [ "name" =>  "DIGITAL COMICS", "img" => "buy-comics-digital-comics.png"],
        [ "name" =>  "DC MERCHANDISE", "img" => "buy-comics-merchandise.png" ],
        [ "name" =>  "SUBSCRIPTION", "img" => "buy-comics-subscriptions.png" ],
        [ "name" =>  "COMIC SHOP LOCATOR", "img" => "buy-comics-shop-locator.png"],
        [ "name" =>  "DC POWER VISA", "img" => "buy-dc-power-visa.svg"],
    ];
@endphp



<footer>
    <section class="first-footer container">
        <ul class="d-flex align-items-center justify-content-between">
            @foreach ($footerLinks as $link)
            <li class="mt-5">
                <a href="#" class="nav-link text-white">
                    <img src="`./images/{{ $link["img"] }}`" class="blueImg" alt="" />
                    {{ $link["name"] }}
                </a>
            </li>
            @endforeach
    </section>


</footer>