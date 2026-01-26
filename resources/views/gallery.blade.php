<title>Gallery</title>

<x-layouts::app>
    <div class="main">
        <div class="image-contain">
            @foreach($images as $image)
                <img class="image-single" src='{{$image->imageUrl}}' />
            @endforeach
        </div>
    </div>
</x-layouts::app>

<style>
    .main {
        margin: 50px 10px 10px 10px;
    }

    .image-contain {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 4px;
    }

    .image-single {
        border-radius: 4px;
    }
</style>