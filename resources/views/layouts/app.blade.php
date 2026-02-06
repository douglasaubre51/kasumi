@vite(['resources/css/app.css', 'resources/js/app.js'])


<div class='main-content'>
    <a class="header-title" href="{{url('/')  }}">Kasumi</a>
    <x-nav-header />

    {{ $slot }}
</div>

<style>
    a {
        text-decoration: none;
        color: black;
    }

    .header-title {
        font-size: 17rem;
    }

    .main-content {
        margin: 24px;
    }

    @media screen and (max-width:1000px) {
        .header-title {
            display: flex;
            flex-direction: row;
            justify-content: center;
            font-size: 15rem;
        }
    }
</style>