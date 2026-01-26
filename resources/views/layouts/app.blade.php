@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class='main-content'>
    <span class="header-title">Kasumi</span>
    <x-nav-header />

    {{ $slot }}
</div>

<style>
    .main-content {
        margin: 24px;
    }

    .header-title {
        font-size: 42px;
    }
</style>