<title>Gallery</title>

<x-layouts::app>
    <div class="main">
        <div class="image-contain">
            @foreach($images as $image)
                <a href="{{url($image->imageUrl)  }}">
                    <img class="image-single" src='{{$image->imageUrl}}' />
                </a>
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
        grid-template-columns: repeat(3, minmax(100px, 1fr));
        gap: 4px;
    }


    .image-single {
        border-radius: 8px;
        transition-duration: .3s;
        max-width: 100%;
    }

    .image-single:hover {
        transition-duration: .1s;
        transform: scale(1.15);
    }

    @media screen and (max-width:1000px) {
        .image-contain {
            display: grid;
            grid-template-columns: 1fr;
            gap: 4px;
        }
    }
</style>